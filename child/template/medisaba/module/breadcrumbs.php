<section class="breadcrumb-area text-center" style="margin-top:60px !important; background-image:url('<?php print $data["config"]["path"]["assets"]."/images/breadcrumbs.jpg"; ?>') !important;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php print $data["page"]["content"]["body"]["text"]["title"]; ?></h2>
                <p style="color:#eee"><?php print $data["page"]["content"]["body"]["text"]["summary"]; ?></p>
                <ul class="list-unstyled list-inline">
                    <li class="list-inline-item"><a href="./"><?php print $data["word"]["homepage"]; ?></a></li>

                    <?php
                    if ($data["page"]["category"]!=-1)
                    {
                    ?>

                        <?php
                        $var0=$database->afi($data["page"]["category"]);
                        ?>

                        <?php
                        if ($var0!=-1)
                        {
                        ?>

                            <?php
                            $var0=$var0[0];
                            ?>
                        
                            <?php
                            $var1=$database->afi($var0["category"]);
                            ?>
                        
                            <?php
                            if ($var1!=-1)
                            {
                            ?>
                            
                                <?php
                                $var1=$var1[0];
                                ?>

                                <li class="list-inline-item"><a href="<?php print $var1["link"]; ?>" title="<?php print $var1["content"]["link-mask"]; ?>"><i class="fa fa-long-arrow-right"></i> <?php print $var1["content"]["link-mask"]; ?></a></li>
                            
                            <?php
                            }
                            ?>

                            <li class="list-inline-item"><a href="<?php print $var0["link"]; ?>" title="<?php print $var0["content"]["link-mask"]; ?>"><i class="fa fa-long-arrow-right"></i> <?php print $var0["content"]["link-mask"]; ?></a></li>

                        <?php
                        }
                        ?>

                    <?php
                    }
                    ?>

                    <li class="list-inline-item"><i class="fa fa-long-arrow-right"></i> <?php print $data["page"]["content"]["link-mask"]?></li>

                </ul>
            </div>
        </div>
    </div>
</section>