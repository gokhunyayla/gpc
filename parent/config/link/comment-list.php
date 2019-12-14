<?php
$array["link-mask"]						= "Yorumlar";
$array["structure"]						= array("comment-list");
$array["head"]["title"]					= "Yorumlar";
$array["head"]["meta-description"]		= "Bu sayfanın açıklamasıdır. - en fazla 160 karakter olmalıdır.";
$array["head"]["meta-keywords"]			= "web, tasarım, kodlama, yazılım, gokhun, gökhun";
$array["head"]["meta-author"]			= "Gökhun Yayla";
$array["head"]["link-canonical"]		= "./";
$array["body"]["text"]["title"]			= "Yorumlar";
$array["body"]["text"]["summary"]		= "Sayfa Özet Metnidir en fazla 200 karakter olmalıdır.";
$array["body"]["text"]["detail"]		= "Sayfanın detaylı açıklamasıdır. İsterseniz HTML kod gömebilirsiniz.";
$array["body"]["image"]					= array();
$array["body"]["video"]					= array();
?>

<pre><?php print_r(json_encode($array, JSON_UNESCAPED_UNICODE)); ?></pre>