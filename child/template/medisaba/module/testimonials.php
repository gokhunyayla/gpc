<?php
$var0=$database->ofv("testimonails");
?>

<?php
if ($var0!=-1)
{
?>

    <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-testimonial owl-carousel">

                        <?php
                        foreach ($var0 as $key0=>$value0)
                        {
                        ?>

                            <div class="testimonial-content text-center">
                                <h5><?php print $value0["name"]; ?></h5>
                                <span><?php print $value0["title"]?></span>
                                <p><?php print $value0["comment"]; ?></p>
                            </div>
                        
                        <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
}
?>