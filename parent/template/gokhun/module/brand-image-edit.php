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

								<?php $formname="edit"; ?>
								<form id="<?php print $formname; ?>" method="post" action="<?php print $database->afv("brand-image-edit-check"); ?>">
									<div id="tab-content" class="tab-content">
										
										<?php
										$variable="brand-image";
										$var1=$site["database"]->ofv($variable);
										?>
										
										<?php
										foreach ($var0 as $key0=>$value0)
										{
										?>
										
											<div id="<?php print $value0["code"]; ?>" class="tab-pane <?php if ($key0==0){ ?>fade show active<?php } ?> pt-3 pb-3 pl-1" role="tabpanel" aria-labelledby="tab-<?php print $value0["code"]; ?>">
												
												<?php
												if ($var1==-1)
												{
												?>
												
													<?php print $data["word"]["there-is-no-content-yet"]; ?>
												
												<?php
												}
												else
												{
												?>
												
													<div class="card">
														<div class="card-body">
															
															<input type="hidden" name="variable" value="<?php print $variable; ?>">
															<input type="hidden" name="redirect" value="<?php print $data["page"]["link"]; ?>">
															
															<?php
															foreach ($var1 as $key1=>$value1)
															{
															?>
															
																<div class="row">
																	<div class="col-4">
																		
																		<div class="form-group">
																			<div class="file btn btn-primary w-100">
																				<?php print $data["word"][$key1]; ?> <?php print $data["word"]["upload"]; ?>
																				<input type="file" name="source[<?php print $value0["code"]; ?>][<?php print $key1; ?>]" />
																			</div>
																		</div>
																	
																	</div>
																	
																	<?php
																	$filevar="media/".$value0["code"]."/".$value1;
																	if (file_exists($filevar))
																	{
																	?>
																	
																		<div class="col-8"><a href="#" data-toggle="modal" data-target="#<?php print $value0["code"]; ?>-<?php print $key1; ?>" title="<?php print $value1; ?>"><img height="50px;" src="<?php print $filevar; ?>" alt="<?php print $value1; ?>" title="<?php print $value1; ?>"></a></div>
																		
																		<div class="modal fade" id="<?php print $value0["code"]; ?>-<?php print $key1; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php print $key0; ?>-<?php print $key1; ?>" aria-hidden="true">
																		  <div class="modal-dialog" role="document">
																			<div class="modal-content">
																			  <div class="modal-header">
																				<h5 class="modal-title" id="exampleModalLabel"><?php print $value0["name"]; ?>: <?php print $value1; ?></h5>
																				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																				  <span aria-hidden="true">&times;</span>
																				</button>
																			  </div>
																			  <div class="modal-body">
																				<img class="img-fluid" src="<?php print $filevar; ?>" alt="<?php print $value1; ?>" title="<?php print $value1; ?>">
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
																		
																</div>
																														
															<?php
															}
															?>
															
															<div id="<?php print $formname; ?>-result"></div>

														</div>

														<div class="card-footer">
															<div class="btn-group">
																<button type="button" onClick="javascript:send('<?php print $formname; ?>')" class="btn btn-primary"><?php print $data["word"]["update"]; ?></button>
															</div>
														</div>
													</div>
												
												<?php
												}
												?>
												
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