<?php
$array["pop3-server"]			= "localhost";
$array["pop3-username"]			= "";
$array["pop3-password"]			= "";
$array["pop3-port"]				= 110;
$array["pop3-secure"]			= "ssl";

$array["smtp-server"]			= "localhost";
$array["smtp-username"]			= "";
$array["smtp-password"]			= "";
$array["smtp-port"]				= 25;
$array["smtp-secure"]			= "ssl";
?>

<pre><?php print_r(json_encode($array, JSON_UNESCAPED_UNICODE)); ?></pre>