<?php
if (isset($_POST))
{
?>

	<?php
	if (isset($_POST["name"]) && isset($_POST["redirect"]) && isset($_POST["comments"]) && $_POST["name"]!="")
	{
	?>

		<?php
		$var0=json_decode(base64_decode($_POST["comments"]), true);
		?>
		
		<?php
		if (is_array($var0))
		{
		?>

			<?php
			$comment_count=count($var0);
			?>

		<?php
		}
		else
		{
		?>

			<?php
			$comment_count=0;
			?>

		<?php
		}
		?>

		<?php
		$var0[$comment_count]["name"]=$_POST["name"];
		$var0[$comment_count]["comment"]=$_POST["comment"];
		$var0[$comment_count]["status"]="not-seen";
		$var0[$comment_count]["insert-date"]=date("Y-m-d H:i:s");
		?>

		<?php
		$var0=$database->yu(json_encode($var0, JSON_UNESCAPED_UNICODE), $_POST["variable"]);
		?>

		<?php
		if ($var0>0)
		{
		?>

			<?php
			$array["response"]["status"]	= "success";
			$array["response"]["redirect"]	= $_POST["redirect"];
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