<?php
$array["link-mask"]						= "Ölçümleme";
$array["structure"]						= array("measurement-edit");
$array["head"]["title"]					= "Ölçümleme Hoşgeldiniz";
$array["head"]["meta-description"]		= "Bu sayfanın açıklamasıdır. - en fazla 160 karakter olmalıdır.";
$array["head"]["meta-keywords"]			= "web, tasarım, kodlama, yazılım";
$array["head"]["meta-author"]			= "Ori Katalog";
$array["head"]["link-canonical"]		= "./";
$array["body"]["text"]["title"]			= "Sayfanın İçine Girildikten Sonra Görünen Başlığı";
$array["body"]["text"]["summary"]		= "Sayfa Özet Metnidir en fazla 200 karakter olmalıdır.";
$array["body"]["text"]["detail"]		= "Sayfanın detaylı açıklamasıdır. İsterseniz HTML kod gömebilirsiniz.";
$array["body"]["image"]					= array();
$array["body"]["video"]					= array();
?>

<pre><?php print_r(json_encode($array, JSON_UNESCAPED_UNICODE)); ?></pre>