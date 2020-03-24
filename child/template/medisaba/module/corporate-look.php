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

        <section class="blog-details">
        	<div class="container">
        		<div class="row">
                    <div class="col-lg-9 col-md-8">
                        <div class="blog-d-box">
                            <div class="image-box">
                                <?php
                                $image=$data["page"];
                                include($data["config"]["path"]["module"]."/list-image.php")
                                ?>
                            </div>
                            <div class="image-content">
                                <h4><?php print $data["page"]["content"]["body"]["text"]["title"]; ?></h4>

                                <?php 
                                $date=$datetimes->e($data["page"]["insert_date"]); 
                                ?>                            

                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item"><i class="fa fa-calendar"></i><?php print $date["date"][2]; ?> <?php print $datetimes->month($date["date"][1]); ?> <?php print $date["date"][0]; ?> <?php print $data["word"]["hour"]; ?> <?php print $date["time"][0]; ?>:<?php print $date["time"][1]; ?></li>
                                    <li class="list-inline-item"><i class="fa fa-user-o"></i><a href="#"><?php print $data["page"]["content"]["head"]["meta-author"]; ?></a></li>
                                    <li class="list-inline-item pull-right"><i class="fa fa-commenting-o"></i><a href="<?php print $data["page"]["link"]; ?>">(<span><?php if (is_array($data["page"]["comment"])){ ?> <?php print count($data["page"]["comment"]); ?> <?php }else{ ?>0<?php } ?></span>)</a></li>
                                </ul>
                                <p><?php print $data["page"]["content"]["body"]["text"]["detail"]; ?></p>
                            </div>
                            <div class="blog-btns d-flex justify-content-between">
                                <div class="share-btn">

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
                                
                                <?php
                                include($data["config"]["path"]["module"]."/prev-next.php");
                                ?>

                            </div>

                            <?php
                            include($data["config"]["path"]["module"]."/comments.php");
                            ?>
                            
                        </div>
                    </div>

                    <?php
                    include($data["config"]["path"]["module"]."/aside.php");
                    ?>
                    
        		</div>
        	</div>
        </section>

        <?php
        include($data["config"]["path"]["module"]."/testimonials.php");
        include($data["config"]["path"]["module"]."/footer.php");
        include($data["config"]["path"]["module"]."/script.php");
        ?>

    </body>
</html>
