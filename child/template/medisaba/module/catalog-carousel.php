<section class="container mt-5 ">
    <div class="owl-nav-one">
        <?php
        for ($i=1; $i<=150; $i++)
        {
        ?>

            <?php
            if ($i<10)
            {
            ?>

                <?php
                $page="00".$i;
                ?>

            <?php
            }
            elseif ($i<100)
            {
            ?>

                <?php
                $page="0".$i;
                ?>

            <?php
            }
            else
            {
            ?>

                <?php
                $page=$i;
                ?>

            <?php
            }
            ?>

            <div class="owl-item">
                <img src="https://media-afr-cdn.oriflame.com/-/media/TR/Images/Catalog/Brochures/<?php print $data["page"]["class"]; ?>-<?php print $page; ?>-tr-TR.ashx?u=2003180700&w=900&q=40" alt="" title="">
            </div>
            
        <?php
        }
        ?>

    </div>
</section>