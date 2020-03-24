<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    
    <?php 
    include($data["config"]["path"]["module"]."/meta.php");
    include($data["config"]["path"]["module"]."/title.php");
    include($data["config"]["path"]["module"]."/link.php");
    ?>

  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>

      <div class="page-loader">
        <div class="loader"><?php print $data["word"]["loading"]; ?></div>
      </div>
      
      <?php 
      $transparency="";
      include($data["config"]["path"]["module"]."/header.php");
      ?>

      <div class="main">
        
        <?php
        include($data["config"]["path"]["module"]."/breadcrumbs.php");
        ?>

        <section class="module" style="padding: 45px 0 !important;">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <h4 class="font-alt"><?php print $data["word"]["contact-form"]; ?></h4><br/>
                
                <?php $formname="contact-form"; ?>
                <form id="<?php print $formname; ?>" method="post" action="<?php print $database->afv("contact-add-check"); ?>">
                  <input type="hidden" name="subject" value="İletişim Formu">
                  <input type="hidden" name="redirect" value="<?php print $data["page"]["link"]; ?>">
                  
                  <div class="form-group">
                    <label><?php print $data["word"]["name"]; ?></label>
                    <input type="text" class="form-control" name="name" placeholder="<?php print $data["word"]["write-your-name"]; ?>">
                  </div>
                  
                  <div class="form-group">
                    <label><?php print $data["word"]["phone"]; ?></label>
                    <input type="text" class="form-control" name="phone" placeholder="<?php print $data["word"]["write-your-phone"]; ?>">
                  </div>
                  
                  <div class="form-group">
                    <label><?php print $data["word"]["email"]; ?></label>
                    <input type="text" class="form-control" name="email" placeholder="<?php print $data["word"]["write-your-email"]; ?>">
                  </div>
                
                  <div class="form-group">
                    <label><?php print $data["word"]["message"]; ?></label>
                    <textarea class="form-control" rows="5" name="message" placeholder="<?php print $data["word"]["write-your-message"]; ?>"></textarea>
                  </div>
                  
                  <div id="<?php print $formname; ?>-result" style="margin-bottom:15px !important;"></div>
                  
                  <div class="btn-group">
                    <button type="button" onClick="javascript:send('<?php print $formname; ?>');" class="btn btn-primary"><?php print $data["word"]["send"]; ?></button>
                  </div>
                </form>

              </div>
              <div class="col-sm-6">
                <h4 class="font-alt"><?php print $data["word"]["address"]; ?></h4><br/>
                <p><?php print $data["corporate"]["address"]; ?></p>
                <hr/>
                <h4 class="font-alt"><?php print $data["word"]["contact-area"]?></h4><br/>
                <ul class="list-unstyled">
                  <li><?php print $data["word"]["email"]; ?>: <?php print $data["corporate"]["email"]; ?></li>
                  <li><?php print $data["word"]["phone"]; ?>: <?php print $data["corporate"]["phone"]; ?></li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <section id="map-section">
          
        <iframe src="<?php print $data["corporate"]["map"]; ?>" style="width:100%;" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          
        </section>
        
        <?php 
        include($data["config"]["path"]["module"]."/footer.php");
        ?>

      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
   
    <?php 
    include($data["config"]["path"]["module"]."/script.php");
    ?>
    
  </body>
</html>