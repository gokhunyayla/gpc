<?php
if (isset($_POST["source"]) && isset($_POST["medium"]) && is_array(json_decode(base64_decode($_POST["medium"]) ,true)))
{
?>

	<?php
	$medium=json_decode(base64_decode($_POST["medium"]) ,true);
	$source=$_POST["source"];
	?>

	<?php
	$var0=$site["database"]->ls($site["database"]->prefix."id=".$medium["id"]);
	?>

	<?php
	if ($var0==-1)
	{
	?>

		<?php
        $array["response"]["status"]	= "danger";
        $array["response"]["redirect"]	= -1;
        $array["response"]["message"]	= $data["word"]["link-cannot-be-found"];
        $array["response"]["data"]		= -1;
        ?>

	<?php
	}
	else
	{
	?>

		<?php
		if (isset($var0[0]["comment"][$medium["key"]]))
		{
		?>

			<?php
			$var0[0]["comment"][$medium["key"]]=$source["comment"][$medium["key"]];
			?>

		<?php
		}
		else
		{
		?>

			<?php
			$array["response"]["status"]	= "danger";
			$array["response"]["redirect"]	= -1;
			$array["response"]["message"]	= $data["word"]["comment-cannot-be-found"];
			$array["response"]["data"]		= -1;
			?>

		<?php
		}
		?>

	<?php
	}
	?>

    <?php
	$var1=$site["database"]->lu($site["database"]->prefix."comment_".$site["database"]->language."='".json_encode($var0[0]["comment"], JSON_UNESCAPED_UNICODE)."' where ".$site["database"]->prefix."id=".$medium["id"]);
	?>

    <?php
    if ($var1)
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