<?php
$var0=$database->afq($database->prefix."variable='blog-look'");
?>

<?php
if ($var0!=-1)
{
?>

  <section class="module" id="news" style="padding:45px 0 !important;">
    <div class="container">
      <div class="row">
        
        <!--
        <div class="col-sm-6 col-sm-offset-3">
          <h2 class="module-title font-alt"><?php print $data["word"]["latest-blog"]; ?></h2>
          <div class="module-subtitle font-serif"><?php print $data["word"]["latest-blog-text"]; ?></div>
        </div>
        -->

      </div>
      <div class="multi-columns-row post-columns owl-carousel">
        
        <?php
        foreach ($var0 as $key0=>$value0)
        {
        ?>

          <div class="owl-item" style="margin:0px 15px !important;">
            <div class="post mb-0">
              <div class="post-thumbnail">
                <a href="<?php print $value0["link"]; ?>">
                
                  <?php
                  $image=$value0;
                  include($data["config"]["path"]["module"]."/list-image.php");
                  ?>

                </a>
              </div>
              <div class="post-header font-alt">
                <h2 class="post-title"><a href="<?php print $value0["link"]; ?>"><?php print $value0["content"]["body"]["text"]["title"]; ?></a></h2>
                <div class="post-meta">

                  <?php 
                  $date=$datetimes->e($value0["insert_date"]); 
                  ?>
                  
                  <?php print $date["date"][2]; ?> <?php print $datetimes->month($date["date"][1]); ?> <?php print $date["date"][0]; ?> <?php print $data["word"]["hour"]; ?> <?php print $date["time"][0]; ?>:<?php print $date["time"][1]; ?> <span style="float:right;"><a class="mr-2" href="<?php print $value0["link"]; ?>" title="<?php print $value0["content"]["body"]["text"]["title"]; ?>"><i class="fa fa-eye"></i> <?php print $value0["count"]; ?></a> <a class="mr-2" href="<?php print $value0["link"]; ?>" title="<?php print $value0["content"]["body"]["text"]["title"]; ?>"><i class="fa fa-comment-o"></i> <?php if (is_array($value0["comment"])){ ?> <?php print count($value0["comment"]); ?> <?php }else{ ?>0<?php } ?></a></span>
                
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
              <div class="post-more"><a class="more-link" href="<?php print $value0["link"]; ?>"><?php print $data["word"]["read-more"]?></a></div>
            </div>
          </div>

        <?php
        }
        ?>
        
      </div>
    </div>
  </section>

<?php
}
?>