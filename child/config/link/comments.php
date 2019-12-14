<?php
$array[]						= array("status"=>"read", "name"=>"Abdurrezzak", "comment"=>"Site yaptınız mı?", "insert-date"=>date("Y-m-d H:i:s"), "answer"=>array(array("not-seen", "name"=>"Sinan", "comment"=>"Cevabı ben yazdım", "insert-date"=>date("Y-m-d H:i:s"))));
?>

<pre><?php print_r(json_encode($array, JSON_UNESCAPED_UNICODE)); ?></pre>