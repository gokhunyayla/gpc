<div class="module-small bg-dark">
  <div class="container mobile">
    <div class="row">
      <div class="col-sm-3">
        <div class="widget">
          <h5 class="widget-title font-alt"><?php print $data["corporate"]["name"]; ?></h5>
          <p><?php print $data["corporate"]["address"]; ?></p>
          <p><?php print $data["word"]["phone"]; ?>: <?php print $data["corporate"]["phone"]; ?></p>
          <p><?php print $data["word"]["email"]; ?><a href="#"><?php print $data["corporate"]["email"]; ?></a></p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="widget">
          <h5 class="widget-title font-alt"><?php print $data["word"]["who-are-we"]?></h5>
          <p><?php print $data["corporate"]["summary"]; ?></p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="widget">
          <h5 class="widget-title font-alt"><?php print $data["word"]["site-linkage"]; ?></h5>

          <?php
          if ($data["navigation"]["bottom-navigation"]!=-1)
          {
          ?>
          
            <ul class="icon-list">
              
              <?php 
              foreach ($data["navigation"]["bottom-navigation"] as $key0=>$value0)
              {
              ?>
              
                <li><a href="<?php print $value0["link"]; ?>"><i class="<?php print $value0["class"]; ?>"></i> <?php print $value0["link-mask"]; ?></a></li>
              
              <?php
              }
              ?>
              
            </ul>
          
          <?php
          }
          ?>

        </div>
      </div>
      <div class="col-sm-3">
        <div class="widget">
          <h5 class="widget-title font-alt"><?php print $data["word"]["latest-blog"]; ?></h5>

          <?php
          $var0=$database->afc(10, "desc", 4);
          ?>
          
          <?php
          if ($var0!=-1)
          {
          ?>
          
            <ul class="widget-posts">
              
              <?php
              foreach ($var0 as $key0=>$value0)
              {
              ?>
              
                <li class="clearfix">

                  <?php
                  if (isset($value0["content"]["image"][0]))
                  {
                  ?>

                    <?php
                    $image=$data["config"]["path"]["media"]."/".$value0["content"]["image"][0];
                    if (isset($image))
                    {
                    ?>

                      <div class="widget-posts-image"><a href="<?php print $value0["link"]; ?>" title="<?php print $value0["content"]["link-mask"]; ?>"><img src="<?php print $image; ?>" alt="<?php print $value0["content"]["link-mask"]; ?>" title="<?php print $value0["content"]["link-mask"]; ?>" /></a></div>
                    
                    <?php
                    }
                    ?>

                  <?php
                  }
                  ?>

                  <div class="widget-posts-body">
                    <div class="widget-posts-title"><a href="<?php print $value0["link"]; ?>"><?php print $value0["content"]["link-mask"]; ?></a></div>
                    <div class="widget-posts-meta"><?php print $value0["insert_date"]; ?></div>
                  </div>
                </li>
              
              <?php
              }
              ?>
              
            </ul>
          
          <?php
          }
          ?>

        </div>
      </div>
    </div>
  </div>
</div>
<hr class="divider-d">
<footer class="footer bg-dark">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <p class="copyright font-alt"><?php print $data["corporate"]["copyright"]; ?></p>
      </div>
      <div class="col-sm-6">

        <?php
				if ($data["corporate"]["social-media"]!=-1)
				{
				?>
				
          <div class="footer-social-links"> 
						
						<?php
						foreach ($data["corporate"]["social-media"] as $key0=>$value0)
						{
						?>
						
							<a target="_blank" href="<?php print $value0["link"]; ?>" title="<?php print $value0["name"]; ?>"><i class="<?php print $value0["class"]; ?>"></i></a></li>
						
						<?php
						}
						?>
						
					</div>
				
				<?php
				}
				?>

      </div>
    </div>
  </div>
</footer>