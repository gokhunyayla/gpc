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
			
			<div class="row mt-5 mb-5">
				<div class="col-12">
					
					<?php
                    $image=$data["page"];
                    include($data["config"]["path"]["module"]."/list-fullwidth-image.php");
                    ?>
					
					<p class="lead text-secondary mt-5 "><?php print $data["page"]["content"]["body"]["text"]["summary"]; ?></p>
					<p class="text-secondary mb-5"><?php print $data["page"]["content"]["body"]["text"]["detail"]; ?></p>
				</div>
			</div>
		</div>
		
		<?php
		include($data["config"]["path"]["module"]."/footer.php");
		include($data["config"]["path"]["module"]."/script.php");
		?>
	
    </body>
</html>