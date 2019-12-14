<?php
if (isset($_POST["source"]) && isset($_POST["variable"]) && isset($_POST["redirect"]))
{
?>

	<?php
	foreach ($_POST["source"] as $key0=>$value0)
	{
	?>
		
		<?php
		foreach ($value0 as $key1=>$value1)
		{
		?>
			
			<?php
			foreach ($value1 as $key2=>$value2)
			{
			?>
				
				<?php
				if ($key2=="title")
				{
				?>

					<?php
					$var0[$key0][$key1]["image"]=$variable->latin_replace($value2);
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
	}
	?>	

	<?php
	$var0=$file->upload("key", $var0);
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
			foreach ($value2 as $key3=>$value3)
			{
			?>
				<?php
				if ($key3=="image")
				{
				?>

					<?php
					if ($var0[$value1["code"]][$key2][$key3]=="")
					{
					?>

						<?php
						$var3[$value1["code"]][$key2][$key3]=$value3;
						?>

					<?php
					}
					else
					{
					?>

						<?php
						$var3[$value1["code"]][$key2][$key3]=$var0[$value1["code"]][$key2][$key3];
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
                    $var3[$value1["code"]][$key2][$key3]=$_POST["source"][$value1["code"]][$key2][$key3];
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
	}
	?>

	<?php
	$query="";
	foreach ($var3 as $key0=>$value0)
	{
	?>

		<?php
		$var=$site["database"]->prefix.$key0;
		$query.="$var='".json_encode($value0, JSON_UNESCAPED_UNICODE)."', ";
		?>

	<?php
	}
	$query=rtrim($query, ", ")." where ".$site["database"]->prefix."variable='".$_POST["variable"]."'";
	?>

    <?php
	$var4=$site["database"]->ou($query);
	?>

    <?php
    if ($var4)
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
	$array["response"]["message"]	= $data["word"]["no-data-is-sent"];
	$array["response"]["data"]		= -1;
	?>

<?php
}
?>

<?php print json_encode($array, JSON_UNESCAPED_UNICODE); ?>