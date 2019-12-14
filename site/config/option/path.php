<?php
$array["assets"]				= "template/{{template}}/assets";
$array["module"]				= "template/{{template}}/module";
$array["media"]					= "media/{{language}}";
?>

<pre><?php print_r(json_encode($array, JSON_UNESCAPED_UNICODE)); ?></pre>