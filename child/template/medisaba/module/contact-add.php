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

        <section class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                    	<div class="contact-box-tp">
                    		<h4><?php print $data["page"]["content"]["body"]["text"]["title"]?></h4>
                    	</div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="contact-box d-flex">
                                    <div class="contact-icon">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="contact-content">
                                        <h6><?php print $data["word"]["address"]; ?></h6>
                                        <p><?php print $data["corporate"]["address"]; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="contact-box d-flex">
                                    <div class="contact-icon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="contact-content">
                                        <h6><?php print $data["word"]["email"]; ?></h6>
                                        <p><?php print $data["corporate"]["email"]; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="contact-box d-flex">
                                    <div class="contact-icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="contact-content">
                                        <h6><?php print $data["word"]["phone"]; ?></h6>
                                        <p><?php print $data["corporate"]["phone"]; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                        if ($data["corporate"]["social-media"]!=-1)
                        {
                        ?>

                            <div class="social-link">
                                <ul class="list-unstyled list-inline">

                                    <?php
                                    foreach ($data["corporate"]["social-media"] as $key0=>$value0)
                                    {
                                    ?>

                                        <li class="list-inline-item"><a target="_blank"  href="<?php print $value0["link"]; ?>" title="<?php print $value0["name"]; ?>"><i class="<?php print $value0["class"]; ?>"></i></a></li>
                                    
                                    <?php
                                    }
                                    ?>

                                </ul>
                            </div>

                        <?php
                        }
                        ?>

                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="contact-form">
                            <h4><?php print $data["word"]["contact-form"]; ?></h4>
                            <?php $formname="contact-form"; ?>
                            <form id="<?php print $formname; ?>" method="post" action="<?php print $database->afv("contact-add-check"); ?>">
                                <input type="hidden" name="subject" value="İletişim Formu">
                                <input type="hidden" name="redirect" value="<?php print $data["page"]["link"]; ?>">
                            
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><input type="text" id="name" name="name" placeholder="<?php print $data["word"]["write-your-name"]; ?>" required=""></p>
                                     </div>
                                    <div class="col-md-6">
                                        <p><input type="text" id="phone" name="phone" placeholder="<?php print $data["word"]["write-your-phone"]; ?>" required=""></p>
                                    </div>
                                    <div class="col-md-12">
                                        <p><input type="text" id="email" name="email" placeholder="<?php print $data["word"]["write-your-email"]; ?>"></p>
                                    </div>
                                    <div class="col-md-12">
                                        <p><textarea name="message" id="message" placeholder="<?php print $data["word"]["write-your-message"]; ?>" required=""></textarea></p>
                                    </div>

                                    <div id="<?php print $formname; ?>-result" style="margin-bottom:15px !important;"></div>

                                    <div class="col-md-12">
                                        <button type="button" onClick="javascript:send('<?php print $formname; ?>');"><?php print $data["word"]["send"]; ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <iframe class="mt-5" src="<?php print $data["corporate"]["map"]; ?>" style="width:100%;" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </section>

        <?php
        include($data["config"]["path"]["module"]."/footer.php");
        include($data["config"]["path"]["module"]."/script.php");
        ?>

    </body>
</html>
