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

									<?php
									$var1=$site["database"]->afi($medium["id"]); $var1=$var1[0];
									?>

									<ul id="tab" class="nav nav-tabs">
										<li class="nav-item">
											<a id="general-tab" class="nav-link active" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true"><?php print $data["word"]["general-settings"]; ?></a>
										</li>

										<?php
										foreach ($var0 as $key0=>$value0)
										{
										?>

											<li class="nav-item">
												<a id="<?php print $value0["code"]; ?>-tab" class="nav-link" data-toggle="tab" href="#<?php print $value0["code"]; ?>" role="tab" aria-controls="<?php print $value0["code"]; ?>" aria-selected="false"><?php print $value0["name"]; ?></a>
											</li>

										<?php
										}
										?>

									</ul>

									<?php $formname="link"; ?>
									<form id="<?php print $formname; ?>" enctype="multipart/form-data" method="post" action="<?php print $database->afv("link-edit-check"); ?>">
										
										<input type="hidden" name="medium" value="<?php print base64_encode(json_encode($medium ,JSON_UNESCAPED_UNICODE)); ?>">
										
										<div id="tab-content" class="tab-content">

											<div id="general" class="tab-pane fade show active pt-3 pb-3 pl-1" role="tabpanel" aria-labelledby="general-tab">
												<div class="card">
													<div class="card-body">
														
														<div class="form-group">
															<label><?php print $data["word"]["required-status"]; ?></label>
															
															<select class="form-control" name="source[required]">
																																
																<?php
																foreach ($data["required"]["link"] as $key2=>$value2)
																{
																?>
																
																	<option <?php if($var1["required"]==$value2["variable"]){ ?>selected<?php } ?> value="<?php print $value2["variable"]; ?>"><?php print $value2["name"]; ?></option>
																
																<?php
																}
																?>
																
															</select>
														</div>
														
														<div class="form-group">
															<label><?php print $data["word"]["status"]; ?></label>
															
															<select class="form-control" name="source[status]">
																																
																<?php
																foreach ($data["status"]["link"] as $key2=>$value2)
																{
																?>
																
																	<option <?php if($var1["status"]==$value2["variable"]){ ?>selected<?php } ?> value="<?php print $value2["variable"]; ?>"><?php print $value2["name"]; ?></option>
																
																<?php
																}
																?>
																
															</select>
															
														</div>
																																										
														<?php
														$var2=$site["database"]->ls();
														?>
														
														<div class="form-group">
															<label><?php print $data["word"]["category"]; ?></label>
															<select class="form-control" name="source[category]">
																
																<option <?php if($var1["category"]==-1){ ?>selected<?php } ?> value="-1"><?php print $data["word"]["main-category"]; ?></option>
																
																<?php
																foreach ($var2 as $key2=>$value2)
																{
																?>
																
																	<option <?php if($var1["category"]==$value2["id"]){ ?>selected<?php } ?> value="<?php print $value2["id"]; ?>"><?php print $value2["content"]["link-mask"]; ?></option>
																
																<?php
																}
																?>
																
															</select>
														</div>
														
														<?php
														$var2=$database->ofv("structure");
														?>
														
														<div class="form-group">
															<label><?php print $data["word"]["variable"]; ?></label>
															
															<select class="form-control" name="source[variable]">
																																
																<?php
																foreach ($var2 as $key2=>$value2)
																{
																?>
																
																	<option <?php if ($var1["variable"]==$key2){ ?>selected<?php } ?> value="<?php print $key2; ?>"><?php print $key2; ?></option>
																
																<?php
																}
																?>
																
															</select>
														</div>
																												
														<?php
														if ($var1["status_date"]!="")
														{
														?>
	
															<div class="form-group">
																<label><?php print $data["word"]["status-date"]; ?>:</label>
																<?php print $var1["status_date"]; ?>
															</div>
														
														<?php 
														}
														?>
														
														<?php
														if ($var1["owner"]!="")
														{
														?>
	
															<div class="form-group">
																<label><?php print $data["word"]["owner"]; ?>:</label>
																<?php print $var1["owner"]; ?>
															</div>
														
														<?php 
														}
														?>
																												
														<?php
														if ($var1["insert_date"]!="")
														{
														?>

															<div class="form-group">
																<label><?php print $data["word"]["creation-date"]; ?>: </label>
																
																<?php
																$var2=$datetimes->e($var1["insert_date"]);
																?>
																
																<?php print $var2["date"][2]; ?> <?php print $datetimes->month($var2["date"][1]); ?> <?php print $var2["date"][0]; ?> <?php print $data["word"]["hour"]; ?>: <?php print $var2["time"][0]; ?>:<?php print $var2["time"][1]; ?>:<?php print $var2["time"][2]; ?>
																
															</div>
														
														<?php
														}
														?>
														
														<?php
														if ($var1["update_date"]!="")
														{
														?>

															<div class="form-group">
																<label><?php print $data["word"]["update-date"]; ?>: </label>
																
																<?php
																$var2=$datetimes->e($var1["update_date"]);
																?>
																
																<?php print $var2["date"][2]; ?> <?php print $datetimes->month($var2["date"][1]); ?> <?php print $var2["date"][0]; ?> <?php print $data["word"]["hour"]; ?>: <?php print $var2["time"][0]; ?>:<?php print $var2["time"][1]; ?>:<?php print $var2["time"][2]; ?>
																
															</div>
														
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

											<?php
											foreach ($var0 as $key0=>$value0)
											{
											?>

												<div id="<?php print $value0["code"]; ?>" class="tab-pane fade pt-3 pb-3 pl-1" role="tabpanel" aria-labelledby="<?php print $value0["code"]; ?>-tab">
													<div class="card">
														<div class="card-header">
															<div class="row">
																<div class="col-8">

																	<ul id="tab" class="nav nav-tabs">
																		<li class="nav-item">
																			<a id="<?php print $value0["code"]; ?>-seo-tab" class="nav-link active" data-toggle="tab" href="#<?php print $value0["code"]; ?>-seo" role="tab" aria-controls="<?php print $value0["code"]; ?>-seo" aria-selected="true"><?php print $data["word"]["seo"]; ?></a>
																		</li>
																		<li class="nav-item">
																			<a id="<?php print $value0["code"]; ?>-text-tab" class="nav-link" data-toggle="tab" href="#<?php print $value0["code"]; ?>-text" role="tab" aria-controls="<?php print $value0["code"]; ?>-text" aria-selected="false"><?php print $data["word"]["text"]; ?></a>
																		</li>
																		<li class="nav-item">
																			<a id="<?php print $value0["code"]; ?>-image-tab" class="nav-link" data-toggle="tab" href="#<?php print $value0["code"]; ?>-image" role="tab" aria-controls="<?php print $value0["code"]; ?>-image" aria-selected="false"><?php print $data["word"]["image"]; ?></a>
																		</li>
																	</ul>

																</div>
																<div class="col-4 text-right"></div>
															</div>
														</div>
														<div class="card-body">
															<div id="tab-content-tr" class="tab-content">

																<div id="<?php print $value0["code"]; ?>-seo" class="subtab tab-pane fade show active pt-3 pb-3 pl-1" role="tabpanel" aria-labelledby="<?php print $value0["code"]; ?>-seo-tab">
																	<div class="form-group">
																		<label><?php print $data["word"]["link-mask"]; ?></label>
																		<input type="text" class="form-control" name="source[content_<?php print $value0["code"]; ?>][link-mask]" placeholder="<?php print $data["word"]["link-mask"]; ?>" value="<?php print $var1["content"]["link-mask"]; ?>">
																	</div>
																	<div class="form-group">
																		<label><?php print $data["word"]["link"]; ?></label>
																		<input type="text" class="form-control" name="source[link_<?php print $value0["code"]; ?>]" placeholder="<?php print $data["word"]["link"]; ?>" value="<?php print $var1["link"]; ?>">
																	</div>
																	<div class="form-group">
																		<label><?php print $data["word"]["title"]; ?></label>
																		<input type="text" class="form-control" name="source[content_<?php print $value0["code"]; ?>][head][title]" placeholder="<?php print $data["word"]["title"]; ?>" value="<?php print $var1["content"]["head"]["title"]; ?>">
																	</div>
																	<div class="form-group">
																		<label><?php print $data["word"]["meta-description"]; ?></label>
																		<textarea rows="3" class="form-control" name="source[content_<?php print $value0["code"]; ?>][head][meta-description]" placeholder="<?php print $data["word"]["meta-description"]; ?>"><?php print $var1["content"]["head"]["meta-description"]; ?></textarea>
																	</div>
																	<div class="form-group">
																		<label><?php print $data["word"]["meta-keywords"]; ?></label>
																		<textarea rows="3" class="form-control" name="source[content_<?php print $value0["code"]; ?>][head][meta-keywords]" placeholder="<?php print $data["word"]["meta-keywords"]; ?>"><?php print $var1["content"]["head"]["meta-keywords"]; ?></textarea>
																	</div>
																	<div class="form-group">
																		<label><?php print $data["word"]["meta-author"]; ?></label>
																		<input type="text" class="form-control" name="source[content_<?php print $value0["code"]; ?>][head][meta-author]" placeholder="<?php print $data["word"]["meta-author"]; ?>" value="<?php print $var1["content"]["head"]["meta-author"]; ?>">
																	</div>
																	<div class="form-group">
																		<label><?php print $data["word"]["link-canonical"]; ?></label>
																		<input type="text" class="form-control" name="source[content_<?php print $value0["code"]; ?>][head][link-canonical]" placeholder="<?php print $data["word"]["link-canonical"]; ?>" value="<?php print $var1["content"]["head"]["link-canonical"]; ?>">
																	</div>
																</div>

																<div id="<?php print $value0["code"]; ?>-text" class="subtab tab-pane fade pt-3 pb-3 pl-1" role="tabpanel" aria-labelledby="<?php print $value0["code"]; ?>-text-tab">
																	<div class="form-group">
																		<label><?php print $data["word"]["in-page-title"]; ?></label>
																		<input type="text" class="form-control" name="source[content_<?php print $value0["code"]; ?>][body][text][title]" placeholder="<?php print $data["word"]["in-page-title"]; ?>" value="<?php print $var1["content"]["body"]["text"]["title"]; ?>">
																	</div>
																	<div class="form-group">
																		<label><?php print $data["word"]["summary"]; ?></label>
																		<textarea rows="3" class="form-control" name="source[content_<?php print $value0["code"]; ?>][body][text][summary]" placeholder="<?php print $data["word"]["summary"]; ?>"><?php print $var1["content"]["body"]["text"]["summary"]; ?></textarea>
																	</div>
																	<div class="form-group">
																		<label><?php print $data["word"]["detail"]; ?></label>
																		<textarea id="summernote" rows="15" class="form-control" name="source[content_<?php print $value0["code"]; ?>][body][text][detail]" placeholder="<?php print $data["word"]["detail"]; ?>"><?php print $var1["content"]["body"]["text"]["detail"]; ?></textarea>
																	</div>
																</div>

																<div id="<?php print $value0["code"]; ?>-image" class="subtab tab-pane fade pt-3 pb-3 pl-1" role="tabpanel" aria-labelledby="<?php print $value0["code"]; ?>-image-tab">
																	
																	<div class="form-group">
                                                                        <div class="file btn btn-primary">
                                                                            <?php print $data["word"]["upload"]; ?>
                                                                            <input type="file" name="source[content_<?php print $value0["code"]; ?>][body][image][0]" />
                                                                        </div>
                                                                    </div>
																	
																	<?php
																	if (isset($var1["content"]["body"]["image"][0]))
																	{
																	?>

																		<?php
																		$filevar="media/".$value0["code"]."/".$var1["content"]["body"]["image"][0];
																		?>

																		<?php
																		if (file_exists($filevar))
																		{
																		?>

																			<a href="#" data-toggle="modal" data-target="#image-<?php print $value0["code"]; ?>" title="<?php print $var1["content"]["body"]["image"][0]; ?>"><img height="150px" src="<?php print $filevar; ?>" alt="<?php print $var1["content"]["body"]["image"][0]; ?>" title="<?php print $var1["content"]["body"]["image"][0]; ?>"></a>

																			<div class="modal fade" id="image-<?php print $value0["code"]; ?>" tabindex="-1" role="dialog" aria-labelledby="image-<?php print $value0["code"]; ?>" aria-hidden="true">
																			  <div class="modal-dialog" role="document">
																				<div class="modal-content">
																				  <div class="modal-header">
																					<h5 class="modal-title"><?php print $value0["code"]; ?>: <?php print $var1["content"]["body"]["image"][0]; ?></h5>
																					<button type="button" class="close" data-dismiss="modal" aria-label="<?php print $data["word"]["close"]; ?>">
																					  <span aria-hidden="true">&times;</span>
																					</button>
																				  </div>
																				  <div class="modal-body">
																					<img class="img-fluid" src="<?php print $filevar; ?>" alt="<?php print $var1["content"]["body"]["image"][0]; ?>" title="<?php print $var1["content"]["body"]["image"][0]; ?>">
																				  </div>
																				  <div class="modal-footer">
																					<button type="button" class="btn btn-secondary" data-dismiss="modal"><?php print $data["word"]["close"]; ?></button>
																				  </div>
																				</div>
																			  </div>
																			</div>

																		<?php
																		}
																		?>
																	
																	<?php
																	}
																	?>
																	
																</div>

															</div>
														</div>

														<div class="card-footer">
															<div class="btn-group">
																<a href="<?php print $database->afv($formname."-list"); ?>" class="btn btn-secondary mr-3"><?php print $data["word"]["back"]; ?></a>
																<button type="button" class="btn btn-primary" onclick="javascript:send('<?php print $formname; ?>');"><?php print $data["word"]["update"]; ?></button>
															</div>
														</div>
													</div>
												</div>

											<?php
											}
											?>	
											
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