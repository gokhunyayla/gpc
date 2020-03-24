<?php
if (isset($_POST))
{
?>

	<?php
	if (isset($_POST["name"]) && $_POST["name"]!="")
	{
	?>

		<?php
		$query=$database->prefix."status='not-seen', ".$database->prefix."status_date='".$datetimes->today."', ".$database->prefix."language='".$database->language."', ".$database->prefix."content='".json_encode($_POST, JSON_UNESCAPED_UNICODE)."'";      
		?>

		<?php
		$var0=$database->ci($query);
		?>

		<?php
		if ($var0>0)
		{
		?>

			<?php
			$array["response"]["status"]	= "success";
			$array["response"]["redirect"]	= isset($_POST["redirect"]) ? $_POST["redirect"]: -1;
			$array["response"]["message"]	= $data["word"]["your-data-has-been-saved"];
			$array["response"]["data"]		= $var0;
			?>

		<?php
		}
		else
		{
		?>

			<?php
			$array["response"]["status"]	= "danger";
			$array["response"]["redirect"]	= -1;
			$array["response"]["message"]	= $data["word"]["form-cannot-be-saved"];
			$array["response"]["data"]		= -1;
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
		$array["response"]["status"]	= "danger";
		$array["response"]["redirect"]	= -1;
		$array["response"]["message"]	= $data["word"]["please-fill-the-requireds"];
		$array["response"]["data"]		= -1;
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
 	$array["response"]["status"]	= "danger";
 	$array["response"]["redirect"]	= -1;
	$array["response"]["message"]	= $data["word"]["no-data-is-sent"];
	$array["response"]["data"]		= -1;
	?>

<?php
}
?>

<?php print json_encode($array, JSON_UNESCAPED_UNICODE); ?>