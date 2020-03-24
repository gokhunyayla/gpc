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

        <section class="welcome-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="welcome-box">
                            <h4><?php print $data["corporate"]["name"]; ?></h4>
                            <img src="<?php print $data["config"]["path"]["assets"]; ?>/images/heartbeat.png" alt="">
                            <p><?php print $data["page"]["content"]["body"]["text"]["detail"]; ?></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-image">
                            
                            <?php
                            $image=$data["page"];
                            include($data["config"]["path"]["module"]."/list-image.php")
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <?php
        $var0=$database->afc($data["page"]["id"]);
        ?>

        <?php
        if ($var0!=-1)
        {
        ?>

            <section class="specialist about-specialist">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="owl-doctor owl-carousel">
                                
                                <?php
                                foreach ($var0 as $key0=>$value0)
                                {
                                ?>

                                    <div class="carousel-content">
                                        
                                        <?php
                                        $image=$value0;
                                        include($data["config"]["path"]["module"]."/list-image.php")
                                        ?>

                                        <div class="doc-content text-center">
                                            <h5><?php print $value0["content"]["body"]["text"]["title"]; ?></h5>
                                            <p><?php print $value0["content"]["body"]["text"]["summary"]; ?></p>
                                        </div>
                                    </div>

                                <?php
                                }
                                ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <?php
        }
        ?>

        <?php
        include($data["config"]["path"]["module"]."/footer.php");
        include($data["config"]["path"]["module"]."/script.php");
        ?>

    </body>
</html>
