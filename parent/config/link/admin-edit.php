<?php
$array["link-mask"]						= "Bilgilerim";
$array["structure"]						= array("admin-edit");
$array["head"]["title"]					= "Bilgilerim";
$array["head"]["meta-description"]		= "Bu sayfanın açıklamasıdır. - en fazla 160 karakter olmalıdır.";
$array["head"]["meta-keywords"]			= "web, tasarım, kodlama, yazılım";
$array["head"]["meta-author"]			= "Ori Katalog";
$array["head"]["link-canonical"]		= "./";
$array["body"]["text"]["title"]			= "Bilgilerim";
$array["body"]["text"]["summary"]		= "Sayfa Özet Metnidir en fazla 200 karakter olmalıdır.";
$array["body"]["text"]["detail"]		= "Sayfanın detaylı açıklamasıdır. İsterseniz HTML kod gömebilirsiniz.";
$array["body"]["image"]					= array();
$array["body"]["video"]					= array();
?>

<pre><?php print_r(json_encode($array, JSON_UNESCAPED_UNICODE)); ?></pre>