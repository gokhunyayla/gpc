<?php
$var0=$database->afq($database->prefix."variable='blog-look'");
?>

<?php
if ($var0!=-1)
{
?>

    <section class="news">
        <div class="container">
            <div class="owl-carousel">

                <?php
                foreach ($var0 as $key0=>$value0)
                {
                ?>

                    <div class="owl-item mr-3 pb-5">
                        <div class="news-box">
                            <div class="news-image">
                                <a href="<?php print $value0["link"]; ?>">
                                
                                    <?php
                                    $image=$value0;
                                    include($data["config"]["path"]["module"]."/list-image.php");
                                    ?>
                                
                                </a>
                            </div>

                            <?php 
                            $date=$datetimes->e($value0["insert_date"]); 
                            ?>

                            <div class="news-heading d-flex">
                                <div class="news-date text-center">
                                <p><?php print $date["date"][2]; ?><br> <?php print $datetimes->month_short($date["date"][1]); ?></p>
                                </div>
                                <div class="heading-box">
                                    <h6><a href="<?php print $value0["link"]; ?>" title="<?php print $value0["content"]["body"]["text"]["title"]; ?>"><?php print $value0["content"]["body"]["text"]["title"]; ?></a></h6>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item"><i class="fa fa-user-o"></i><a href="#"><?php print $value0["content"]["head"]["meta-author"]; ?></a></li>
                                        <li class="list-inline-item pull-right"><i class="fa fa-commenting-o"></i><a href="">(<span><?php if (is_array($value0["comment"])){ ?> <?php print count($value0["comment"]); ?> <?php }else{ ?>0<?php } ?></span>)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-content">
                                
                                <?php
                                if (strlen($value0["content"]["body"]["text"]["summary"])>152)
                                {
                                ?>

                                    <?php
                                    $summary=substr($value0["content"]["body"]["text"]["summary"], 0, 152)."...";
                                    ?>

                                <?php
                                }
                                else
                                {
                                ?>

                                    <?php
                                    $summary=$value0["content"]["body"]["text"]["summary"];
                                    ?>

                                <?php
                                }
                                ?>

                                <p><?php print $summary; ?></p>

                            </div>
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