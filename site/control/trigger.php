<?php
$data["config"]["site"]["domain"]			= $server->domain();
$data["config"]["language"]					= $database->language;
$data["config"]["template"]					= $database->ofv("template"); 	$replace->template=$data["config"]["template"]["folder"];
$data["config"]["path"]						= $database->ofv("path"); 		$data["config"]["path"]=$replace->template($data["config"]["path"]); $file->path=$data["config"]["path"]; $replace->path=$data["config"]["path"];
?>

<?php
$data["navigation"]["top-navigation"]		= $database->ofv("top-navigation");
$data["navigation"]["bottom-navigation"]	= $database->ofv("bottom-navigation");
?>

<?php
$data["word"]								= $database->ofv("word");
?>

<?php
$data["corporate"]							= $database->ofv("corporate");
$data["corporate"]["brand-image"]			= $database->ofv("brand-image");
$data["corporate"]["social-media"]			= $database->ofv("social-media");
?>

<?php
$data["verification"]						= $database->ofv("verification");
?>

<?php
$data["measurement"]						= $database->ofv("measurement");
?>

<?php
$data["page"]								= $database->afl($server->link()); $data["page"]=$data["page"][0];
?>