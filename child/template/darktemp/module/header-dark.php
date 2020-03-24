<?php
if ($data["navigation"]["top-navigation"]!=-1)
{
?>

  <?php
  foreach ($data["navigation"]["top-navigation"] as $key0=>$value0)
  {
  ?>

    <?php
    if ($value0["category"]==-1)
    {
    ?>

      <?php
      $var1[$key0]=$value0;
      ?>

    <?php
    }
    else
    {
    ?>

      <?php
      foreach ($var1 as $key1=>$value1)
      {
      ?>
        
        <?php
        if ($value0["category"]==$key1)
        {
        ?>
          
          <?php
          $var1[$key1]["sub"][$key0]=$value0;
          ?>

        <?php
        }
        else
        {
        ?>

          <?php
          if (isset($var1[$key1]["sub"]))
          {
          ?>
          
            <?php
            foreach ($var1[$key1]["sub"] as $key2=>$value2)
            {
            ?>

              <?php
              $var1[$key1]["sub"][$key2]["sub"][$key0]=$value0;
              ?>

            <?php
            }
            ?>

          <?php
          }
          ?>

        <?php
        }
        ?>
  
      <?php
      }
      ?>

    <?php
    }
    ?>

  <?php
  }
  ?>

  

  <?php
  $i=0;
  foreach ($var1 as $key0=>$value0)
  {
  ?>
    
    <?php
    if (isset($value0["sub"]) && count($value0["sub"])>0)
    {
    ?>

      <?php
      $j=0;
      foreach ($value0["sub"] as $key1=>$value1)
      {
      ?>
        
        <?php
        if (isset($value1["sub"]) && count($value1["sub"])>0)
        {
        ?>

          <?php
          $k=0;
          foreach ($value1["sub"] as $key2=>$value2)
          {
          ?>
            
            <?php
            $var2[$i]["sub"][$j]["sub"][$k]=$value2;
            ?>

          <?php
          }
          ?>

        <?php
        }
        else
        {
        ?>

          <?php
          $var2[$i]["sub"][$j]=$value1;
          ?>

        <?php
        }
        ?>

      <?php
      $j++;
      }
      ?>

    <?php
    }
    ?>

    <?php
    $var2[$i]=$value0;
    ?>

  <?php
  $i++;
  }
  ?>

  <nav class="navbar navbar-custom navbar-fixed-top <?php print $transparency; ?>" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.html"><?php print $data["corporate"]["name"]; ?></a>
      </div>
      <div class="collapse navbar-collapse" id="custom-collapse">
        <ul class="nav navbar-nav navbar-right">

          <?php
					$i=0;
					foreach ($var2 as $key0=>$value0)
					{
          ?>
            
            <li class="<?php if (isset($value0["sub"]) && count($value0["sub"])>0){ ?>dropdown<?php } ?> <?php if ($i==0){ ?>active<?php } ?>"><a class="<?php if (isset($value0["sub"]) && count($value0["sub"])>0){ ?>dropdown-toggle<?php } ?> <?php if ($i==0){ ?>font-weight-bold text-primary<?php } ?>" href="<?php print $value0["link"]; ?>" <?php if (isset($value0["sub"]) && count($value0["sub"])>0){ ?>data-toggle="dropdown"<?php } ?>><i class="<?php print $value0["class"]; ?>"></i> <?php print $value0["link-mask"]; ?></a>

              <?php 
              if (isset($value0["sub"]) && count($value0["sub"])>0)
              { 
              ?>
              
                <ul class="dropdown-menu">

                  <?php
									foreach ($value0["sub"] as $key1=>$value1)
									{
									?>

                    <li class="<?php if (isset($value1["sub"]) && count($value1["sub"])>0){ ?>dropdown<?php } ?>"><a class="<?php if (isset($value1["sub"]) && count($value1["sub"])>0){ ?>dropdown-toggle<?php } ?>" href="><?php print $value1["link"]; ?>" <?php if (isset($value1["sub"]) && count($value1["sub"])>0){ ?>data-toggle="dropdown"<?php } ?>><i class="<?php print $value1["class"]; ?>"></i> <?php print $value1["link-mask"]; ?></a>
                      
                      <?php 
                      if (isset($value1["sub"]) && count($value1["sub"])>0)
                      { 
                      ?>

                        <ul class="dropdown-menu">

                          <?php
                          foreach ($value1["sub"] as $key2=>$value2)
                          {
                          ?>

                            <li><a href="<?php print $value2["link"]; ?>"><i class="<?php print $value2["class"]; ?>"></i> <?php print $value2["link-mask"]; ?></a></li>

                          <?php
                          }
                          ?>
                          
                        </ul>

                      <?php
                      }
                      ?>

                    </li>

                  <?php
                  }
                  ?>

                </ul>

              <?php
              }
              ?>

            </li>
          
          <?php
					$i++;
					}
					?>

        </ul>
      </div>
    </div>
  </nav>

<?php
}
?>