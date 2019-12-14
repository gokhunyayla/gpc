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
				<div class="row mt-5 mb-5 align-items-center justify-content-between">
					<div class="col-6">
						
						<?php
						$image=$data["corporate"]["brand-image"];
						?>
						
						<?php
						if (isset($image["corporate-image"]) && $image["corporate-image"]!="")
						{
						?>
							
							<?php
							$corporate_image=$data["config"]["path"]["media"]."/".$image["corporate-image"];
							?>
						
							<?php
							if (file_exists($corporate_image))
							{
							?>
						
								<img class="img-fluid" src="<?php print $corporate_image; ?>" alt="<?php print $data["corporate"]["name"]; ?>" title="<?php print $data["corporate"]["name"]; ?>">
							
							<?php
							}
							else
							{
							?>
								
								<img class="img-fluid" src="https://via.placeholder.com/1200x1183" alt="<?php print $data["corporate"]["name"]; ?>" title="<?php print $data["corporate"]["name"]; ?>">
						
							<?php
							}
							?>
							
						<?php
						}
						else
						{
						?>
						
							<img class="img-fluid" src="https://via.placeholder.com/1200x1183" alt="<?php print $data["corporate"]["name"]; ?>" title="<?php print $data["corporate"]["name"]; ?>">
						
						<?php
						}
						?>
					
					</div>
					<div class="col-6">
						<h1><?php print $data["corporate"]["name"]; ?></h1>
						<p class="lead text-secondary"><?php print $data["corporate"]["summary"]; ?></p>
						<p class="text-secondary"><?php print $data["corporate"]["detail"]; ?></p>
					</div>
				</div>

				<div class="row mt-5 mb-5 text-center">
					<div class="col-12 bg-primary text-white p-5" ><?php print $data["corporate"]["slogan"]; ?></div>
				</div>
			</div>
		</section>
		
		<section class="mb-5">
			<div class="container text-center">
				<div class="owl-carousel gorevler owl-theme">
					
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
		
		<?php
		include($data["config"]["path"]["module"]."/footer.php");
		include($data["config"]["path"]["module"]."/script.php");
		?>
	
    </body>
</html>