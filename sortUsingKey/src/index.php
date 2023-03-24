<?php
$a=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
ksort($a);
foreach ($a as $key => $value) {
    echo "key=$key,Value=$value<br>";
}
?>