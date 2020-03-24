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

        <?php
        $var0=$database->ofv("testimonails");
        ?>

        <?php
        if ($var0==-1)
        {
        ?>

            <section class="doctor-list">
                <div class="container">
                    <?php print $data["word"]["there-is-no-content-yet"]; ?>
                </div>
            </section>

        <?php
        }
        else
        {
        ?>

            <section class="doctor-list">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-list-top text-center">
                                <h4><?php print $data["page"]["content"]["body"]["text"]["title"]; ?></h4>
                                <img src="<?php print $data["config"]["path"]["assets"]; ?>/images/heartbeat.png" alt="">
                                <p><?php print $data["page"]["content"]["body"]["text"]["summary"]; ?></p>
                            </div>
                        </div>

                        <?php
                        foreach ($var0 as $key0=>$value0)
                        {
                        ?>

                            <div class="col-lg-3 col-md-4">
                                <div class="doctor-box text-center">
                                    <img src="images/spe-1.png" alt="" class="img-fluid">
                                    <h5><?php print $value0["name"]; ?></h5>
                                    <p><?php print $value0["title"]?></p>
                                    <p><?php print $value0["comment"]; ?></p>
                                </div>
                            </div>

                        <?php
                        }
                        ?>

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
