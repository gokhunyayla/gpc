<?php
$data["config"]["site"]["domain"]			= $server->domain();
$data["config"]["language"]					= $database->language;
$data["config"]["template"]					= $database->ofv("template"); 	$replace->template=$data["config"]["template"]["folder"];
$data["config"]["path"]						= $database->ofv("path"); 		$data["config"]["path"]=$replace->template($data["config"]["path"]); $file->path=$data["config"]["path"]; $replace->path=$data["config"]["path"];
?>

<?php
$data["navigation"]["right-top-navigation"]	= $database->ofv("right-top-navigation");
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

<?php
$server->login								= $database->afv("login");
$server->nf									= $database->afv("404");
$server->lc									= $database->afv("language-change");
?>

<?php
$data["user"]								= $session->get("user"); $database->member=$data["user"];
?>

<?php
$data["site"]								= $database->sfd($domain); $data["site"];
?>

<?php
$data["status"]								= $database->ofv("status");
?>

<?php
$data["required"]							= $database->ofv("required");
?>

<?php
$data["dates"]["start-date"]				= $form->post("start-date", date("Y-m-d"));
$data["dates"]["end-date"]					= $form->post("end-date", date("Y-m-d"));
?>

<?php
$server->uec($data["user"], $data["page"]);
?>

<?php
if ($data["user"]!=-1)
{
?>

	<?php
	$data["navigation"]["left-navigation"]		= $data["site"]["navigation"][$data["user"]["property"]["group"]]; 
	?>

<?php
}
?>



