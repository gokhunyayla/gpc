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
      
      <?php 
      $transparency="";
      include($data["config"]["path"]["module"]."/header.php");
      ?>
      
      <div class="main">
        
        <?php
        include($data["config"]["path"]["module"]."/breadcrumbs.php");
        ?>
        
        <?php
        $var0=$database->ofv("testimonails");
        ?>

        <?php
        if ($var0!=-1)
        {
        ?>

          <section class="module bg-light-60 pt-0 pb-0 testimonial">
            <div class="testimonials-slider" style="padding:20px 0 70px 0 !important;">
              <ul class="slides">

                <?php
                foreach ($var0 as $key0=>$value0)
                {
                ?>

                  <li>
                    <div class="container">
                      <div class="row">
                      <div class="col-sm-12">
                        <div class="module-icon"><span class="icon-quote"></span></div>
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-sm-8 col-sm-offset-2">
                        <blockquote class="testimonial-text font-alt"><?php print $value0["comment"]; ?></blockquote>
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-sm-4 col-sm-offset-4">
                        <div class="testimonial-author">
                        <div class="testimonial-caption font-alt">
                          <div class="testimonial-title"><?php print $value0["name"]?></div>
                          <div class="testimonial-descr" style="color:#999;"><?php print $value0["title"]?></div>
                        </div>
                        </div>
                      </div>
                      </div>
                    </div>
                  </li>
                
                <?php
                }
                ?>

              </ul>
            </div>
          </section>

        <?php
        }
        ?>
        
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