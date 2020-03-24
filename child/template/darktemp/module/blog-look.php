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

        <section class="module-small">
          <div class="container">
            <div class="row">
              <div class="col-sm-8">
                <div class="post">
                  <div class="post-thumbnail">
                  
                    <?php
                    $image=$data["page"];
                    include($data["config"]["path"]["module"]."/list-image.php")
                    ?>
                  
                  </div>
                  <div class="post-header font-alt">
                    <h1 class="post-title"><?php print $data["page"]["content"]["body"]["text"]["title"]; ?></h1>
                    <div class="post-meta">
                    
                      <?php 
                      $date=$datetimes->e($data["page"]["insert_date"]); 
                      ?>

                      <?php print $date["date"][2]; ?> <?php print $datetimes->month($date["date"][1]); ?> <?php print $date["date"][0]; ?> <?php print $data["word"]["hour"]; ?> <?php print $date["time"][0]; ?>:<?php print $date["time"][1]; ?><?php print $data["word"]["published-at"]; ?> <?php print $data["word"]["by"]; ?><a href="#"> <?php print $data["page"]["content"]["head"]["meta-author"]; ?></a> <span style="float:right;"><a class="mr-2" href="<?php print $data["page"]["link"]; ?>" title="<?php print $data["page"]["content"]["body"]["text"]["title"]; ?>"><i class="fa fa-eye"></i> <?php print $data["page"]["count"]; ?></a> <a class="mr-2" href="<?php print $data["page"]["link"]; ?>" title="<?php print $data["page"]["content"]["body"]["text"]["title"]; ?>"><i class="fa fa-comment-o"></i> <?php if (is_array($data["page"]["comment"])){ ?> <?php print count($data["page"]["comment"]); ?> <?php }else{ ?>0<?php } ?></a></span>
                  
                    </div>
                  </div>
                  <div class="post-entry">
                    <?php print $data["page"]["content"]["body"]["text"]["detail"]; ?>
                  </div>
                </div>

                <?php
                include($data["config"]["path"]["module"]."/comments.php");
                ?>
                
              </div>
              
              <?php
              include($data["config"]["path"]["module"]."/aside.php");
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