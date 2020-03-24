<div class="col-sm-4 col-md-3 col-md-offset-1 sidebar">
    <div class="widget">
        <h5 class="widget-title font-alt"><?php print $data["word"]["searching-area"]; ?></h5>
        <form method="post" role="form" action="<?php print $database->afv("search-add-check"); ?>">
        <div class="search-box">
            <input type="text" class="form-control" name="keyword" placeholder="<?php print $data["word"]["search"]; ?>">
            <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
        </div>
        </form>
    </div>

    <?php
    $var0=$database->afc($data["page"]["category"]);
    ?>

    <?php
    if ($var0!=-1)
    {
    ?>

        <div class="widget">
            <h5 class="widget-title font-alt"><?php print $data["word"]["up-categories"]; ?></h5>
            <ul class="icon-list">

                <?php
                foreach($var0 as $key0=>$value0)
                {
                ?>

                    <li><a href="<?php print $value0["link"]; ?>"><?php print $value0["content"]["link-mask"]; ?></a></li>

                <?php
                }
                ?>

            </ul>
        </div>

    <?php
    }
    ?>

    <div class="widget">
        <h5 class="widget-title font-alt"><?php print $data["word"]["tags"]; ?></h5>
        <div class="tags font-serif">
            
            <?php
            $tags=explode(", ", $data["page"]["content"]["head"]["meta-keywords"]);
            ?>

            <?php
            foreach ($tags as $key0=>$value0)
            {
            ?>

                <form id="keyword-<?php print $key0; ?>" method="post" role="form" action="<?php print $database->afv("search-add-check"); ?>"><input type="hidden" class="form-control" name="keyword" value="<?php print $value0; ?>"></form>

                <a style="float:left !important;" href="javascript:document.forms['keyword-<?php print $key0; ?>'].submit();" rel="tag"><?php print $value0; ?></a>
            
            <?php
            }
            ?>
            
            <div style="clear:both;"></div>

        </div>
    </div>
    <div class="widget">
        <h5 class="widget-title font-alt"><?php print $data["word"]["summary"]; ?></h5><?php print $data["page"]["content"]["body"]["text"]["summary"]; ?>
    </div>
</div>