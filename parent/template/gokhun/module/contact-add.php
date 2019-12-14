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
		
                            <ul id="tab" class="nav nav-tabs">
                                <li class="nav-item">
                                    <a id="general-tab" class="nav-link active" data-toggle="tab" href="#general" role="tab" aria-controls="<?php print $data["word"]["send"]; ?>" aria-selected="true"><?php print $data["word"]["general-settings"]; ?></a>
                                </li>
                                <li class="nav-item">
                                    <a id="form-tab" class="nav-link" data-toggle="tab" href="#form" role="tab" aria-controls="form" aria-selected="false"><?php print $data["word"]["form-settings"]; ?></a>
                                </li>
                            </ul>
							
                            <?php $formname="contact"; ?>
                            <form id="<?php print $formname; ?>" method="post" action="<?php print $database->afv("contact-add-check"); ?>">

								<?php
								$medium["redirect"]=$database->afv("contact-list");
								$medium["variable"]=$formname;
								?>
								
                                <input type="hidden" name="medium" value="<?php print base64_encode(json_encode($medium ,JSON_UNESCAPED_UNICODE)); ?>">

                                <div id="tab-content" class="tab-content">

                                    <div id="general" class="tab-pane fade show active pt-3 pb-3 pl-1" role="tabpanel" aria-labelledby="general-tab">
                                        <div class="card">
                                            <div class="card-body">

                                                <div class="form-group">
                                                    <label><?php print $data["word"]["status"]; ?></label>
                                                    <select class="form-control" name="source[status]">

                                                        <?php
                                                        foreach ($data["status"]["form"] as $key0=>$value0)
                                                        {
                                                        ?>

                                                            <option value="<?php print $value0["variable"]; ?>"><?php print $value0["name"]; ?></option>

                                                        <?php
                                                        }
                                                        ?>

                                                    </select>
                                                </div>

                                                <input type="hidden" name="source[status_date]" value="<?php print date("Y-m-d H:i:s"); ?>">
												<input type="hidden" name="source[admin]" value="<?php print $data["user"]["personal"]["name"]; ?> <?php print $data["user"]["personal"]["surname"]; ?>">
												<input type="hidden" name="source[language]" value="<?php print $site["database"]->language; ?>">
												<input type="hidden" name="source[insert_date]" value="<?php print date("Y-m-d H:i:s"); ?>">

                                            </div>

                                            <div class="card-footer">
                                                <div class="btn-group">
                                                    <a href="<?php print $database->afv($formname."-list"); ?>" class="btn btn-secondary mr-3"><?php print $data["word"]["back"]; ?></a>
                                                    <button type="button" onclick="javascript:send('<?php print $formname; ?>');" class="btn btn-primary"><?php print $data["word"]["add-new"]; ?></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div id="form" class="tab-pane fade pt-3 pb-3 pl-1" role="tabpanel" aria-labelledby="form-tab">
                                        <div class="card">
                                            <div class="card-body">
												
												<div class="form-group">
                                                    <label><?php print $data["word"]["name"]; ?></label>
                                                    <input type="text" class="form-control" name="source[content][name]" placeholder="<?php print $data["word"]["name"]; ?>">
                                                </div>
												
												<div class="form-group">
                                                    <label><?php print $data["word"]["phone"]; ?></label>
                                                    <input type="text" class="form-control" name="source[content][phone]" placeholder="<?php print $data["word"]["phone"]; ?>">
                                                </div>
												
												<div class="form-group">
                                                    <label><?php print $data["word"]["email"]; ?></label>
                                                    <input type="email" class="form-control" name="source[content][email]" placeholder="<?php print $data["word"]["email"]; ?>">
                                                </div>
												
                                                <div class="form-group">
                                                    <label><?php print $data["word"]["message"]; ?></label>
                                                    <textarea rows="5" class="form-control" name="source[content][message]" placeholder="<?php print $data["word"]["message"]; ?>"></textarea>
                                                </div>

                                            </div>

                                            <div class="card-footer">
                                                <div class="btn-group">
                                                    <a href="<?php print $database->afv($formname."-list"); ?>" class="btn btn-secondary mr-3"><?php print $data["word"]["back"]; ?></a>
                                                    <button type="button" class="btn btn-primary" onclick="javascript:send('<?php print $formname; ?>');"><?php print $data["word"]["add-new"]; ?></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card mt-3 p-0 border-0">
                                        <div class="card-body p-0"><div id="<?php print $formname; ?>-result"></div></div>
                                    </div>
                                </div>
                            </form>
					
							
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