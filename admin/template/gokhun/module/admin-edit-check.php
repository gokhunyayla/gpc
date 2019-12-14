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
		$key=$database->prefix.$key0;
		?>

		<?php
		if ($key0=="password")
		{
		?>
			
			<?php
			$value0=base64_encode($value0);
			?>

		<?php
		}
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
	$query=rtrim($query, ", "); $query.=" where ".$database->prefix."id=".$data["user"]["id"];
	?>
	
    <?php
	$var0=$database->uu($query);
	?>

    <?php
    if ($var0)
    {
    ?>

		<?php
		$var1=$database->us($data["user"]["id"]);
		?>

		<?php
		if ($var1==-1)
		{
		?>

			<?php session_destroy(); ?>

			<?php
			$array["response"]["status"]	= "danger";
			$array["response"]["redirect"]	= -1;
			$array["response"]["message"]	= $data["word"]["miss-update"];
			$array["response"]["data"]		= -1;
			?>

		<?php
		}
		else
		{
		?>

			<?php
			$session->set("user", $var1[0]);
			?>

			<?php
			$array["response"]["status"]	= "success";
			$array["response"]["redirect"]	= $medium["redirect"];
			$array["response"]["message"]	= $data["word"]["successfuly-updated"];
			$array["response"]["data"]		= $var0;
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