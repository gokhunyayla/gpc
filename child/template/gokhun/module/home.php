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
		?>
		
		<?php
		$var0=$database->ofv("slider");
		?>
		
		<?php
		if ($var0!=-1)
		{
		?>
		
			<section class="mb-5">
				<div class="container">
					
					<div class="owl-carousel gokhun owl-theme">
						
						<?php
						foreach ($var0 as $key0=>$value0)
						{
						?>
						
							<div class="item row align-items-center">
								<div class="col-12 col-lg-7 col-xl-6 order-lg-2 mb-8 mb-lg-0">
									
									<?php
									if ($value0["image"]=="")
									{
									?>
									
										<img src="https://via.placeholder.com/540x532" alt="<?php print $value0["title"]; ?>" title="<?php print $value0["title"]; ?>">
									
									<?php
									}
									else
									{
									?>
									
										<?php
										$slide_image=$data["config"]["path"]["media"]."/".$value0["image"];
										?>
									
										<?php
										if (file_exists($slide_image))
										{
										?>
									
											<img src="<?php print $slide_image; ?>" alt="<?php print $value0["title"]; ?>" title="<?php print $value0["title"]; ?>">
										
										<?php
										}
										else
										{
										?>
										
											<img src="https://via.placeholder.com/540x532" alt="<?php print $value0["title"]; ?>" title="<?php print $value0["title"]; ?>">
										
										<?php
										}
										?>
									
									<?php
									}
									?>
								
								</div>
								<div class="col-12 col-lg-7 col-xl-6 order-lg-1">
									<h6 class="border rounded-pill px-3 py-2 text-muted d-inline-block">
										<span class="badge badge-pill badge-primary mr-3"><?php print $value0["new-tag"]; ?></span> 
										<?php print $value0["new-content"]; ?>
									</h6>
									<h1><?php print $value0["title"]; ?></h1>
									<p class="lead text-muted"><?php print $value0["summary"]; ?></p>
									<a href="<?php print $value0["button-link"]; ?>" class="btn btn-primary font-weight-bold"><?php print $value0["button-tag"]; ?></a>
								</div>
							</div>
						
						<?php
						}
						?>
						
					</div>

				</div>
			</section>
		
		<?php
		}
		?>
		
		
		<section class="mb-5">
			<div class="container">
				
				<div class="text-center"><h2><?php print $data["word"]["our-corporate"]; ?></h2></div>
				<hr />
				
				<div class="row align-items-center justify-content-between">
					<div class="col-6">
						<img class="img-fluid" src="https://via.placeholder.com/1000x963" alt="Firma Başlığı" title="Firma Başlığı">
					</div>
					<div class="col-6">
						<h2 class="mt-3 mb-3 font-weight-ligher"><?php print $data["corporate"]["name"]; ?></h2>
						<p class="text-secondary"><?php print $data["corporate"]["summary"]; ?></p>
						<a href="<?php print $data["corporate"]["app-store"]; ?>" class="btn btn-primary text-white mr-1">
							<div class="d-inline-block m-3 text-white text-center">
								<small class="d-block text-white">
									<?php print $data["word"]["download-here"]; ?>
								</small>
								<?php print $data["word"]["download"]; ?>
							</div>
						</a>
						
						<a href="<?php print $data["corporate"]["google-play"]; ?>" class="btn btn-dark text-white mr-1">
							<div class="d-inline-block m-3 text-white text-center">
								<small class="d-block text-white">
									<?php print $data["word"]["download-here"]; ?>
								</small>
								<?php print $data["word"]["download"]; ?>
							</div>
						</a>
					</div>
				</div>
			</div>
		</section>
		
		<section class="mb-5">
			<div class="container text-center">
				<div class="owl-carousel gorevler owl-theme">
										
					<?php
					$var0=$database->afc(6);
					?>
					
					<?php
					if ($var0!=-1)
					{
					?>
										
						<?php
						foreach ($var0 as $key0=>$value0)
						{
						?>
					
							<div class="item">
								<div class="card border-0">
									<div class="card-header border-0 bg-white">
										
										<?php
										$image=$value0;
										include($data["config"]["path"]["module"]."/list-portfolio-image.php");
										?>
										
									</div>
									<div class="card-body">
										<a href="<?php print $value0["link"]; ?>"><h3 class="text-dark font-weight-bold h4"><?php print $value0["content"]["link-mask"]; ?></h3></a>
										<p><?php print $value0["content"]["body"]["text"]["summary"]; ?></p>
										<a href="<?php print $value0["link"]; ?>" class="btn-link-600"><?php print $data["word"]["read-more"]; ?></a>
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
		</section>
		
		
		<section class="mb-5">
			<div class="container">
				
				<?php
				$var0=$database->afc(9);
				?>
				
				<?php
				if ($var0!=-1)
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
		
		
		
		<section class="mb-5">
			<div class="container text-center">
				
				<h2><?php print $data["word"]["testimonials"]; ?></h2>
				<hr />
				
				<div class="owl-carousel gorevler owl-theme">
					
					<?php
					$var0=$database->ofv("testimonails");
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
					
						<?php
						foreach ($var0 as $key0=>$value0)
						{
						?>
					
							<div class="item">
								<div class="card border-0">
									<div class="card-body">
										<h3 class="text-dark font-weight-bold h4"><?php print $value0["title"]; ?></h3>
										<p><?php print $value0["name"]; ?></p>
										<?php print $value0["comment"]; ?>
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
		</section>
		
		
		<?php
		include($data["config"]["path"]["module"]."/footer.php");
		include($data["config"]["path"]["module"]."/script.php");
		?>
        
    </body>
</html>