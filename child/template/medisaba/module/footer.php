<style type="text/css">
@media only screen and (max-width:670px)
{
    .centerit{text-align:center;}
}
</style>

<footer class="centerit">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="findus">
                    <h4><?php print $data["corporate"]["name"]; ?></h4>
                    <p><?php print $data["corporate"]["summary"]; ?></p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-map-marker"></i><?php print $data["corporate"]["address"]; ?></li>
                        <li><i class="fa fa-envelope"></i><?php print $data["corporate"]["email"]; ?></li>
                        <li><i class="fa fa-phone"></i><?php print $data["corporate"]["phone"]; ?></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="qlink">
                    <h4><?php print $data["word"]["site-linkage"]; ?></h4>

                    <?php
                    if ($data["navigation"]["bottom-navigation"]!=-1)
                    {
                    ?>
                    
                        <ul class="list-unstyled">
                            
                            <?php 
                            foreach ($data["navigation"]["bottom-navigation"] as $key0=>$value0)
                            {
                            ?>
                            
                            <li><a href="<?php print $value0["link"]; ?>"><i class="fa fa-angle-right"></i> <?php print $value0["link-mask"]; ?></a></li>
                            
                            <?php
                            }
                            ?>
                            
                        </ul>
                    
                    <?php
                    }
                    ?>

                </div>
            </div>
            <div class="col-md-3">
                <div class="tpost">
                    <h4><?php print $data["word"]["latest-blog"]; ?></h4>

                    <?php
                    $var0=$database->afc(10, "desc", 4);
                    ?>
                    
                    <?php
                    if ($var0!=-1)
                    {
                    ?>

                        <ul class="list-unstyled">

                            <?php
                            foreach ($var0 as $key0=>$value0)
                            {
                            ?>

                                <?php
                                if (isset($value0["content"]["image"][0]))
                                {
                                ?>

                                    <?php
                                    $image=$data["config"]["path"]["media"]."/".$value0["content"]["image"][0];
                                    if (isset($image))
                                    {
                                    ?>

                                        <div class="widget-posts-image"><a href="<?php print $value0["link"]; ?>" title="<?php print $value0["content"]["link-mask"]; ?>"><img src="<?php print $image; ?>" alt="<?php print $value0["content"]["link-mask"]; ?>" title="<?php print $value0["content"]["link-mask"]; ?>" /></a></div>
                                    
                                    <?php
                                    }
                                    ?>

                                <?php
                                }
                                ?>

                                <li><a href="<?php print $value0["link"]; ?>"> <?php print $value0["content"]["link-mask"]; ?></a></li>

                            <?php
                            }
                            ?>

                        </ul>

                    <?php
                    }
                    ?>

                </div>
            </div>
            <div class="col-md-3">
                <div class="newsletter">
                    <h4><?php print $data["word"]["who-are-we"]?></h4>
                    <?php print $data["corporate"]["summary"]; ?>
                </div>
            </div>
            <div class="col-md-12">
                <div class="f-menu text-center">
            
                    <p><?php print $data["corporate"]["copyright"]; ?></p>
                    
                    <?php
                    if ($data["corporate"]["social-media"]!=-1)
                    {
                    ?>
                    
                        <ul class="social list-unstyled list-inline">
                            
                            <?php
                            foreach ($data["corporate"]["social-media"] as $key0=>$value0)
                            {
                            ?>

                                <li class="list-inline-item"><a target="_blank"  href="<?php print $value0["link"]; ?>" title="<?php print $value0["name"]; ?>"><i class="<?php print $value0["class"]; ?>"></i></a></li>
                            
                            <?php
                            }
                            ?>
                            
                        </ul>
                    
                    <?php
                    }
                    ?>

                </div>
                <div class="back-to-top text-center">
                    <a data-scroll href="#btt"><img src="<?php print $data["config"]["path"]["assets"]; ?>/images//backtotop.png" alt="" class="img-fluid"></a>
                </div>
            </div>
        </div>
    </div>
</footer>