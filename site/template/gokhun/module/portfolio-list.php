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
		
		<?php
		include($data["config"]["path"]["module"]."/header.php");
		include($data["config"]["path"]["module"]."/breadcrumbs.php");
		?>
		
		<section class="mb-5">
			<div class="container">
				
				<?php
				$var0=$database->afc($data["page"]["id"]);
				?>
				
				<?php
				if ($var0==-1)
				{
				?>
				
					<?php
					print $data["word"]["there-is-no-content-yet"];
					?>
				
				<?php
				}
				else
				{
				?>
				
					<nav>
						<div class="nav nav-tabs d-flex justify-content-center border-0" role="tablist">
							
							<?php
							foreach ($var0 as $key0=>$value0)
							{
							?>
							
								<a id="nav-tab-<?php print $key0; ?>" href="#tab-<?php print $key0; ?>" class="nav-item nav-link border-0 <?php if ($key0==0){ ?>active<?php } ?>" data-toggle="tab" aria-controls="tab-<?php print $key0; ?>" aria-selected="<?php if ($key0==0){ ?>true<?php }else{ ?>false<?php } ?>"><?php print $value0["content"]["link-mask"]; ?></a>

							<?php
							}
							?>
							
						</div>
					</nav>

					<div id="nav-tab-content" class="tab-content mt-5">
						
						<?php
                        foreach ($var0 as $key0=>$value0)
                        {
                        ?>
						
							<div id="tab-<?php print $key0; ?>" class="tab-pane <?php if ($key0==0){ ?>fade active show<?php } ?>" role="tabpanel" aria-labelledby="nav-tab-<?php print $key0; ?>">
								
								<?php
								$var1=$database->afc($value0["id"]);
								?>
								
								<?php
								if ($var1==-1)
								{
								?>
								
									<?php
									print $data["word"]["there-is-no-content-yet"];
									?>
								
								<?php
								}
								else
								{
								?>
								
									<div class="row">
										
										<?php
										foreach ($var1 as $key1=>$value1)
										{
										?>
										
										<div class="card col-4 border-0">
											<div class="card-header border-0 bg-white">
												
												<?php
												$image=$value1;
												include($data["config"]["path"]["module"]."/list-portfolio-image.php");
												?>
												
											</div>
											<div class="card-body">
												<a href="<?php print $value1["link"]; ?>"><h3 class="text-dark font-weight-bold h4"><?php print $value0["content"]["body"]["text"]["title"]; ?></h3></a>
												<p><?php print $value0["content"]["body"]["text"]["summary"]; ?></p>
												<a href="#" class="btn-link-600"><?php print $data["word"]["read-more"]; ?></a>
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
						
						<?php
						}
						?>

					</div>
				
				<?php
				}
				?>
				
			</div>
		</section>
		
		<?php
		include($data["config"]["path"]["module"]."/footer.php");
		include($data["config"]["path"]["module"]."/script.php");
		?>
	
    </body>
</html>