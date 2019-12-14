<?php $formname="comment"; ?>
<form id="<?php print $formname; ?>" method="post" action="<?php print $database->afv("comment-add-check"); ?>">
	<input type="hidden" name="variable" value="<?php print $data["page"]["link"]; ?>">
	<div class="card mb-4">
		<div class="card-header bg-white"><?php print $data["word"]["write-a-comment"]; ?></div>
		<div class="card-body">
			
			<input type="hidden" name="redirect" value="<?php print $data["page"]["link"]; ?>">
			<input type="hidden" name="comments" value='<?php print base64_encode(json_encode($data["page"]["comment"], JSON_UNESCAPED_UNICODE)); ?>'>
			
			<div class="form-group">
				<input type="text" class="form-control" name="name" placeholder="<?php print $data["word"]["write-your-name"]; ?>">
			</div>
			<div class="form-group">
				<textarea class="form-control" rows="3" name="comment" placeholder="<?php print $data["word"]["write-your-comment"]; ?>"></textarea>
			</div>
			<div class="form-group">
				<div id="<?php print $formname; ?>-result"></div>
			</div>
			<button type="button" class="btn btn-primary" onClick="javascript:send('<?php print $formname; ?>');"><?php print $data["word"]["send"]; ?></button>
		</div>
	</div>
</form>

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

			<div class="media mb-4">
				<img class="d-flex mr-3 rounded-circle" src="https://via.placeholder.com/50x50" alt="Yorum yapanın görseli" title="Yorum yapanın görseli">
				<div class="media-body">
					<h5><?php print $value0["name"]; ?></h5>
					<p><?php print $value0["comment"]; ?> </p>

					<?php
					if (isset($value0["answer"]))
					{
					?>

						<?php
						foreach ($value0["answer"] as $key1=>$value1)
						{
						?>

							<div class="media mb-4">
								<img class="d-flex mr-3 rounded-circle" src="https://via.placeholder.com/50x50" alt="Yorum yapanın görseli" title="Yorum yapanın görseli">
								<div class="media-body">
									<h5><?php print $value1["name"]; ?></h5>
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