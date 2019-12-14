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
			<div class="container text-center">
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