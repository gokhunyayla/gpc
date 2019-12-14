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
										<div class="col-4 text-right"><a href="<?php print $database->afv("top-navigation-add"); ?>" class="btn btn-primary"><?php print $data["word"]["add-new"]; ?></a></div>
									</div>
								</div>
														
								<div class="card-body p-3">
								
								
									<?php
									$key="top-navigation";
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
													
													<th><?php print $data["word"]["turn"]; ?></th>
													<th><?php print $data["word"]["category"]; ?></th>
													<th><?php print $data["word"]["link-mask"]; ?></th>
													<th><?php print $data["word"]["link"]; ?></th>
													<th><?php print $data["word"]["class"]; ?></th>
													<th></th>

												</tr>
											</thead>
											<tbody>

												<?php
												$i=1;
												foreach ($var0 as $key0=>$value0)
												{
												?>

													<?php
													$medium["redirect"]=$database->afv($key."-list");
													$medium["variable"]=$key;
													$medium["key"]=$key0;
													?>

													<tr>
														<td><?php print $i; ?></td>
														<td>
															
															<?php
															if ($value0["category"]==-1)
															{
															?>
															
																<?php print $data["word"]["main-category"]; ?>
															
															<?php
															}
															else
															{
															?>
																															
																<?php
																if (isset($var0[$value0["category"]]))
																{
																?>
															
																	<?php print $var0[$value0["category"]]["link-mask"]; ?>

																<?php
																}
																else
																{
																?>
															
																	<?php print $data["word"]["category-cannot-be-found"]; ?>
																
																<?php
																}
																?>
															
															<?php
															}
															?>
															
														</td>
														<td><?php print $value0["link-mask"]; ?></td>
														<td><?php print $value0["link"]; ?></td>
														<td><?php print $value0["class"]; ?></td>
														<td>
															<form id="edit-<?php print $key0; ?>" method="post" action="<?php print $database->afv($key."-edit"); ?>"><input type="hidden" name="medium" value="<?php print base64_encode(json_encode($medium, JSON_UNESCAPED_UNICODE)); ?>"></form>
															<form id="delete-<?php print $key0; ?>" method="post" action="<?php print $database->afv("option-key-delete"); ?>"><input type="hidden" name="medium" value="<?php print base64_encode(json_encode($medium, JSON_UNESCAPED_UNICODE)); ?>"><div id="delete-<?php print $key0; ?>-result"></div></div></form>

															<a class="mr-3" href="javascript:document.forms['edit-<?php print $key0; ?>'].submit();"><i class="fa fa-edit"></i></a>
															<a class="mr-3" href="javascript:send('delete-<?php print $key0; ?>');"><i class="fa fa-trash"></i></a>
														</td>
													</tr>

												<?php
												$i++;
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