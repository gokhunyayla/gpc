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
        include($data["config"]["path"]["module"]."/slider.php");
        include($data["config"]["path"]["module"]."/services-short.php");
        include($data["config"]["path"]["module"]."/who-are-we-home.php");
        include($data["config"]["path"]["module"]."/testimonials.php");
        //include($data["config"]["path"]["module"]."/opportunities.php");
        //include($data["config"]["path"]["module"]."/middle-2.php");
        include($data["config"]["path"]["module"]."/catalogs.php");
        include($data["config"]["path"]["module"]."/middle-1.php");
        include($data["config"]["path"]["module"]."/latest-blog.php");
        include($data["config"]["path"]["module"]."/footer.php");
        include($data["config"]["path"]["module"]."/script.php");
        ?>

    </body>
</html>
