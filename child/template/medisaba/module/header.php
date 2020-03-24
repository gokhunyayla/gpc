<style type="text/css">
.meanmenu-reveal{right:0px !important; margin-right:15px;}
</style>

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
                    $var1[$key1]["sub"][]=$value0;
                    ?>

                <?php
                }
                else
                {
                ?>

                    <?php
                    if (isset($var1[$key1]["sub"]) && count($var1[$key1]["sub"])>0)
                    {
                    ?>
                    
                        <?php
                        foreach ($var1[$key1]["sub"] as $key2=>$value2)
                        {
                        ?>

                            <?php
                            if ($value2["category"]==$key0)
                            {
                            ?>

                                <?php
                                $var1[$key1]["sub"][]=$value0;
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
    
    <section class="menu-area3 fixed-top" id="btt" style="background-color:#fff !important; -webkit-box-shadow: 0px 6px 5px -6px rgba(0,0,0,0.75); -moz-box-shadow: 0px 6px 5px -6px rgba(0,0,0,0.75); box-shadow: 0px 6px 5px -6px rgba(0,0,0,0.75);">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo">

                        <a href="./" style="color:#444444 !important;"><h1 style="font-size:36px !important;"><?php print $data["corporate"]["name"]; ?></h1></a>

                    </div>
                </div>
                <div class="col-md-9">
                    <div class="main-menu text-right">
                        <ul class="list-unstyled list-inline">

                            <?php
                            $i=0;
                            foreach ($var2 as $key0=>$value0)
                            {
                            ?>

                                <li class="list-inline-item"><a href="<?php print $value0["link"]; ?>"><?php print $value0["link-mask"]; ?> <?php if (isset($value0["sub"]) && count($value0["sub"])>0){ ?><i class="fa fa-angle-down"></i><?php } ?></a>

                                    <?php 
                                    if (isset($value0["sub"]) && count($value0["sub"])>0)
                                    { 
                                    ?>

                                        <ul class="dropdown list-unstyled">
                                            
                                            <?php
                                            foreach ($value0["sub"] as $key1=>$value1)
                                            {
                                            ?>

                                                <li><a href="<?php print $value1["link"]; ?>"><?php print $value1["link-mask"]; ?> <?php if (isset($value1["sub"]) && count($value1["sub"])>0){ ?><i class="fa fa-angle-right"></i><?php } ?></a>
                                                        
                                                    <?php 
                                                    if (isset($value1["sub"]) && count($value1["sub"])>0)
                                                    { 
                                                    ?>

                                                        <ul class="dropdown2 list-unstyled">

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
                                
                                <!--
                                <li class="list-inline-item mega-menu"><a>MEGA MENU <i class="fa fa-angle-down"></i></a>
                                    <div class="mega-box">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="q-link">
                                                    <h6>Quick LInks</h6>
                                                    <div class="link-box">
                                                        <a href="">Generel Information</a>
                                                        <a href="">Blood Bank</a>
                                                        <a href="">Medical Research</a>
                                                        <a href="">Emergency Service</a>
                                                        <a href="">Ambulance Service</a>
                                                        <a href="">Payment Methode</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="lt-news">
                                                    <h6>Latest News</h6>
                                                    <div class="news-box d-flex">
                                                        <div class="news-img">
                                                            <img src="<?php print $data["config"]["path"]["assets"]; ?>/images//mega-img-1.jpg" alt="">
                                                        </div>
                                                        <div class="news-con">
                                                            <p>Lorem ipsum dolor sit amet.</p>
                                                            <span>Mar 22, 2018</span>
                                                        </div>
                                                    </div>
                                                    <div class="news-box d-flex">
                                                        <div class="news-img">
                                                            <img src="<?php print $data["config"]["path"]["assets"]; ?>/images//mega-img-2.jpg" alt="">
                                                        </div>
                                                        <div class="news-con">
                                                            <p>Lorem ipsum dolor sit amet.</p>
                                                            <span>Mar 22, 2018</span>
                                                        </div>
                                                    </div>
                                                    <div class="news-box d-flex">
                                                        <div class="news-img">
                                                            <img src="<?php print $data["config"]["path"]["assets"]; ?>/images//mega-img-5.jpg" alt="">
                                                        </div>
                                                        <div class="news-con">
                                                            <p>Lorem ipsum dolor sit amet.</p>
                                                            <span>Mar 22, 2018</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="m-dept">
                                                    <h6>Departments</h6>
                                                    <div class="dept-box">
                                                        <a href="">General Medicine</a>
                                                        <a href="">Cardiology</a>
                                                        <a href="">Gastrology</a>
                                                        <a href="">Neurology</a>
                                                        <a href="">Dental Care</a>
                                                        <a href="">Child Care</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="m-doc">
                                                    <h6>Our Doctors</h6>
                                                    <div class="m-slider owl-carousel">
                                                        <div class="slider-item">
                                                            <img src="<?php print $data["config"]["path"]["assets"]; ?>/images//m-doc-1.png" alt="" class="img-fluid">
                                                            <p>Dr. David White</p>
                                                        </div>
                                                        <div class="slider-item">
                                                            <img src="<?php print $data["config"]["path"]["assets"]; ?>/images//m-doc-2.png" alt="" class="img-fluid">
                                                            <p>Dr. Sunita Patel</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                -->

                            <?php
                            $i++;
                            }
                            ?>

                            <li class="list-inline-item searchbar">
                                <a href="#" class="nav-search search-trigger">
                                    <img src="<?php print $data["config"]["path"]["assets"]; ?>/images//search.png" alt="">
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="search-wrap">
                <div class="search-inner">
                    <div class="search-cell">
                        <form method="post" role="form" action="<?php print $database->afv("search-add-check"); ?>">
                            <div class="search-field-holder">
                                <input type="search" class="form-control main-search-input" name="keyword" placeholder="<?php print $data["word"]["search"]; ?>">
                                <img src="<?php print $data["config"]["path"]["assets"]; ?>/images//close-btn.png" alt="" id="search-close">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="list-unstyled" style="margin-top:55px;">
                                
                                <?php
                                $i=0;
                                foreach ($var2 as $key0=>$value0)
                                {
                                ?>

                                    <li><a href="<?php print $value0["link"]; ?>"> <?php print $value0["link-mask"]; ?></a>
                                        
                                        <?php 
                                        if (isset($value0["sub"]) && count($value0["sub"])>0)
                                        { 
                                        ?>

                                            <ul class="list-unstyled">

                                                <?php
                                                foreach ($value0["sub"] as $key1=>$value1)
                                                {
                                                ?>

                                                    <li><a href="<?php print $value1["link"]; ?>"> <?php print $value1["link-mask"]; ?></a></li>

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

                            <a href="./" style="margin-left:15px; float:left; font-size:30px; color:#000 !important; text-decoration:none;"><?php print $data["corporate"]["name"]; ?></a>
                            
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
}
?>