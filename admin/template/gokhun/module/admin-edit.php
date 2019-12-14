<!doctype html>
<html lang="tr">
    <head>
		
        <?php
		include($data["config"]["path"]["module"]."/meta.php");
		include($data["config"]["path"]["module"]."/link.php");
		include($data["config"]["path"]["module"]."/title.php");
		?>
		
    </head>
    <body>
		
		
		<div class="row m-0 p-0">
			<div class="col-3 p-0">

				<?php
				include($data["config"]["path"]["module"]."/left-navigation.php");
				?>

			</div>

			<div class="col-9 p-0">
				
				<?php
				include($data["config"]["path"]["module"]."/right-top-bar.php");
				?>
				
				<section class="mb-5 p-3">
					<div class="row">
						<div class="col-12">
							
                            <?php
                            $medium["redirect"]=$database->afv("admin-edit");
							$medium["variable"]="admin";
                            ?>

                            <?php
                            $var0=$database->us($database->prefix."id=".$data["user"]["id"]);
                            ?>

                            <?php
                            if ($var0==-1)
                            {
                            ?>

                                <?php print $data["word"]["there-is-no-content-found"]; ?>

                            <?php
                            }
                            else
                            {
                            ?>

                                <?php
                                $var0=$var0[0];
                                ?>

                                <ul id="tab" class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a id="general-tab" class="nav-link active" data-toggle="tab" href="#general" role="tab" aria-controls="<?php print $data["word"]["send"]; ?>" aria-selected="true"><?php print $data["word"]["general-settings"]; ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="property-tab" class="nav-link" data-toggle="tab" href="#property" role="tab" aria-controls="property" aria-selected="false"><?php print $data["word"]["properties"]; ?></a>
                                    </li>
									<li class="nav-item">
                                        <a id="personal-tab" class="nav-link" data-toggle="tab" href="#personal" role="tab" aria-controls="personal" aria-selected="false"><?php print $data["word"]["personal-settings"]; ?></a>
                                    </li>
                                </ul>

                                <?php $formname="admin"; ?>
                                <form id="<?php print $formname; ?>" method="post" action="<?php print $database->afv("admin-edit-check"); ?>">

                                    <input type="hidden" name="medium" value="<?php print base64_encode(json_encode($medium ,JSON_UNESCAPED_UNICODE)); ?>">

                                    <div id="tab-content" class="tab-content">

                                        <div id="general" class="tab-pane fade show active pt-3 pb-3 pl-1" role="tabpanel" aria-labelledby="general-tab">
                                            <div class="card">
                                                <div class="card-body">

                                                    <div class="form-group">
                                                        <label><?php print $data["word"]["status"]; ?></label>
                                                        <select class="form-control" name="source[status]">

                                                            <?php
                                                            foreach ($data["status"]["user"] as $key0=>$value0)
                                                            {
                                                            ?>

                                                                <option <?php if ($value0["variable"]==$var0["status"]){ ?>selected<?php } ?> value="<?php print $value0["variable"]; ?>"><?php print $value0["name"]; ?></option>

                                                            <?php
                                                            }
                                                            ?>

                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label><?php print $data["word"]["email"]; ?>:</label>
                                                        <?php print base64_decode($var0["email"]); ?>
                                                    </div>
													
													<div class="form-group">
                                                        <label><?php print $data["word"]["password"]; ?></label>
                                                        <input type="text" class="form-control" name="source[password]" placeholder="<?php print $data["word"]["password"]; ?>" value="<?php print base64_decode($var0["password"]); ?>">
                                                    </div>
													
													<?php
                                                    if ($var0["insert_date"]!="")
                                                    {
                                                    ?>

                                                        <div class="form-group">
                                                            <label><?php print $data["word"]["insert-date"]; ?>: </label>

                                                            <?php
                                                            $var1=$datetimes->e($var0["insert_date"]);
                                                            ?>

                                                            <?php print $var1["date"][2]; ?> <?php print $datetimes->month($var1["date"][1]); ?> <?php print $var1["date"][0]; ?> <?php print $data["word"]["hour"]; ?>: <?php print $var1["time"][0]; ?>:<?php print $var1["time"][1]; ?>:<?php print $var1["time"][2]; ?>

                                                        </div>

                                                    <?php
                                                    }
                                                    ?>
													
													<input type="hidden" class="form-control" name="source[update_date]" value="<?php print $datetimes->today; ?>">

                                                </div>

                                                <div class="card-footer">
                                                    <div class="btn-group">
                                                        <a href="<?php print $database->afv($formname."-edit"); ?>" class="btn btn-secondary mr-3"><?php print $data["word"]["back"]; ?></a>
                                                        <button type="button" onclick="javascript:send('<?php print $formname; ?>');" class="btn btn-primary"><?php print $data["word"]["update"]; ?></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div id="property" class="tab-pane fade pt-3 pb-3 pl-1" role="tabpanel" aria-labelledby="property-tab">
                                            <div class="card">
                                                <div class="card-body">

                                                    <div class="form-group">
                                                        <label><?php print $data["word"]["user-group"]; ?>: </label>
                                                    	<?php print $data["word"][$var0["property"]["group"]]; ?>
													</div>

                                                </div>

                                                <div class="card-footer">
                                                    <div class="btn-group">
                                                        <a href="<?php print $database->afv($formname."-edit"); ?>" class="btn btn-secondary mr-3"><?php print $data["word"]["back"]; ?></a>
                                                        <button type="button" class="btn btn-primary" onclick="javascript:send('<?php print $formname; ?>');"><?php print $data["word"]["update"]; ?></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										<div id="personal" class="tab-pane fade pt-3 pb-3 pl-1" role="tabpanel" aria-labelledby="personal-tab">
                                            <div class="card">
                                                <div class="card-body">

                                                    <?php
                                                    foreach ($var0["personal"] as $key0=>$value0)
                                                    {
                                                    ?>

                                                        <div class="form-group">
                                                            <label><?php print $data["word"][$key0]; ?></label>
                                                            <input type="text" class="form-control" name="source[personal][<?php print $key0; ?>]" placeholder="<?php print $data["word"][$key0]; ?>" value="<?php print $value0; ?>">
                                                        </div>

                                                    <?php
                                                    }
                                                    ?>

                                                </div>

                                                <div class="card-footer">
                                                    <div class="btn-group">
                                                        <a href="<?php print $database->afv($formname."-edit"); ?>" class="btn btn-secondary mr-3"><?php print $data["word"]["back"]; ?></a>
                                                        <button type="button" class="btn btn-primary" onclick="javascript:send('<?php print $formname; ?>');"><?php print $data["word"]["update"]; ?></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mt-3 p-0 border-0">
                                            <div class="card-body p-0"><div id="<?php print $formname; ?>-result"></div></div>
                                        </div>
                                    </div>
                                </form>

                            <?php
                            }
                            ?>						
							
						</div>
					</div>
				</section>
				
			</div>
		</div>

       	<?php
		include($data["config"]["path"]["module"]."/script.php");
		?>
		
    </body>
</html>