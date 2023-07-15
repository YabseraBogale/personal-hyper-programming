<?php
$arr=$_POST['artists'];
if(empty($arr)){
    echo "Empty";
}
for($i=0;$i<count($arr);$i++){
    echo '<br>' .$arr[$i];
}

?>