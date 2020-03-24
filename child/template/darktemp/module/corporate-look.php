<!DOCTYPE html>
<html lang="tr" dir="ltr">
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

        <section class="module" style="padding:45px 0 !important;">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <h5 class="font-alt"><?php print $data["corporate"]["name"]; ?></h5><br/>
                <p><?php print $data["corporate"]["detail"]; ?></p>
              </div>
              <div class="col-sm-6">
                
              <?php
              if (isset($data["page"]["content"]["body"]["image"][0]) && $data["page"]["content"]["body"]["image"][0]!="")
              {
              ?>

                <?php
                $image=$data["config"]["path"]["media"]."/".$data["page"]["content"]["body"]["image"][0];
                ?>
                
                <?php
                if (isset($image))
                {
                ?>
                
                  <?php
                  if (file_exists($image))
                  {
                  ?>
                
                    <img class="img-fluid" src="<?php print $image; ?>" alt="<?php print $data["corporate"]["name"]; ?>" title="<?php print $data["corporate"]["name"]; ?>">
                
                  <?php
                  }
                  ?>
                  
                <?php
                }
                ?>

              <?php
              }
              ?>

              </div>
            </div>
          </div>
        </section>
        <hr class="divider-w">

        
        <section class="module" id="team" style="padding:45px 0 0 0 !important;">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt"><?php print $data["corporate"]["name"]; ?></h2>
                <div class="module-subtitle font-serif"><?php print $data["corporate"]["slogan"]; ?></div>
              </div>
            </div>
            <div class="row">

            <?php
            $var0=$database->afc($data["page"]["id"]);
            ?>
            
            <?php
            if ($var0!=-1)
            {
            ?>
            
              <?php
              foreach ($var0 as $key0=>$value0)
              {
              ?>

                <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                  <div class="team-item">
                    <div class="team-image">
                    
                      <?php
                      $image=$value0;
                      include($data["config"]["path"]["module"]."/list-portfolio-image.php");
                      ?>

                      <div class="team-detail">
                        <h5 class="font-alt"><?php print $value0["content"]["body"]["text"]["title"]; ?></h5>
                        <p class="font-serif"><?php print $value0["content"]["body"]["text"]["summary"]; ?></p>
                      </div>
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
          </div>
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