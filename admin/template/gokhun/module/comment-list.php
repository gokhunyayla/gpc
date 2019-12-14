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
										<div class="col-4 text-right"><a href="<?php print $database->afv("contact-add"); ?>" class="btn btn-primary"><?php print $data["word"]["add-new"]; ?></a></div>
									</div>
								</div>
														
								<div class="card-body p-3">
								
								
									<?php
									$key="comment";
									$var0=$site["database"]->ls($site["database"]->prefix."status<>'removed'");
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

													<th><?php print $data["word"]["status"]; ?></th>
													<th><?php print $data["word"]["name"]; ?></th>
													<th></th>

												</tr>
											</thead>
											<tbody>

												<?php
												foreach ($var0 as $key0=>$value0)
												{
												?>
												
													<?php
													if (is_array($value0["comment"]))
													{
													?>
												
														<?php
														foreach ($value0["comment"] as $key1=>$value1)
														{
														?>

															<?php
															$medium["redirect"]=$database->afv($key."-list");
															$medium["variable"]=$key;
															$medium["id"]=$value0["id"];
															$medium["key"]=$key1;
															?>

															<?php
															$status=$value1["status"];
															foreach ($data["status"]["comment"] as $key2=>$value2)
															{
															?>

																<?php
																if ($value2["variable"]==$value1["status"])
																{
																?>

																	<?php
																	$status=$value2["name"];
																	?>

																<?php
																}
																?>

															<?php
															}
															?>

															<tr>
																<td><div class="btn btn-<?php if ($value1["status"]=="read"){ ?>success<?php }else{ ?>danger<?php } ?>"><?php print $status; ?></div></td>
																<td><?php print $value1["name"]; ?></td>
																<td class="text-right">
																	
																	<form id="edit-<?php print $key0; ?>-<?php print $key1; ?>" method="post" action="<?php print $database->afv($key."-edit"); ?>"><input type="hidden" name="medium" value="<?php print base64_encode(json_encode($medium, JSON_UNESCAPED_UNICODE)); ?>"></form>
																	<form id="remove-<?php print $key0; ?>-<?php print $key1; ?>" method="post" action="<?php print $database->afv($key."-remove"); ?>"><input type="hidden" name="medium" value="<?php print base64_encode(json_encode($medium, JSON_UNESCAPED_UNICODE)); ?>"><div id="remove-<?php print $key0; ?>-<?php print $key1; ?>-result"></div></div></form>
																	<form id="delete-<?php print $key0; ?>-<?php print $key1; ?>" method="post" action="<?php print $database->afv($key."-delete"); ?>"><input type="hidden" name="medium" value="<?php print base64_encode(json_encode($medium, JSON_UNESCAPED_UNICODE)); ?>"><div id="delete-<?php print $key0; ?>-<?php print $key1; ?>-result"></div></div></form>

																	<a class="mr-3" href="javascript:document.forms['edit-<?php print $key0; ?>-<?php print $key1; ?>'].submit();"><i class="fa fa-edit"></i></a>
																	<a class="mr-3" href="javascript:send('remove-<?php print $key0; ?>-<?php print $key1; ?>');"><i class="fa fa-minus-circle"></i></a>
																	<a class="mr-3" href="javascript:send('delete-<?php print $key0; ?>-<?php print $key1; ?>');"><i class="fa fa-trash"></i></a>
																</td>
															</tr>

														<?php
														}
														?>
													
													<?php
													}
													?>
							
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