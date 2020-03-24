<?php
$var0=$database->afi(26);
?>

<?php
if ($var0!=-1)
{
?>

    <?php
    $var0=$var0[0];
    ?>

    <section class="module" id="services" style="padding:10px 0 10px 0 !important;">
        <div class="container">
            <!--
            <div class="row">
                <div class="col-sm-2 col-sm-offset-5">
                    <div class="alt-module-subtitle"><span class="holder-w"></span>
                        <h5 class="font-serif"><?php print $var0["content"]["body"]["text"]["summary"]; ?></h5><span class="holder-w"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                <h2 class="module-title font-alt"><?php print $var0["content"]["body"]["text"]["title"]; ?></h2>
                </div>
            </div>
            -->

            <?php
            $var1=$database->afc($var0["id"]);
            ?>
            
            <?php
            if ($var1!=-1)
            {
            ?>

                <div class="row multi-columns-row owl-carousel">

                    <?php
                    foreach($var1 as $key1=>$value1)
                    {
                    ?>

                        <?php
                        if (strlen($value1["content"]["body"]["text"]["summary"])>178)
                        {
                        ?>

                            <?php
                            $summary=substr($value1["content"]["body"]["text"]["summary"], 0, 178)."...";
                            ?>

                        <?php
                        }
                        else
                        {
                        ?>

                            <?php
                            $summary=$value1["content"]["body"]["text"]["summary"];
                            ?>

                        <?php
                        }
                        ?>

                        <div class="owl-item" style="margin:0px 15px !important;">
                            <div class="features-item">
                                <div class="features-icon"><span class="<?php print $value1["class"]; ?>"></span></div>
                                <h3 class="features-title font-alt"><?php print $value1["content"]["body"]["text"]["title"]; ?></h3><?php print $summary; ?>
                            </div>
                        </div>
                    
                    <?php
                    }
                    ?>
                        
                </div>

            <?php
            }
            ?>

        </div>
    </section>

<?php
}
?>