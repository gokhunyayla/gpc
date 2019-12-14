<?php
if (isset($_POST["medium"]) && is_array(json_decode(base64_decode($_POST["medium"]) ,true)))
{
?>

	<?php
	$medium=json_decode(base64_decode($_POST["medium"]) ,true);
	?>

    <?php
	$var0=$site["database"]->cu($site["database"]->prefix."status='removed' where ".$site["database"]->prefix."id=".$medium["id"]);
	?>

    <?php
    if ($var0)
    {
    ?>

        <?php
        $array["response"]["status"]	= "success";
        $array["response"]["redirect"]	= $medium["redirect"];
        $array["response"]["message"]	= $data["word"]["successfuly-removed"];
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
        $array["response"]["message"]	= $data["word"]["unsuccessful-remove"];
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