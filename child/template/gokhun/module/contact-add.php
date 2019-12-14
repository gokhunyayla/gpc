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
				
		<iframe src="<?php print $data["corporate"]["map"]; ?>" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		
		<section class="container">
						
			<div class="row mt-5 mb-5">
				<div class="col-8">
				
					<p><strong><?php print $data["word"]["contact-form"]; ?></strong></p>
					<?php $formname="contact-form"; ?>
					<form id="<?php print $formname; ?>" method="post" action="<?php print $database->afv("contact-add-check"); ?>">
						<input type="hidden" name="subject" value="İletişim Formu">
						<input type="hidden" name="redirect" value="<?php print $data["page"]["link"]; ?>">
						
						<div class="form-group">
							<label><?php print $data["word"]["name"]; ?></label>
							<input type="text" class="form-control" name="name" placeholder="<?php print $data["word"]["write-your-name"]; ?>">
						</div>
						
						<div class="form-group">
							<label><?php print $data["word"]["phone"]; ?></label>
							<input type="text" class="form-control" name="phone" placeholder="<?php print $data["word"]["write-your-phone"]; ?>">
						</div>
						
						<div class="form-group">
							<label><?php print $data["word"]["email"]; ?></label>
							<input type="text" class="form-control" name="email" placeholder="<?php print $data["word"]["write-your-email"]; ?>">
						</div>
					
						<div class="form-group">
							<label><?php print $data["word"]["message"]; ?></label>
							<textarea class="form-control" rows="5" name="message" placeholder="<?php print $data["word"]["write-your-message"]; ?>"></textarea>
						</div>
						
						<div id="<?php print $formname; ?>-result"></div>
						
						<div class="btn-group">
							<button type="button" onClick="javascript:send('<?php print $formname; ?>');" class="btn btn-primary"><?php print $data["word"]["send"]; ?></button>
						</div>
					</form>
					
				</div>
				<aside class="col-4">
					<b><?php print $data["word"]["contact-area"]; ?></b>
					<p>
						<?php print $data["word"]["phone"]; ?>: <a href="tel:<?php print $data["corporate"]["phone"]; ?>" title="Şirket Telefonu"><?php print $data["corporate"]["phone"]; ?></a><br />
						<?php print $data["word"]["email"]; ?>: <a href="mailto:<?php print $data["corporate"]["email"]; ?>" title="Şirket E-Postası"><?php print $data["corporate"]["email"]; ?></a>
					</p>
					
					<br><br>
					
					<?php print $data["corporate"]["summary"]; ?>
				</aside>
			</div>
			
		</section>
		
		<?php
		include($data["config"]["path"]["module"]."/footer.php");
		include($data["config"]["path"]["module"]."/script.php");
		?>
	
    </body>
</html>