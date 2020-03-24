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

        <section class="module-small">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="post">
                  <div class="post-header font-alt">
                    <h1 class="post-title text-center"><?php print $data["page"]["content"]["body"]["text"]["title"]; ?></h1>
                  </div>
                  <div class="post-entry text-center">
                    <?php print $data["page"]["content"]["body"]["text"]["detail"]; ?>
                  </div>
                </div>

              </div>

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