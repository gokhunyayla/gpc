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
								$var0=$site["database"]->ls($site["database"]->prefix."status<>'removed' and ".$site["database"]->prefix."id=".$medium["id"]);
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
									if (isset($var0[0]["comment"][$medium["key"]]))
									{
									?>
							
										<?php
										$var0=$var0[0]["comment"][$medium["key"]];
										?>
														
										<ul id="tab" class="nav nav-tabs">
											<li class="nav-item">
												<a id="general-tab" class="nav-link active" data-toggle="tab" href="#general" role="tab" aria-controls="<?php print $data["word"]["send"]; ?>" aria-selected="true"><?php print $data["word"]["comment"]; ?></a>
											</li>
										</ul>

										<?php $formname="comment"; ?>
										<form id="<?php print $formname; ?>" method="post" action="<?php print $database->afv("comment-edit-check"); ?>">

											<input type="hidden" name="medium" value="<?php print base64_encode(json_encode($medium ,JSON_UNESCAPED_UNICODE)); ?>">

											<div id="tab-content" class="tab-content">

												<div id="general" class="tab-pane fade show active pt-3 pb-3 pl-1" role="tabpanel" aria-labelledby="general-tab">
													<div class="card">
														<div class="card-body">

															<div class="form-group">
																<label><?php print $data["word"]["status"]; ?></label>
																<select class="form-control" name="source[comment][<?php print $medium["key"]; ?>][status]">

																	<?php
																	foreach ($data["status"]["comment"] as $key0=>$value0)
																	{
																	?>

																		<option <?php if ($value0["variable"]==$var0["status"]){ ?>selected<?php } ?> value="<?php print $value0["variable"]; ?>"><?php print $value0["name"]; ?></option>

																	<?php
																	}
																	?>

																</select>
															</div>
															
															<div class="form-group">
                                                                <label><?php print $data["word"]["name"]; ?></label>
                                                                <input type="text" class="form-control" name="source[comment][<?php print $medium["key"]; ?>][name]" placeholder="<?php print $data["word"]["name"]; ?>" value="<?php print $var0["name"]; ?>">
                                                            </div>
															
															<div class="form-group">
                                                                <label><?php print $data["word"]["comment"]; ?></label>
                                                                <textarea rows="5" class="form-control" name="source[comment][<?php print $medium["key"]; ?>][comment]" placeholder="<?php print $data["word"]["comment"]; ?>"><?php print $var0["comment"]; ?></textarea>
                                                            </div>
															
															<?php
															if (isset($var0["insert-date"]) && $var0["insert-date"]!="")
															{
															?>
															
																<input type="hidden" name="source[comment][<?php print $meidum["key"]; ?>][insert-date]" value="<?php print $var0["insert-date"]; ?>">

																<div class="form-group">
																	<label><?php print $data["word"]["insert-date"]; ?>: </label>

																	<?php
																	$var1=$datetimes->e($var0["insert-date"]);
																	?>

																	<?php print $var1["date"][2]; ?> <?php print $datetimes->month($var1["date"][1]); ?> <?php print $var1["date"][0]; ?> <?php print $data["word"]["hour"]; ?>: <?php print $var1["time"][0]; ?>:<?php print $var1["time"][1]; ?>:<?php print $var1["time"][2]; ?>

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

												<div class="card mt-3 p-0 border-0">
													<div class="card-body p-0"><div id="<?php print $formname; ?>-result"></div></div>
												</div>
											</div>
										</form>
									
									<?php
									}
									else
									{
									?>
							
										<?php print $data["word"]["comment-cannot-be-found"]; ?>
							
									<?php
									}
									?>
							
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