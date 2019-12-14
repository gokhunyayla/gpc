<?php
if (isset($_POST["medium"]) && is_array(json_decode(base64_decode($_POST["medium"]) ,true)))
{
?>

	<?php
	$medium=json_decode(base64_decode($_POST["medium"]) ,true);
	?>

	<?php
	$var0=$site["database"]->ofv("language");
	?>

	<?php
	if ($var0==-1)
	{
	?>

		<?php
        $array["response"]["status"]	= "danger";
        $array["response"]["redirect"]	= -1;
        $array["response"]["message"]	= $data["word"]["there-seems-no-language"];
        $array["response"]["data"]		= -1;
        ?>

	<?php
	}
	else
	{
	?>

        <?php
        foreach($var0 as $key0=>$value0)
        {
        ?>

            <?php
            $var1=$site["database"]->ofv($medium["variable"], $value0["code"]);
            ?>

            <?php
            unset($var1[$medium["key"]]);
            $var1=array_values($var1);
            ?>

			<?php
			$var2[$value0["code"]]=$var1;
			?>

        <?php
        }
        ?>

	<?php
	}
	?>

	<?php
	$query="";
	foreach ($var2 as $key0=>$value0)
	{
	?>

		<?php
		$var=$site["database"]->prefix.$key0;
		$query.="$var='".json_encode($value0, JSON_UNESCAPED_UNICODE)."', ";
		?>

	<?php
	}
	$query=rtrim($query, ", ")." where ".$site["database"]->prefix."variable='".$medium["variable"]."'";
	?>

    <?php
	$var3=$site["database"]->ou($query);
	?>

    <?php
    if ($var3)
    {
    ?>

        <?php
        $array["response"]["status"]	= "success";
        $array["response"]["redirect"]	= $medium["redirect"];
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