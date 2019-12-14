<aside class="col-4">
    <div class="card mb-4">
        <div class="card-header bg-white">
            <?php print $data["word"]["searching-area"]; ?>
        </div>
        <div class="card-body">
			<?php $formname="search"; ?>
            <form method="post" action="<?php print $database->afv("search-add-check"); ?>">
                <div class="input-group">
                    <input type="text" class="form-control" name="keyword" placeholder="<?php print $data["word"]["search"]; ?>">
                    <span class="input-group-btn">
                        <button class="btn btn-secondary" type="submit"><?php print $data["word"]["search"]; ?></button>
                    </span>
                </div>
            </form>
        </div>
    </div>

    <?php
    $var0=$database->afc($data["page"]["category"]);
    ?>

    <?php
    if ($var0!=-1)
    {
    ?>

        <div class="card mb-4">
            <div class="card-header bg-white">
                <?php print $data["word"]["up-categories"]; ?>
            </div>
            <div class="card-body">
                <div class="row">

                    <?php
                    $var1=array();
                    $result=floor(count($var0)/2);
                    ?>

                    <?php
                    $i=0; $var1["l"]=array(); $var1["r"]=array();
                    foreach ($var0 as $key0=>$value0)
                    {
                    ?>

                        <?php
                        if ($value0["required"]!="required")
                        {
                        ?>

                            <?php
                            if ($i>=$result)
                            {
                            ?>

                                <?php
                                $var1["l"][]=$value0;
                                ?>

                            <?php
                            }
                            else
                            {
                            ?>

                                <?php
                                $var1["r"][]=$value0;
                                ?>

                            <?php
                            }
                            ?>

                        <?php
                        }
                        ?>

                    <?php
                    $i++;
                    }
                    ?>

                    <div class="col-6">
                        <ul class="list-unstyled" mb-0>

                            <?php
                            foreach ($var1["l"] as $key0=>$value0)
                            {
                            ?>

                                <li><a href="<?php print $value0["link"]; ?>"><?php print $value0["content"]["link-mask"]; ?></a></li>

                            <?php
                            }
                            ?>

                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-unstyled mb-0">

                            <?php
                            foreach ($var1["r"] as $key0=>$value0)
                            {
                            ?>

                                <li><a href="<?php print $value0["link"]; ?>"><?php print $value0["content"]["link-mask"]; ?></a></li>

                            <?php
                            }
                            ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

    <?php
    }
    ?>


    <?php
    $var0=$database->afc($data["page"]["id"]);
    ?>

    <?php
    if ($var0!=-1)
    {
    ?>

        <div class="card mb-4">
            <div class="card-header bg-white">
                <?php print $data["word"]["sub-categories"]; ?>
            </div>
            <div class="card-body">
                <div class="row">

                    <?php
                    $var1=array();
                    $result=floor(count($var0)/2);
                    ?>

                    <?php
                    $i=0; $var1["l"]=array(); $var1["r"]=array();
                    foreach ($var0 as $key0=>$value0)
                    {
                    ?>

                        <?php
                        if ($value0["required"]!="required")
                        {
                        ?>

                            <?php
                            if ($i>=$result)
                            {
                            ?>

                                <?php
                                $var1["l"][]=$value0;
                                ?>

                            <?php
                            }
                            else
                            {
                            ?>

                                <?php
                                $var1["r"][]=$value0;
                                ?>

                            <?php
                            }
                            ?>

                        <?php
                        }
                        ?>

                    <?php
                    $i++;
                    }
                    ?>

                    <div class="col-6">
                        <ul class="list-unstyled" mb-0>

                            <?php
                            foreach ($var1["l"] as $key0=>$value0)
                            {
                            ?>

                                <li><a href="<?php print $value0["link"]; ?>"><?php print $value0["content"]["link-mask"]; ?></a></li>

                            <?php
                            }
                            ?>

                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-unstyled mb-0">

                            <?php
                            foreach ($var1["r"] as $key0=>$value0)
                            {
                            ?>

                                <li><a href="<?php print $value0["link"]; ?>"><?php print $value0["content"]["link-mask"]; ?></a></li>

                            <?php
                            }
                            ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

    <?php
    }
    ?>

</aside>