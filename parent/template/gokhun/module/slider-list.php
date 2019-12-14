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
							
							<div class="card">
															
								<div class="card-header">
									<div class="row">
										<div class="col-8"><h5><?php print $data["page"]["content"]["body"]["text"]["title"]; ?></h5></div>
										<div class="col-4 text-right"><a href="<?php print $database->afv("slider-add"); ?>" class="btn btn-primary"><?php print $data["word"]["add-new"]; ?></a></div>
									</div>
								</div>
														
								<div class="card-body p-3">
								
								
									<?php
									$key="slider";
									$var0=$site["database"]->ofv($key);
									?>

									<?php
									if ($var0==-1)
									{
									?>

										<?php print $data["word"]["there-is-no-data-yet"]; ?>

									<?php
									}
									else
									{
									?>

										<table id="table_id" class="display">
											<thead>
												<tr>

													<th><?php print $data["word"]["image"]; ?></th>
													<th><?php print $data["word"]["title"]; ?></th>
													<th></th>

												</tr>
											</thead>
											<tbody>

												<?php
												foreach ($var0 as $key0=>$value0)
												{
												?>

													<?php
													$medium["redirect"]=$database->afv($key."-list");
													$medium["variable"]=$key;
													$medium["key"]=$key0;
													?>

													<tr>
														<td>
															
															<?php
															$filevar="media/".$site["database"]->language."/".$value0["image"];
															?>
															
															<?php
															if (file_exists($filevar))
															{
															?>
															
																<a href="#" data-toggle="modal" data-target="#image-<?php print $key0; ?>" title="<?php print $value0["image"]; ?>"><img height="50px" src="<?php print $filevar; ?>" alt="<?php print $value0["image"]; ?>" title="<?php print $value0["image"]; ?>"></a>
																
																<div class="modal fade" id="image-<?php print $key0; ?>" tabindex="-1" role="dialog" aria-labelledby="image-<?php print $key0; ?>" aria-hidden="true">
                                                                  <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                      <div class="modal-header">
                                                                        <h5 class="modal-title"><?php print $key0; ?>: <?php print $value0["image"]; ?></h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                          <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                      </div>
                                                                      <div class="modal-body">
                                                                        <img class="img-fluid" src="<?php print $filevar; ?>" alt="<?php print $value0["image"]; ?>" title="<?php print $value0["image"]; ?>">
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
														
														</td>
														<td><?php print $value0["title"]; ?></td>
														<td>
															<form id="edit-<?php print $key0; ?>" method="post" action="<?php print $database->afv($key."-edit"); ?>"><input type="hidden" name="medium" value="<?php print base64_encode(json_encode($medium, JSON_UNESCAPED_UNICODE)); ?>"></form>
															<form id="delete-<?php print $key0; ?>" method="post" action="<?php print $database->afv("option-key-delete"); ?>"><input type="hidden" name="medium" value="<?php print base64_encode(json_encode($medium, JSON_UNESCAPED_UNICODE)); ?>"><div id="delete-<?php print $key0; ?>-result"></div></div></form>

															<a class="mr-3" href="javascript:document.forms['edit-<?php print $key0; ?>'].submit();"><i class="fa fa-edit"></i></a>
															<a class="mr-3" href="javascript:send('delete-<?php print $key0; ?>');"><i class="fa fa-trash"></i></a>
														</td>
													</tr>

												<?php
												}
												?>

											</tbody>
										</table>

									<?php
									}
									?>
								
								</div>
						
							</div>
							
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