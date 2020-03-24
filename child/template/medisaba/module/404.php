<!doctype html>
<html class="no-js" lang="<?php print $database->language; ?>">
    <head>
        <?php
        include($data["config"]["path"]["module"]."/meta.php");
        include($data["config"]["path"]["module"]."/title.php");
        include($data["config"]["path"]["module"]."/link.php");
        ?>
    </head>
    <body>

        <?php
        include($data["config"]["path"]["module"]."/loading.php");
        include($data["config"]["path"]["module"]."/header.php");
        include($data["config"]["path"]["module"]."/breadcrumbs.php");
        ?>

        <div class="error-page text-center">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
        				<div class="error-box">
        					<h1>4<img src="images/b-heart.png" alt="<?php print $data["page"]["content"]["body"]["text"]["title"]; ?>" title="<?php print $data["page"]["content"]["body"]["text"]["title"]; ?>">4</h1>
        					<h3><?php print $data["page"]["content"]["body"]["text"]["title"]; ?></h3>
        					<p><?php print $data["page"]["content"]["body"]["text"]["summary"]; ?></p>
        					<a href="./"><i class="fa fa-home"></i><?php print $data["word"]["back-to-home"]; ?></a>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>

        <?php
        include($data["config"]["path"]["module"]."/footer.php");
        include($data["config"]["path"]["module"]."/script.php");
        ?>

    </body>
</html>
