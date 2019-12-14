<?php
$array[]				= array("category"=>-1, "link-mask"=>"", "link"=>"./", "class"=>"fa fa-home");
$array[]				= array("category"=>-1, "link-mask"=>"Kurumsal", "link"=>"kurumsal", "class"=>"");
$array[]				= array("category"=>1, "link-mask"=>"Biz Kimiz?", "link"=>"kurumsal/biz-kimiz", "class"=>"");
$array[]				= array("category"=>1, "link-mask"=>"Müşteri Yorumları", "link"=>"kurumsal/müşteri-yorumları", "class"=>"");
$array[]				= array("category"=>-1, "link-mask"=>"Portfolyo", "link"=>"portfolyo", "class"=>"");
$array[]				= array("category"=>-1, "link-mask"=>"Blog", "link"=>"blog", "class"=>"");
$array[]				= array("category"=>-1, "link-mask"=>"İletişim", "link"=>"iletişim", "class"=>"");
?>

<pre><?php print_r(json_encode($array, JSON_UNESCAPED_UNICODE)); ?></pre>