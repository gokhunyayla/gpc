<?php
$array["form"][]			= array("variable"=>"not-seen", "name"=>"Görülmedi");
$array["form"][]			= array("variable"=>"removed", "name"=>"Kaldırıldı");
$array["form"][]			= array("variable"=>"completed", "name"=>"Tamamlandı");
$array["form"][]			= array("variable"=>"appointed", "name"=>"Randevu Verildi");

$array["link"][]			= array("variable"=>"not-live", "name"=>"Yayında Değil");
$array["link"][]			= array("variable"=>"removed", "name"=>"Kaldırıldı");
$array["link"][]			= array("variable"=>"live", "name"=>"Yayında");

$array["user"][]			= array("variable"=>"active", "name"=>"Aktif");
$array["user"][]			= array("variable"=>"passive", "name"=>"Pasif");

$array["comment"][]			= array("variable"=>"read", "name"=>"Okundu");
$array["comment"][]			= array("variable"=>"removed", "name"=>"Silindi");
$array["comment"][]			= array("variable"=>"not-seen", "name"=>"Okunmadı");
$array["comment"][]			= array("variable"=>"approved", "name"=>"Onaylandı");

$array["domain"][]			= array("variable"=>"live", "name"=>"Yayında");
$array["domain"][]			= array("variable"=>"not-live", "name"=>"Yayından Kaldırılmış!");

?>

<pre><?php print_r(json_encode($array, JSON_UNESCAPED_UNICODE)); ?></pre>