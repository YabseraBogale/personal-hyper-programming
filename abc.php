<?php 

//expect 90 + 89 at end
$x = 89;
define ('ABC', $x+1);
$x += ABC;
$b=$x==(90+89);
echo $x;
?>
