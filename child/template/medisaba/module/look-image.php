<?php
if (isset($image["content"]["body"]["image"][0]) && count($image["content"]["body"]["image"])>0)
{
?>

	<?php
	$imname=$data["config"]["path"]["media"]."/".$image["content"]["body"]["image"][0];
	?>

	<?php
 	if (file_exists($imname))
	{
	?>

		<img src="<?php print $imname; ?>" class="img-fluid" alt="<?php print $image["content"]["body"]["text"]["title"]; ?>" title="<?php print $image["content"]["body"]["text"]["title"]; ?>">

	<?php
	}
	else
	{
	?>

		<img src="https://via.placeholder.com/900x500" class="img-fluid" alt="<?php print $image["content"]["body"]["text"]["title"]; ?>" title="<?php print $image["content"]["body"]["text"]["title"]; ?>">

	<?php
	}
	?>

<?php
}
else
{
?>

<?php
}
?>