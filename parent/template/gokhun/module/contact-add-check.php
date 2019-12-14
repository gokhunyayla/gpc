<?php
if (isset($_POST["source"]) && isset($_POST["medium"]) && is_array(json_decode(base64_decode($_POST["medium"]), true)))
{
?>

	<?php
	$medium=json_decode(base64_decode($_POST["medium"]), true);
	$source=$_POST["source"];
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
			$query.="$key='".json_encode($value0, JSON_UNESCAPED_UNICODE)."', ";
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
	$var0=$site["database"]->ci($query);
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