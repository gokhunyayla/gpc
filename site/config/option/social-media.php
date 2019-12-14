<?php
$array[]				= array("name"=>"Facebook", "link"=>"https://facebook.com/blablabla", "class"=>"fa fa-facebook");
$array[]				= array("name"=>"Instagram", "link"=>"https://istagram.com/blablabla", "class"=>"fa fa-instagram");
$array[]				= array("name"=>"Youtube", "link"=>"https://youtube.com/blablabla", "class"=>"fa fa-youtube");
$array[]				= array("name"=>"LinkedIn", "link"=>"https://linkedin.com/in/blablabla", "class"=>"fa fa-linkedin");
?>

<pre><?php print_r(json_encode($array, JSON_UNESCAPED_UNICODE)); ?></pre>