<section class="module bg-dark-60 contact-page-header bg-dark" style="padding:0px !important;" data-background="<?php print $data["config"]["path"]["assets"]; ?>/images/contact_bg.jpg">
  <div class="container" style="padding-top:15px;">
    <div class="row">
      <div class="col-sm-12" style="padding:25px 0 35px 0 !important;">
        <h2 class="module-title font-alt" style="margin-bottom:45px !important;"><?php print $data["page"]["content"]["body"]["text"]["title"]; ?></h2>
        <div class="module-subtitle font-serif" style="margin-bottom:15px !important;"><?php print $data["page"]["content"]["body"]["text"]["summary"]; ?></div>
        
        <div class="text-center">
          <ol class="breadcrumb justify-content-center bg-dark p-0 m-0">
              
            <li class="breadcrumb-item"><a class="text-dark" href="./"><?php print $data["word"]["homepage"]; ?></a></li>
            
            <?php
            if ($data["page"]["category"]!=-1)
            {
            ?>

              <?php
              $var0=$database->afi($data["page"]["category"]);
              ?>

              <?php
              if ($var0!=-1)
              {
              ?>

                <?php
                $var0=$var0[0];
                ?>
            
                <?php
                $var1=$database->afi($var0["category"]);
                ?>
            
                <?php
                if ($var1!=-1)
                {
                ?>
                  
                  <?php
                  $var1=$var1[0];
                  ?>
            
                  <li class="breadcrumb-item"><a class="text-dark" href="<?php print $var1["link"]; ?>"><?php print $var1["content"]["link-mask"]; ?></a></li>
            
                <?php
                }
                ?>

                <li class="breadcrumb-item"><a class="text-dark" href="<?php print $var0["link"]; ?>"><?php print $var0["content"]["link-mask"]; ?></a></li>
                                                  
              <?php
              }
              ?>

            <?php
            }
            ?>
            
            <li class="breadcrumb-item active text-primary" aria-current="page"><?php print $data["page"]["content"]["link-mask"]?></li>
          
          </ol>
        </div>

      </div>
    </div>
  </div>
</section>