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
        
        <section class="module" style="padding:45px 0 !important;">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="row multi-columns-row post-columns">
                  
                  <?php
                  $var0=$database->afc($data["page"]["id"], "desc");
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

                      <div class="col-md-4 col-lg-4">
                        <div class="post">
                          
                          <div class="post-thumbnail">
                            <a href="<?php print $value0["link"]; ?>" title="<?php print $value0["content"]["body"]["text"]["title"]; ?>">

                            <?php
                            $image=$value0;
                            include($data["config"]["path"]["module"]."/list-image.php")
                            ?>
                            
                            </a>
                          </div>
                          
                          <div class="post-header font-alt">
                            <h2 class="post-title"><a href="<?php print $value0["link"]; ?>"><?php print $value0["content"]["body"]["text"]["title"]; ?></a></h2>
                            <div class="post-meta">

                            <?php 
                            $date=$datetimes->e($value0["insert_date"]); 
                            ?>
                            
                            <?php print $date["date"][2]; ?> <?php print $datetimes->month($date["date"][1]); ?> <?php print $date["date"][0]; ?> <?php print $data["word"]["hour"]; ?> <?php print $date["time"][0]; ?>:<?php print $date["time"][1]; ?><a href="#"> <?php print $value0["content"]["head"]["meta-author"]; ?></a> <span style="float:right;"><a class="mr-2" href="<?php print $value0["link"]; ?>" title="<?php print $value0["content"]["body"]["text"]["title"]; ?>"><i class="fa fa-eye"></i> <?php print $value0["count"]; ?></a> <a class="mr-2" href="<?php print $value0["link"]; ?>" title="<?php print $value0["content"]["body"]["text"]["title"]; ?>"><i class="fa fa-comment-o"></i> <?php if (is_array($value0["comment"])){ ?> <?php print count($value0["comment"]); ?> <?php }else{ ?>0<?php } ?></a></span>
                          

                            </div>
                          </div>
                          <div class="post-entry">

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
                          <div class="post-more"><a class="more-link" href="<?php print $value0["link"]; ?>"><?php print $data["word"]["read-more"]; ?></a></div>
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