<?php
if (is_array($data["page"]["comment"]))
{
?>

	<?php
 	foreach ($data["page"]["comment"] as $key0=>$value0)
	{
	?>
		
		<?php
		if ($value0["status"]=="approved")
		{
        ?>

            <div class="blog-comment">
                <h4><?php print $data["word"]["comments"]; ?></h4>
                <div class="comment-box d-flex">
                    <div class="comment-img">
                        <a href="#"><i class="text-secondary fa fa-user" style="font-size:45px;"></i></a>
                    </div>
                    <div class="comment-con">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><a href="#"><?php print $value0["name"]; ?></a></li>
                        </ul>
                        <p><?php print $value0["comment"]; ?></p>
                    </div>
                </div>

                <?php
                if (isset($value0["answer"]))
                {
                ?>

                    <?php
                    foreach ($value0["answer"] as $key1=>$value1)
                    {
                    ?>

                        <div class="comment-box comment-box2 d-flex">
                            <div class="comment-img">
                                <a href="#"><i class="text-secondary fa fa-user" style="font-size:45px;"></i></a>
                            </div>
                            <div class="comment-con">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item"><a href="#"><?php print $value1["name"]; ?></a></li>
                                </ul>
                                <p><?php print $value1["comment"]; ?></p>
                            </div>
                        </div>

                    <?php
                    }
                    ?>

                <?php
                }
                ?>

            </div>

        <?php
		}
		?>

	<?php
	}
	?>

<?php
}
?>

<div class="comment-form">
    <h5><?php print $data["word"]["write-a-comment"]; ?></h5>
    <?php $formname="comment"; ?>
	<form id="<?php print $formname; ?>" method="post" action="<?php print $database->afv("comment-add-check"); ?>">
        <input type="hidden" name="variable" value="<?php print $data["page"]["link"]; ?>">
		<input type="hidden" name="redirect" value="<?php print $data["page"]["link"]; ?>">
		<input type="hidden" name="comments" value='<?php print base64_encode(json_encode($data["page"]["comment"], JSON_UNESCAPED_UNICODE)); ?>'>

        <div class="row">
            <div class="col-md-12">
                <input type="text" name="name" placeholder="<?php print $data["word"]["write-your-name"]; ?>" required="">
            </div>
            <div class="col-md-12">
                <textarea name="comment" placeholder="<?php print $data["word"]["write-your-comment"]; ?>" required=""></textarea>
            </div>
            <div class="col-md-12">
                <div id="<?php print $formname; ?>-result"></div>
            </div>
            <div class="col-md-12">
                <button type="button" onClick="javascript:send('<?php print $formname; ?>');"><?php print $data["word"]["send"]; ?></button>
            </div>
        </div>
    </form>
</div>