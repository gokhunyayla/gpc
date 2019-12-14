<?php
if (isset($_POST["variable"]) && isset($_POST["redirect"]))
{
?>

	<?php
	$var0=$file->upload();
	?>

	<?php
	$var1=$site["database"]->ofv("language");
	?>

	<?php
	foreach ($var1 as $key1=>$value1)
	{
	?>
		
		<?php
		$var2=$site["database"]->ofv($_POST["variable"], $value1["code"]);
		?>

		<?php
		foreach ($var2 as $key2=>$value2)
		{
		?>
		
			<?php
			if ($var0[$value1["code"]][$key2]=="")
			{
			?>

				<?php
				$var3[$value1["code"]][$key2]=$value2;
				?>

			<?php
			}
			else
			{
			?>
	
				<?php
				$var3[$value1["code"]][$key2]=$var0[$value1["code"]][$key2];
				?>

			<?php
			}
			?>

		<?php
		}
		?>

	<?php
	}
	?>
	
	<?php
	$query="";
	foreach ($var3 as $key3=>$value3)
	{
	?>

		<?php
		$key=$site["database"]->prefix.$key3;
		$query.="$key='".json_encode($value3, JSON_UNESCAPED_UNICODE)."', "
		?>

	<?php
	}
	$query=rtrim($query, ", "); $query=$query." where ".$site["database"]->prefix."variable='".$_POST["variable"]."'";
	?>

    <?php
	$var1=$site["database"]->ou($query);
	?>

    <?php
    if ($var1)
    {
    ?>

        <?php
        $array["response"]["status"]	= "success";
        $array["response"]["redirect"]	= $_POST["redirect"];
        $array["response"]["message"]	= $data["word"]["successfuly-updated"];
        $array["response"]["data"]		= $var1;
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
	$array["response"]["message"]	= $data["word"]["no-data-is-sent"];
	$array["response"]["data"]		= -1;
	?>

<?php
}
?>

<?php print json_encode($array, JSON_UNESCAPED_UNICODE); ?>