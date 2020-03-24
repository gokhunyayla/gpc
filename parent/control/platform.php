<?php
$site["database"]	= new database; $site["database"]->server=$data["site"]["database"]["server"]; $site["database"]->username=$data["site"]["database"]["username"]; $site["database"]->password=$data["site"]["database"]["password"]; $site["database"]->name=$data["site"]["database"]["name"]; $site["database"]->prefix=$data["site"]["database"]["prefix"]; $site["database"]->language=$cookie->get("language", "tr");
?>

<?php
$site["ftp"]	    = new ftp; $site["ftp"]->server=$data["site"]["ftp"]["server"]; $site["ftp"]->username=$data["site"]["ftp"]["username"]; $site["ftp"]->password=$data["site"]["ftp"]["password"]; $site["ftp"]->port=$data["site"]["ftp"]["port"]; $site["ftp"]->folder=$data["site"]["ftp"]["folder"];
?>