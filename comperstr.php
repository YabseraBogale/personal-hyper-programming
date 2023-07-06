<?php
// compare strings
$a = "hello";
$b = "hello";
$c = "hEllo";
$t=(boolean) strcmp($a, $b);
$f=(boolean) strcmp($a, $c);
// output: 0
echo  $t==false;
// output: 1
//echo $f;
?>
