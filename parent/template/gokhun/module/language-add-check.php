<?php
if (isset($_POST["source"]) && isset($_POST["variable"]) && isset($_POST["redirect"]))
{
?>

	<?php
	$query=""; $var0=1;
	foreach ($_POST["source"] as $key0=>$value0)
	{
	?>
		
		<?php
		foreach ($value0 as $key1=>$value1)
		{
		?>
			
			<?php
			if ($key0!=$value1["code"])
			{
			?>

				<?php
				$var0=$site["database"]->aa($site["database"]->prefix."option", $site["database"]->prefix.$value1["code"], "text", "NULL");
				$var0=$site["database"]->aa($site["database"]->prefix."link", $site["database"]->prefix."link_".$value1["code"], "varchar(255)", "NULL");
				$var0=$site["database"]->aa($site["database"]->prefix."link", $site["database"]->prefix."content_".$value1["code"], "longtext", "NULL");
				$var0=$site["database"]->aa($site["database"]->prefix."link", $site["database"]->prefix."comment_".$value1["code"], "text", "NULL");
				$var0=$site["database"]->aa($site["database"]->prefix."link", $site["database"]->prefix."count_".$value1["code"], "int(11)", "NULL");
				?>

				<?php
				$var0=$site["database"]->tc($site["database"]->prefix."link", $site["database"]->prefix."link_".$key0, $site["database"]->prefix."link_".$value1["code"]);
				$var0=$site["database"]->tc($site["database"]->prefix."link", $site["database"]->prefix."content_".$key0, $site["database"]->prefix."content_".$value1["code"]);
				?>

				<?php
				$new=$value1["code"];
				?>

			<?php
			}
			?>

		<?php
		}
		?>

		<?php
		$var=$site["database"]->prefix.$site["database"]->language;
		$query.="$var='".json_encode($value0, JSON_UNESCAPED_UNICODE)."', ";
		?>

	<?php
	}
	$query=rtrim($query, ", ")." where ".$site["database"]->prefix."variable='".$_POST["variable"]."'";
	?>

	<?php
	if ($var0)
	{
	?>

		<?php
		$var1=$site["database"]->ou($query);
		$var1=$site["database"]->tc($site["database"]->prefix."option", $var, $site["database"]->prefix.$new);
		?>

		<?php
		if ($var1)
		{
		?>

			<?php
			$array["response"]["status"]	= "success";
			$array["response"]["redirect"]	= $_POST["redirect"];
			$array["response"]["message"]	= $data["word"]["successfuly-updated"];
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
			$array["response"]["message"]	= $data["word"]["unsuccessful-update"];
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
        $array["response"]["message"]	= $data["word"]["table-cannot-be-editted"];
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