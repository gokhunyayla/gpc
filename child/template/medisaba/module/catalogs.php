<?php
$var0=$database->afq($database->prefix."variable='catalog-list'");
?>

<?php
if ($var0!=-1)
{
?>

    <section class="gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="gallery-top text-center">
                        <h4><?php print $var0[0]["content"]["body"]["text"]["title"]; ?></h4>
                        <img src="<?php print $data["config"]["path"]["assets"]; ?>/images//heartbeat.png" alt="">
                        <p><?php print $var0[0]["content"]["body"]["text"]["summary"]; ?></p>
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="gallery-filter list-unstyled list-inline text-center">
                        <li class="list-inline-item active" data-filter="*"><?php print $data["word"]["all"]; ?></li>
                        
                        <?php
                        $var1=$database->afq($database->prefix."category=".$var0[0]["id"]);
                        ?>

                        <?php
                        if ($var1!=-1)
                        {
                        ?>

                            <?php
                            foreach ($var1 as $key1=>$value1)
                            {
                            ?>

                                <li class="list-inline-item" data-filter=".<?php print $value1["category"]; ?>"><?php print $value1["content"]["body"]["text"]["title"]; ?></li>
                            
                            <?php
                            }
                            ?>

                        <?php
                        }
                        ?>

                    </ul>
                </div>
                <div class="col-md-12">
                    <div class="gallery-items row">
                        
                        <?php
                        if ($var1!=-1)
                        {
                        ?>

                            <?php
                            foreach ($var1 as $key1=>$value1)
                            {
                            ?>

                                <?php
                                $var2=$database->afq($database->prefix."category=".$value1["id"]);
                                ?>

                                <?php
                                if ($var2!=-1)
                                {
                                ?>    

                                    <?php
                                    foreach ($var2 as $key2=>$value2)
                                    {
                                    ?>

                                        <div class="col-lg-3 col-md-4 grid-item <?php print $value2["id"]; ?>">
                                            <div class="gallery-content">
                                                
                                                <a href="<?php print $value2["link"]; ?>">

                                                    <?php
                                                    $image=$value2;
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