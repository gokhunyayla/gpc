<?php
if (isset($_POST["source"]) && isset($_POST["medium"]) && is_array(json_decode(base64_decode($_POST["medium"]), true)))
{
?>

	<?php
	$medium=json_decode(base64_decode($_POST["medium"]), true);
	$source=$_POST["source"];
	?>

	<?php
	$varS=$database->ofv("structure");
	?>

	<?php
	$var0=$site["database"]->ofv("language");
	?>

	<?php
	foreach ($var0 as $key0=>$value0)
	{
	?>

		<?php
		$source["content_".$value0["code"]]["structure"]=$varS[$source["variable"]];
		$filenames["content_".$value0["code"]]["body"]["image"][0]=str_replace("/", "-", $source["link_".$value0["code"]]);
		?>

	<?php
	}
	?>

	<?php
	$var1=$file->upload2("key", $filenames);
	?>

	<?php
	$query="";
	foreach ($source as $key0=>$value0)
	{
	?>

		<?php
		$key=$site["database"]->prefix.$key0;
		?>
		
		<?php
		if (is_array($value0))
		{
		?>

			<?php
			foreach ($var0 as $key1=>$value1)
			{
			?>
				
				<?php
				if ($key0=="content_".$value1["code"])
				{
				?>

					<?php
					if (isset($var1[$key0]["body"]["image"][0]) && strpos($var1[$key0]["body"]["image"][0], ".png") || strpos($var1[$key0]["body"]["image"][0], ".gif") || strpos($var1[$key0]["body"]["image"][0], ".jpg"))			
					{
					?>
					
						<?php
						$value0["body"]["image"][0]=$var1[$key0]["body"]["image"][0];
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
			$query.="$key='".json_encode($value0, JSON_UNESCAPED_UNICODE)."', ";
			?>
		
		<?php
		}
		elseif (is_numeric($value0) && $value0==-1)
		{
		?>

			<?php
			$query.="$key=".$value0.", ";
			?>

		<?php
		}
		else
		{
		?>

			<?php
			$query.="$key='".$value0."', ";
			?>

		<?php
		}
		?>

	<?php
	}
	$query=rtrim($query, ", ");
	?>
	
    <?php
	$var0=$site["database"]->li($query);
	?>

    <?php
    if ($var0>0)
    {
    ?>

        <?php
        $array["response"]["status"]	= "success";
        $array["response"]["redirect"]	= $medium["redirect"];
        $array["response"]["message"]	= $data["word"]["successfuly-inserted"];
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
        $array["response"]["message"]	= $data["word"]["unsuccessful-insert"];
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