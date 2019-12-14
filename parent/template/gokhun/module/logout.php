<?php
if (isset($_POST))
{
?>

	<?php
	session_destroy();
	?>

	<?php
    $array["response"]["status"]	= "success";
    $array["response"]["redirect"]	= $database->afv("login");
    $array["response"]["message"]	= $data["word"]["logout-successful"];
    $array["response"]["data"]		= -1;
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