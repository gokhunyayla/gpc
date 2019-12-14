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
							if (isset($_POST["medium"]) && is_array(json_decode(base64_decode($_POST["medium"]), true)))
							{
							?>
							
								<?php
								$medium=json_decode(base64_decode($_POST["medium"]), true);
								?>
							
								<?php
								$var0=$site["database"]->cs($site["database"]->prefix."status<>'removed' and ".$site["database"]->prefix."id=".$medium["id"]);
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
											<a id="form-tab" class="nav-link" data-toggle="tab" href="#form" role="tab" aria-controls="form" aria-selected="false"><?php print $data["word"]["form-settings"]; ?></a>
										</li>
									</ul>
									
									<?php $formname="contact"; ?>
									<form id="<?php print $formname; ?>" method="post" action="<?php print $database->afv("contact-edit-check"); ?>">
										
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
																
																	<option <?php if ($value0["variable"]==$var0["status"]){ ?>selected<?php } ?> value="<?php print $value0["variable"]; ?>"><?php print $value0["name"]; ?></option>
																
																<?php
																}
																?>
																
															</select>
														</div>
														
														<?php
														if ($var0["status_date"]!="")
														{
														?>
	
															<div class="form-group">
																<label><?php print $data["word"]["status-date"]; ?>:</label>
																<?php print $var0["status_date"]; ?>
															</div>
														
														<?php 
														}
														?>
														
														<?php
														if ($var0["admin"]=="")
														{
														?>
															
															<div class="form-group">
																<label><?php print $data["word"]["responsible"]; ?>:</label>
																<?php print $data["word"]["there-is-no-responsible-yet"]; ?>
															</div>
														
														<?php
														}
														else
														{
														?>

															<div class="form-group">
																<label><?php print $data["word"]["responsible"]; ?></label>
																<?php print $data["word"]["responsible"]; ?>
															</div>
														
														<?php
														}
														?>
														
														<?php
														$var1=$site["database"]->ofv("language");
														?>
		
														<?php
														$language="";
														foreach ($var1 as $key1=>$value1)
														{
														?>
															
															<?php
															if ($value1["code"]==$var0["language"])
															{
															?>
														
																<?php
																$language=$value1["name"];
																?>
														
															<?php
															}
															?>
														
														<?php
														}
														?>
														
														<div class="form-group">
															<label><?php print $data["word"]["language-name"]; ?>: </label>
															<?php print $language; ?>
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

														<?php
														if ($var0["update_date"]!="")
														{
														?>

															<div class="form-group">
																<label><?php print $data["word"]["update-date"]; ?></label>
																<?php print $var0["update_date"]; ?>
															</div>
														
														<?php
														}
														?>

													</div>

													<div class="card-footer">
														<div class="btn-group">
															<a href="<?php print $database->afv($formname."-list"); ?>" class="btn btn-secondary mr-3"><?php print $data["word"]["back"]; ?></a>
															<button type="button" onclick="javascript:send('<?php print $formname; ?>');" class="btn btn-primary"><?php print $data["word"]["update"]; ?></button>
														</div>
													</div>
												</div>
											</div>


											<div id="form" class="tab-pane fade pt-3 pb-3 pl-1" role="tabpanel" aria-labelledby="form-tab">
												<div class="card">
													<div class="card-body">
														
														<?php
														foreach ($var0["content"] as $key0=>$value0)
														{
														?>
															
															<?php
															if ($key0=="message")
															{
															?>
														
																<div class="form-group">
																	<label><?php print $data["word"][$key0]; ?></label>
																	<textarea rows="5" class="form-control" name="source[content][<?php print $key0; ?>]" placeholder="<?php print $data["word"][$key0]; ?>"><?php print $value0; ?></textarea>
																</div>
														
															<?php
															}
															else
															{
															?>
														
																<div class="form-group">
																	<label><?php print $data["word"][$key0]; ?></label>
																	<input type="text" class="form-control" name="source[content][<?php print $key0; ?>]" placeholder="<?php print $data["word"][$key0]; ?>" value="<?php print $value0; ?>">
																</div>
														
															<?php
															}
															?>
														
														<?php
														}
														?>
														
													</div>

													<div class="card-footer">
														<div class="btn-group">
															<a href="<?php print $database->afv($formname."-list"); ?>" class="btn btn-secondary mr-3"><?php print $data["word"]["back"]; ?></a>
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
							
							<?php
							}
							else
							{
							?>
							
								<?php print $data["word"]["no-data-has-arrived"]; ?>
							
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