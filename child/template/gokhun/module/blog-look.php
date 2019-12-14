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
                    $image=$data["page"];
                    include($data["config"]["path"]["module"]."/list-image.php")
                    ?>
					
					<p class="mt-3">
					
						<?php 
                        $date=$datetimes->e($data["page"]["insert_date"]); 
                        ?>

                        <?php print $date["date"][2]; ?> <?php print $datetimes->month($date["date"][1]); ?> <?php print $date["date"][0]; ?> <?php print $data["word"]["hour"]; ?> <?php print $date["time"][0]; ?>:<?php print $date["time"][1]; ?><?php print $data["word"]["published-at"]; ?> <?php print $data["word"]["by"]; ?><a href="#"> <?php print $data["page"]["content"]["head"]["meta-author"]; ?></a> <span style="float:right;"><a class="mr-2" href="<?php print $data["page"]["link"]; ?>" title="<?php print $data["page"]["content"]["body"]["text"]["title"]; ?>"><i class="fa fa-eye"></i> <?php print $data["page"]["count"]; ?></a> <a class="mr-2" href="<?php print $data["page"]["link"]; ?>" title="<?php print $data["page"]["content"]["body"]["text"]["title"]; ?>"><i class="fa fa-comment-o"></i> <?php if (is_array($data["page"]["comment"])){ ?> <?php print count($data["page"]["comment"]); ?> <?php }else{ ?>0<?php } ?></a></span>
					
					</p>
					<p class="mt-4"><?php print $data["page"]["content"]["body"]["text"]["detail"]; ?></p>		
					
					<?php
					include($data["config"]["path"]["module"]."/comments.php");
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