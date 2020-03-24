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
        include($data["config"]["path"]["module"]."/slider.php");
        include($data["config"]["path"]["module"]."/works.php");
        include($data["config"]["path"]["module"]."/ataturk.php");
        include($data["config"]["path"]["module"]."/latest-blog.php");
        include($data["config"]["path"]["module"]."/testimonials.php");
        include($data["config"]["path"]["module"]."/companies.php");
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