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
		
		
		<div class="container">
			
			<div class="row align-items-center justify-content-between">
								
				<div class="form-signin text-center">
					
					<?php $formname="login"; ?>
					<form id="<?php print $formname; ?>" method="post" action="<?php print $database->afv("login-check"); ?>">
						<h1 class="h2 mb-3 col-12 text-center"><?php print $data["page"]["content"]["body"]["text"]["title"]; ?></h1>
						<div class="form-group">
							<input type="email" autocomplete="off" class="form-control" name="email" placeholder="<?php print $data["word"]["write-your-email"]; ?>">
							<input type="password" class="form-control" name="password" placeholder="<?php print $data["word"]["write-your-password"]; ?>">
						</div>
						
						<div id="<?php print $formname; ?>-result"></div>
						
						<div class="btn-group">
							<button type="button" onClick="javascript:send('<?php print $formname; ?>');" class="btn btn-primary p-2"><?php print $data["word"]["login"]; ?></button>
						</div>
					</form>
					
					<p class="text-center m-5"><?php print $data["corporate"]["copyright"]; ?></p>
					
				</div>
			</div>
			
		</div>		

        <?php
		include($data["config"]["path"]["module"]."/script.php");
		?>
		
    </body>
</html>