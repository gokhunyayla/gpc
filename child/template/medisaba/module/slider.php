<style type="text/css">
@media only screen and (max-width: 670px) {
    .desktopx{display:none !important;}
}
@media only screen and (min-width: 671px) {
    .mobilex{display:none !important;}
}
</style>

<?php
$var0=$database->ofv("slider");
?>

<?php
if ($var0!=-1)
{
?>

    <section class="container mobilex hero-area3" style="margin-bottom:600px; background-image:none !important; margin-top:60px;">
        
        <div class="row">
            <div class="col-12 owl-one" style="margin-top:17px;">

                <?php
                foreach ($var0 as $key0=>$value0)
                {
                ?>

                    <?php
                    if ($value0["image"]=="")
                    {
                    ?>

                        <?php
                        $image="";
                        ?>

                    <?php
                    }
                    else
                    {
                    ?>

                        <?php
                        $src=$data["config"]["path"]["media"]."/".$value0["image"];
                        ?>

                        <?php
                        if (file_exists($src))
                        {
                        ?>

                            <?php
                            $image=$src;
                            ?>

                        <?php
                        }
                        else
                        {
                        ?>

                            <?php
                            $image="";
                            ?>

                        <?php
                        }
                        ?>

                    <?php
                    }
                    ?>
                    
                    <div class="owl-item">
                        <div class="row">

                            <?php
                            if ($image=="")
                            {
                            ?>

                                <div class="col-12 hero-heading-top wow fadeInDown" data-wow-duration="1.2s" data-wow-delay="0.2s">
                                    <p><?php print $value0["new-tag"]; ?> <span><?php print $value0["new-content"]; ?></span></p>
                                </div>
                                <div class="col-12 hero-heading wow fadeInDown" data-wow-duration="1.2s" data-wow-delay="0.2s">
                                    <h2><?php print $value0["title"]; ?></h2>
                                </div>
                                <div class="col-12 hero-para wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                    <p><?php print $value0["summary"]; ?></p>
                                </div>
                                <div class="col-12 hero-btn wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                    <a class="hero-btn1" href="<?php print $value0["button-link"]; ?>"><?php print $value0["button-tag"]; ?></a>
                                </div>

                            <?php
                            }
                            else
                            {
                            ?>

                                <div class="col-12"><a href="<?php print $value0["button-link"]; ?>"><img src="<?php print $image; ?>" alt="<?php print $value0["title"]; ?>"></a></div>
                                <div class="col-12">
                                    <div class="col-12 mt-3 hero-heading-top wow fadeInDown" data-wow-duration="1.2s" data-wow-delay="0.2s">
                                        <p><?php print $value0["new-tag"]; ?> <span style="color:#f3c24a !important;"><?php print $value0["new-content"]; ?></span></p>
                                    </div>
                                    <div class="col-12 hero-heading wow fadeInDown" data-wow-duration="1.2s" data-wow-delay="0.2s">
                                        <h2><?php print $value0["title"]; ?></h2>
                                    </div>
                                    <div class="col-12 mb-3 hero-para wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                        <p><?php print $value0["summary"]; ?></p>
                                    </div>
                                    <div class="col-12 hero-btn wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                        <a class="hero-btn1" style="font-size: 15px;color: #fff;background: #f3c24a;display: inline-block;padding: 10px;width: 140px;text-align: center;-webkit-border-radius: 30px;-moz-border-radius: 30px;-ms-border-radius: 30px;border-radius: 30px;font-weight: 600;margin-right: 10px;" href="<?php print $value0["button-link"]; ?>"><?php print $value0["button-tag"]; ?></a>
                                    </div>
                                </div>

                            <?php
                            }
                            ?>

                        </div>
                    </div>

                <?php
                }
                ?>

            </div>
            <div class="col-12" style="margin-top:17px;">
                <div class="card" data-wow-duration="1.8s" data-wow-delay="0.25s">
                    <div class="card-header form-top pt-4">
                        <h5><?php print $data["word"]["be-member-now"]; ?></h5>
                    </div>

                    <div class="card-body">
                        <?php $formname="home-form"; ?>
                        <form id="<?php print $formname; ?>" method="post" action="<?php print $database->afv("contact-add-check"); ?>">
                            <input type="hidden" name="subject" value="İletişim Formu">
                            <input type="hidden" name="redirect" value="<?php print $data["page"]["link"]; ?>">
                            
                            <div class="row">
                                <div class="col-md-12 mt-3">
                                    <input class="form-control mb-3" style="padding-top:25px; border-radius:30px; border:0px !important; background-color:#eeeeee; color:#444444; font-style: italic; padding-left:25px; padding-bottom:25px;" type="text" name="name" placeholder="<?php print $data["word"]["write-your-name"]; ?>" required>
                                </div>
                                <div class="col-md-12">
                                    <input class="form-control mb-3" type="text" style="padding-top:25px; border-radius:30px; border:0px !important; background-color:#eeeeee; color:#444444; font-style: italic; padding-left:25px; padding-bottom:25px;" name="phone" placeholder="<?php print $data["word"]["write-your-phone"]; ?>" required>
                                </div>
                                <div class="col-md-12">
                                    <textarea class="form-control mb-3" style="padding-top:15px; border-radius:30px; border:0px !important; background-color:#eeeeee; color:#444444; font-style: italic; padding-left:25px; padding-bottom:25px;" name="message" placeholder="<?php print $data["word"]["write-your-message"]; ?>" required></textarea>
                                </div>
                                <div class="col-md-12" id="<?php print $formname; ?>-result" style="margin-bottom:15px !important;"></div>
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-primary" onClick="javascript:send('<?php print $formname; ?>');"><?php print $data["word"]["start-now"]; ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
           
    </section>

    <section class="desktopx hero-area3" style="background-image:none !important; margin-top:60px;">
        <div class="hero-table">
            <div class="hero-tablecell">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 owl-one" style="margin-top:17px;">

                            <?php
                            foreach ($var0 as $key0=>$value0)
                            {
                            ?>

                                <?php
                                if ($value0["image"]=="")
                                {
                                ?>

                                    <?php
                                    $image="";
                                    ?>

                                <?php
                                }
                                else
                                {
                                ?>

                                    <?php
                                    $src=$data["config"]["path"]["media"]."/".$value0["image"];
                                    ?>

                                    <?php
                                    if (file_exists($src))
                                    {
                                    ?>

                                        <?php
                                        $image=$src;
                                        ?>

                                    <?php
                                    }
                                    else
                                    {
                                    ?>

                                        <?php
                                        $image="";
                                        ?>

                                    <?php
                                    }
                                    ?>

                                <?php
                                }
                                ?>
                                
                                <div class="owl-item">
                                    <div class="row">

                                        <?php
                                        if ($image=="")
                                        {
                                        ?>

                                            <div class="col-12 hero-heading-top wow fadeInDown" data-wow-duration="1.2s" data-wow-delay="0.2s">
                                                <p><?php print $value0["new-tag"]; ?> <span><?php print $value0["new-content"]; ?></span></p>
                                            </div>
                                            <div class="col-12 hero-heading wow fadeInDown" data-wow-duration="1.2s" data-wow-delay="0.2s">
                                                <h2><?php print $value0["title"]; ?></h2>
                                            </div>
                                            <div class="col-12 hero-para wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                                <p><?php print $value0["summary"]; ?></p>
                                            </div>
                                            <div class="col-12 hero-btn wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                                <a class="hero-btn1" href="<?php print $value0["button-link"]; ?>"><?php print $value0["button-tag"]; ?></a>
                                            </div>

                                        <?php
                                        }
                                        else
                                        {
                                        ?>

                                            <div class="col-4" style="margin-top:120px;"><a href="<?php print $value0["button-link"]; ?>"><img src="<?php print $image; ?>" alt="<?php print $value0["title"]; ?>"></a></div>
                                            <div class="col-8">
                                                <div class="col-12 hero-heading-top wow fadeInDown" data-wow-duration="1.2s" data-wow-delay="0.2s">
                                                    <p><?php print $value0["new-tag"]; ?> <span><?php print $value0["new-content"]; ?></span></p>
                                                </div>
                                                <div class="col-12 hero-heading wow fadeInDown" data-wow-duration="1.2s" data-wow-delay="0.2s">
                                                    <h2><?php print $value0["title"]; ?></h2>
                                                </div>
                                                <div class="col-12 hero-para wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                                    <p><?php print $value0["summary"]; ?></p>
                                                </div>
                                                <div class="col-12 hero-btn wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                                    <a class="hero-btn1" href="<?php print $value0["button-link"]; ?>"><?php print $value0["button-tag"]; ?></a>
                                                </div>
                                            </div>

                                        <?php
                                        }
                                        ?>

                                    </div>
                                </div>

                            <?php
                            }
                            ?>

                        </div>
                        <div class="col-lg-4 col-md-12" style="margin-top:17px;">
                            <div class="appointment-form wow fadeInRight" data-wow-duration="1.8s" data-wow-delay="0.25s">
                                <div class="form-top pt-4">
                                    <h5><?php print $data["word"]["be-member-now"]; ?></h5>
                                </div>

                                <?php $formname="home-form"; ?>
                                <form id="<?php print $formname; ?>" method="post" action="<?php print $database->afv("contact-add-check"); ?>">
                                    <input type="hidden" name="subject" value="İletişim Formu">
                                    <input type="hidden" name="redirect" value="<?php print $data["page"]["link"]; ?>">
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" name="name" placeholder="<?php print $data["word"]["write-your-name"]; ?>" required>
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" name="phone" placeholder="<?php print $data["word"]["write-your-phone"]; ?>" required>
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="col-md-12 mb-5">
                                            <textarea class="form-control" style="border-radius:30px; border:0px !important; background-color:#eeeeee; color:#444444; font-style: italic; padding-left:25px; padding-bottom:25px;" name="message" placeholder="<?php print $data["word"]["write-your-message"]; ?>" required></textarea>
                                            <i class="fa fa-comment"></i>
                                        </div>
                                        <div class="col-md-12" id="<?php print $formname; ?>-result" style="margin-bottom:15px !important;"></div>
                                        <div class="col-md-12">
                                            <button type="button" onClick="javascript:send('<?php print $formname; ?>');"><?php print $data["word"]["start-now"]; ?></button>
                                        </div>
                                    </div>
                                </form>
                                <div class="call-area text-center">
                                    <span class="p-5"></span>
                                    <p class="p-3"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
}
?>