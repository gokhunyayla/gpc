<?php
$var0=$database->ofv("slider");
?>

<?php
if ($var0!=-1)
{
?>

  <section class="home-section home-fade" id="home">
    <div class="hero-slider">
      <ul class="slides">

        <?php
        foreach ($var0 as $key0=>$value0)
        {
        ?>

          <?php
          if ($value0["image"]=="")
          {
          ?>

            <?php
            $image="";
            ?>

          <?php
          }
          else
          {
          ?>

            <?php
            $src=$data["config"]["path"]["media"]."/".$value0["image"];
            ?>

            <?php
            if (file_exists($src))
            {
            ?>

              <?php
              $image=$src;
              ?>

            <?php
            }
            else
            {
            ?>

              <?php
              $image="";
              ?>

            <?php
            }
            ?>

          <?php
          }
          ?>

          <li class="bg-dark-30 bg-dark" style="background-image:url(<?php print $image; ?>);">
            <div class="titan-caption">
              <div class="caption-content">
                <div class="font-alt mb-30 titan-title-size-4" style="letter-spacing:0px;"><?php print $value0["title"]; ?></div>
                <div class="font-alt mb-40 titan-title-size-1"><?php print $value0["summary"]; ?></div>
                <a class="section-scroll btn btn-border-w btn-round" href="<?php print $value0["button-link"]; ?>"><?php print $value0["button-tag"]; ?></a>
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