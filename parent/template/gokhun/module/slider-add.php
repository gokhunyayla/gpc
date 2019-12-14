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
                            $var0=$site["database"]->ofv("language");
                            ?>

                            <?php
                            if ($var0==-1)
                            {
                            ?>

                                <?php print $data["word"]["there-seems-no-language"]; ?>

                            <?php
                            }
                            else
                            {
                            ?>

                                <ul id="tab" class="nav nav-tabs">

                                    <?php
                                    foreach ($var0 as $key0=>$value0)
                                    {
                                    ?>

                                        <li class="nav-item">
                                            <a id="tab-<?php print $value0["code"]; ?>" class="nav-link <?php if ($key0==0){ ?>active<?php } ?>" data-toggle="tab" href="#<?php print $value0["code"]; ?>" role="tab" aria-controls="<?php print $value0["code"]; ?>" aria-selected="true"><?php print $value0["name"]; ?></a>
                                        </li>

                                    <?php
                                    }
                                    ?>

                                </ul>

                                <?php $formname="slider"; ?>
                                <form id="<?php print $formname; ?>" method="post" action="<?php print $database->afv("slider-add-check"); ?>">

                                    <div id="tab-content" class="tab-content">

                                        <?php
                                        $var1=$site["database"]->ofv($formname);
                                        ?>

                                        <?php
                                        foreach ($var0 as $key0=>$value0)
                                        {
                                        ?>

                                            <div id="<?php print $value0["code"]; ?>" class="tab-pane <?php if ($key0==0){ ?>fade show active<?php } ?> pt-3 pb-3 pl-1" role="tabpanel" aria-labelledby="tab-<?php print $value0["code"]; ?>">

                                                <div class="card">
                                                    <div class="card-body">

                                                        <input type="hidden" name="variable" value="<?php print $formname; ?>">
                                                        <input type="hidden" name="redirect" value="<?php print $database->afv($formname."-list"); ?>">

                                                        <?php
                                                        foreach ($var1 as $key1=>$value1)
                                                        {
                                                        ?>

                                                            <?php
                                                            foreach ($value1 as $key2=>$value2)
                                                            {
                                                            ?>

                                                                <input type="hidden" class="form-control" name="source[<?php print $value0["code"]; ?>][<?php print $key1; ?>][<?php print $key2; ?>]" placeholder="<?php print $data["word"][$key2]; ?>" value="<?php print $value2; ?>">

                                                            <?php
                                                            }
                                                            ?>

                                                        <?php
                                                        }
                                                        ?>

                                                        <?php
                                                        if ($var1==-1 || count($var1)==0)
                                                        {
                                                        ?>

                                                            <?php $keyn=0; ?>

                                                        <?php
                                                        }
                                                        else
                                                        {
                                                        ?>

                                                            <?php $keyn=$key1+1;?>

                                                        <?php
                                                        }
                                                        ?>

                                                        <div class="form-group">
                                                            <label><?php print $data["word"]["new-tag"]; ?></label>
                                                            <input type="text" class="form-control" name="source[<?php print $value0["code"]; ?>][<?php print $keyn; ?>][new-tag]" placeholder="<?php print $data["word"]["new-tag"]; ?>" value="">
                                                        </div>

                                                        <div class="form-group">
                                                            <label><?php print $data["word"]["new-content"]; ?></label>
                                                            <input type="text" class="form-control" name="source[<?php print $value0["code"]; ?>][<?php print $keyn; ?>][new-content]" placeholder="<?php print $data["word"]["new-content"]; ?>" value="">
                                                        </div>
														
														<div class="form-group">
                                                            <label><?php print $data["word"]["new-content"]; ?></label>
                                                            <input type="text" class="form-control" name="source[<?php print $value0["code"]; ?>][<?php print $keyn; ?>][new-content]" placeholder="<?php print $data["word"]["new-content"]; ?>" value="">
                                                        </div>
														
														<div class="form-group">
                                                            <label><?php print $data["word"]["title"]; ?></label>
                                                            <input type="text" class="form-control" name="source[<?php print $value0["code"]; ?>][<?php print $keyn; ?>][title]" placeholder="<?php print $data["word"]["title"]; ?>" value="">
                                                        </div>

                                                        <div class="form-group">
                                                            <label><?php print $data["word"]["summary"]; ?></label>
                                                            <textarea row="5" class="form-control" name="source[<?php print $value0["code"]; ?>][<?php print $keyn; ?>][summary]" placeholder="<?php print $data["word"]["summary"]; ?>"></textarea>
                                                        </div>
														
														<div class="form-group">
                                                            <label><?php print $data["word"]["button-tag"]; ?></label>
                                                            <input type="text" class="form-control" name="source[<?php print $value0["code"]; ?>][<?php print $keyn; ?>][button-tag]" placeholder="<?php print $data["word"]["button-tag"]; ?>" value="">
                                                        </div>
														
														<div class="form-group">
                                                            <label><?php print $data["word"]["button-link"]; ?></label>
                                                            <input type="text" class="form-control" name="source[<?php print $value0["code"]; ?>][<?php print $keyn; ?>][button-link]" placeholder="<?php print $data["word"]["button-link"]; ?>" value="">
                                                        </div>
														
                                        				<div class="form-group">
                                                            <div class="file btn btn-primary">
                                                                <?php print $data["word"]["image"]; ?> <?php print $data["word"]["upload"]; ?>
                                                                <input type="file" name="source[<?php print $value0["code"]; ?>][<?php print $keyn; ?>][image]" />
                                                            </div>
                                                        </div>

                                                        <div id="<?php print $formname; ?>-result"></div>

                                                    </div>

                                                    <div class="card-footer">
                                                        <div class="btn-group">
                                                            <a href="<?php print $database->afv($formname."-list"); ?>" class="btn btn-secondary mr-3"><?php print $data["word"]["back"]; ?></a>
                                                            <button type="button" onClick="javascript:send('<?php print $formname; ?>')" class="btn btn-primary"><?php print $data["word"]["add-new"]; ?></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php
                                        }
                                        ?>

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