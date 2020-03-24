<?php
$var0=$database->afi(1);
?>

<?php
if ($var0!=-1)
{
?>

    <?php
    $var0=$var0[0];
    ?>

    <section class="service-banner" style="margin-top:20px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="banner-boxes">

                        <?php
                        $var1=$database->afc($var0["id"]);
                        ?>
                        
                        <?php
                        if ($var1!=-1)
                        {
                        ?>

                            <div class="row owl-carousel owl-testimonial">

                                <?php
                                foreach($var1 as $key1=>$value1)
                                {
                                ?>

                                    <?php
                                    if (strlen($value1["content"]["body"]["text"]["summary"])>78)
                                    {
                                    ?>

                                        <?php
                                        $summary=substr($value1["content"]["body"]["text"]["summary"], 0, 78)."...";
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

                                    <div class="owl-item">
                                        <div class="banner-box d-flex">
                                            <div class="box-icon mr-3">
                                               <i class="<?php print $value1["class"]; ?>" style="font-size:72px;"></i>
                                            </div>
                                            <div class="box-content">
                                                <a href="<?php print $value1["link"]; ?>" style="color:#444 !important;"><h6><?php print $value1["content"]["body"]["text"]["title"]; ?></h6></a>
                                                <p><?php print $summary; ?></p>
                                            </div>
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
                </div>
            </div>
        </div>
    </section>

<?php
}
?>