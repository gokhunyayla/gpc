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
					$var0=$database->ofv("testimonails");
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

							<div class="item">
								<div class="card border-0">
									<div class="card-body">
										<h3 class="text-dark font-weight-bold h4"><?php print $value0["title"]; ?></h3>
										<p><?php print $value0["name"]; ?></p>
										<?php print $value0["comment"]; ?>
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