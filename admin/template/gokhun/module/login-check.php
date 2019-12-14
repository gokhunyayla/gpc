<?php
if (isset($_POST))
{
?>

	<?php
	if (isset($_POST["email"]) && $_POST["email"]!="" && isset($_POST["password"]) && $_POST["password"]!="")
	{
	?>

		<?php
		$var0=$database->lc(base64_encode($_POST["email"]), base64_encode($_POST["password"]));
		?>

		<?php
		if ($var0>0)
		{
		?>

			<?php
			$session->set("user", $var0);
			?>

			<?php
			$array["response"]["status"]	= "success";
			$array["response"]["redirect"]	= $database->afv("home");
			$array["response"]["message"]	= $data["word"]["login-successful"];
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
			$array["response"]["message"]	= $data["word"]["user-cannot-be-found"];
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