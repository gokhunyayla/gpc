<?php
if (isset($_POST["source"]) && isset($_POST["variable"]) && isset($_POST["redirect"]))
{
?>

	<?php
	$query="";
	foreach ($_POST["source"] as $key0=>$value0)
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
	$var0=$site["database"]->ou($query);
	?>

    <?php
    if ($var0)
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