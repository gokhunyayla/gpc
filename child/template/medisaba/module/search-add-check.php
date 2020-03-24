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

        <!-- Blog Area -->
        <section class="blog-four">
        	<div class="container">
        		<div class="row">
                    <div class="col-lg-12 col-md-12">

                        <div class="row mb-5">
                            <div class="col-12">
                                <form method="post" role="form" action="<?php print $database->afv("search-add-check"); ?>">
                                    <div class="input-group">
                                        <input type="text" class="form-control col-md-12" name="keyword" placeholder="<?php print $data["word"]["search"]; ?>">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <?php
                        if (isset($_POST))
                        {
                        ?>

                            <p class="mb-5"><?php print $data["word"]["search-keyword"]; ?>: <strong><?php print $_POST["keyword"]; ?></strong></p>

                            <div class="row">

                                <?php
                                $var0=$database->afq($database->prefix."required<>'not-required' and ".$database->prefix."content_".$database->language." like '%".$_POST["keyword"]."%'");
                                ?>
                                
                                <?php
                                if ($var0==-1)
                                {
                                ?>
                                
                                    <?php
                                    print $data["word"]["there-is-no-content-yet"];
                                    ?>
                                
                                <?php
                                }
                                else
                                {
                                ?>

                                    <?php
                                    foreach ($var0 as $key0=>$value0)
                                    {
                                    ?>

                                        <div class="col-lg-4 col-md-4">
                                            <div class="blog-box">
                                                <div class="blog-image">
                                                    <a href="<?php print $value0["link"]; ?>" title="<?php print $value0["content"]["body"]["text"]["title"]; ?>">
                                                
                                                    <?php
                                                    $image=$value0;
                                                    include($data["config"]["path"]["module"]."/list-image.php")
                                                    ?>
                                                
                                                </a>
                                                </div>
                                                <div class="blog-heading d-flex">

                                                    <?php 
                                                    $date=$datetimes->e($value0["insert_date"]); 
                                                    ?>

                                                    <div class="blog-date text-center">
                                                        <p><?php print $date["date"][2]; ?><br> <?php print $datetimes->month($date["date"][1]); ?></p>
                                                    </div>
                                                    <div class="heading-box">
                                                        <h6><a href="<?php print $value0["link"]; ?>" title="<?php print $value0["content"]["body"]["text"]["title"]; ?>"><?php print $value0["content"]["body"]["text"]["title"]; ?></a></h6>
                                                        <ul class="list-unstyled list-inline">
                                                            <li class="list-inline-item"><i class="fa fa-user-o"></i><a href="#"><?php print $value0["content"]["head"]["meta-author"]; ?></a></li>
                                                            <li class="list-inline-item pull-right"><i class="fa fa-commenting-o"></i><a href="">(<span><?php if (is_array($value0["comment"])){ ?> <?php print count($value0["comment"]); ?> <?php }else{ ?>0<?php } ?></span>)</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="blog-content">

                                                    <?php
                                                    if (strlen($value0["content"]["body"]["text"]["summary"])>178)
                                                    {
                                                    ?>

                                                        <?php
                                                        $summary=substr($value0["content"]["body"]["text"]["summary"], 0, 178)."...";
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
        </section>
        
        <?php
        include($data["config"]["path"]["module"]."/footer.php");
        include($data["config"]["path"]["module"]."/script.php");
        ?>

    </body>
</html>
