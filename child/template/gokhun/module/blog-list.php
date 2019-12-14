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
		
		<div class="container">
			
			<section class="row mt-5 mb-5">
				<div class="col-8">
					
					<?php
					$var0=$database->afc(10, "desc");
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
					
							<div class="card mb-4">
								
								<?php
								$image=$value0;
								include($data["config"]["path"]["module"]."/list-image.php")
								?>
								
								<div class="card-body">
									<a href="<?php print $value0["link"]; ?>"><h2 class="card-title mt-3 h5 font-weight-medium"><?php print $value0["content"]["body"]["text"]["title"]; ?></h2></a>
									<p class="card-text"><?php print $value0["content"]["body"]["text"]["summary"]; ?></p>
									<a href="<?php print $value0["link"]; ?>" class="btn btn-primary"><?php print $data["word"]["read-more"]; ?></a>
								</div>
								<div class="card-footer bg-white text-secondary">
									
									<?php 
									$date=$datetimes->e($value0["insert_date"]); 
									?>
									
									<?php print $date["date"][2]; ?> <?php print $datetimes->month($date["date"][1]); ?> <?php print $date["date"][0]; ?> <?php print $data["word"]["hour"]; ?> <?php print $date["time"][0]; ?>:<?php print $date["time"][1]; ?><?php print $data["word"]["published-at"]; ?> <?php print $data["word"]["by"]; ?><a href="#"> <?php print $value0["content"]["head"]["meta-author"]; ?></a> <span style="float:right;"><a class="mr-2" href="<?php print $value0["link"]; ?>" title="<?php print $value0["content"]["body"]["text"]["title"]; ?>"><i class="fa fa-eye"></i> <?php print $value0["count"]; ?></a> <a class="mr-2" href="<?php print $value0["link"]; ?>" title="<?php print $value0["content"]["body"]["text"]["title"]; ?>"><i class="fa fa-comment-o"></i> <?php if (is_array($value0["comment"])){ ?> <?php print count($value0["comment"]); ?> <?php }else{ ?>0<?php } ?></a></span>
								
								</div>
							</div>
					
						<?php
						}
						?>

					<?php
					}
					?>
										
				</div>
				
				<?php
				include($data["config"]["path"]["module"]."/aside.php");
				?>
				
			</section>
		</div>
		
		<?php
		include($data["config"]["path"]["module"]."/footer.php");
		include($data["config"]["path"]["module"]."/script.php");
		?>
	
    </body>
</html>