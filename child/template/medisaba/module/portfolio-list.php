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

        <section class="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="gallery-top text-center">
                            <h4><?php print $data["page"]["content"]["body"]["text"]["title"]; ?></h4>
                            <img src="<?php print $data["config"]["path"]["assets"]; ?>/images/heartbeat.png" alt="<?php print $data["page"]["content"]["body"]["text"]["title"]; ?>">
                            <p><?php print $data["page"]["content"]["body"]["text"]["summary"]; ?></p>
                        </div>
                    </div>

                    <?php
                    $var0=$database->afc($data["page"]["id"]);
                    ?>

                    <?php
                    if ($var0!=-1)
                    {
                    ?>
                    
                        <div class="col-md-12">
                            <ul class="gallery-filter list-unstyled list-inline text-center">
                                <li class="list-inline-item active" data-filter="*"><?php print $data["word"]["all"]; ?></li>

                                <?php
                                foreach ($var0 as $key0=>$value0)
                                {
                                ?>

                                    <li class="list-inline-item" data-filter=".<?php print $value0["id"]; ?>"><?php print $value0["content"]["link-mask"]; ?></li>

                                <?php
                                }
                                ?>

                            </ul>
                        </div>

                        <div class="col-md-12">
                            <div class="gallery-items row">

                                <?php
                                foreach ($var0 as $key0=>$value0)
                                {
                                ?>

                                    <?php
                                    $var1=$database->afc($value0["id"]);
                                    ?>

                                    <?php
                                    if ($var1!=-1)
                                    {
                                    ?>

                                        <?php
                                        foreach ($var1 as $key1=>$value1)
                                        {
                                        ?>

                                            <div class="col-lg-3 col-md-4 grid-item <?php print $value1["id"]; ?>">
                                                <div>
                                                    <a href="<?php print $value1["link"]; ?>" title="<?php print $value1["content"]["link-mask"]; ?>">

                                                        <?php
                                                        $image=$value1;
                                                        include($data["config"]["path"]["module"]."/list-image.php");
                                                        ?>

                                                    </a>
                                                </div>
                                            </div>

                                        <?php
                                        }
                                        ?>

                                    <?php
                                    }
                                    ?>
                                
                                <?php
                                }
                                ?>

                            </div>
                        </div>

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
