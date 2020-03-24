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

			<div class="comments">
				<h4 class="comment-title font-alt"><?php print $data["word"]["comments"]; ?></h4>
				<div class="comment clearfix">
					<div class="comment-avatar"><img src="https://via.placeholder.com/55x55" alt="avatar" /></div>

					<div class="comment-content clearfix">
						<div class="comment-author font-alt"><a href="#"><?php print $value0["name"]; ?></a></div>
						<div class="comment-body">
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

							<div class="comment clearfix">
								<div class="comment-avatar"><img src="https://via.placeholder.com/55x55" alt="avatar" /></div>
								<div class="comment-content clearfix">
									<div class="comment-author font-alt"><a href="#"><?php print $value1["name"]; ?></a></div>
									<div class="comment-body">
										<p><?php print $value1["comment"]; ?></p>
									</div>
								</div>
							</div>

						<?php
						}
						?>

					<?php
					}
					?>

				</div>
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
    <h4 class="comment-form-title font-alt"><?php print $data["word"]["write-a-comment"]; ?></h4>
    <?php $formname="comment"; ?>
	<form id="<?php print $formname; ?>" method="post" action="<?php print $database->afv("comment-add-check"); ?>">
		<input type="hidden" name="variable" value="<?php print $data["page"]["link"]; ?>">
		<input type="hidden" name="redirect" value="<?php print $data["page"]["link"]; ?>">
		<input type="hidden" name="comments" value='<?php print base64_encode(json_encode($data["page"]["comment"], JSON_UNESCAPED_UNICODE)); ?>'>

        <div class="form-group">
            <label class="sr-only" for="name"><?php print $data["word"]["name"]; ?></label>
            <input type="text" class="form-control" name="name" placeholder="<?php print $data["word"]["write-your-name"]; ?>">
        </div>
        <div class="form-group">
			<textarea class="form-control" rows="3" name="comment" placeholder="<?php print $data["word"]["write-your-comment"]; ?>"></textarea>
        </div>
		<div class="form-group">
			<div id="<?php print $formname; ?>-result"></div>
		</div>
		<button type="button" class="btn btn-round btn-d" onClick="javascript:send('<?php print $formname; ?>');"><?php print $data["word"]["send"]; ?></button>
    </form>
</div>