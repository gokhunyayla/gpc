<?php
require("framework/class.form.php");		$form		= new form;
require("framework/class.cryption.php");	$cryption	= new cryption;
require("framework/class.xml.php");			$xml		= new xml;
require("framework/class.json.php");		$json		= new json;
require("framework/class.ftp.php");			$ftp		= new ftp;
require("framework/class.exception.php");
require("framework/class.smtp.php");
require("framework/class.phpmailer.php");	$email		= new PHPMailer\PHPMailer\PHPMailer();
require("framework/class.file.php");		$file		= new file;
require("framework/class.folder.php");		$folder		= new folder;
require("framework/class.server.php");		$server		= new server; 		$server->permalink=$form->get("permalink"); $server->link();
require("framework/class.location.php");	$location	= new location; 	$location->ip=$server->ip();
require("framework/class.datetimes.php");	$datetimes	= new datetimes;
require("framework/class.variable.php");	$variable	= new variable;
require("framework/class.cookie.php");		$cookie		= new cookie;
require("framework/class.session.php");		$session	= new session;
require("framework/class.database.php");	$database	= new database; 	$database->server=$database_server; $database->username=$database_username; $database->password=$database_password; $database->name=$database_name; $database->prefix=$database_prefix; $database->language=$cookie->get("language", "tr");
require("framework/class.api.php");			$api		= new api;
require("framework/class.replace.php");		$replace	= new replace;		$replace->language=$database->language;
?>