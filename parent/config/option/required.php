<?php
$array["link"][]			= array("variable"=>"not-requreid", "name"=>"Zorunlu Değil");
$array["link"][]			= array("variable"=>"required", "name"=>"Zorunlu");
?>

<pre><?php print_r(json_encode($array, JSON_UNESCAPED_UNICODE)); ?></pre>