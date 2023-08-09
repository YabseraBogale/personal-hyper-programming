<?php

$sql =new SQLite3('test.db');

$res=$sql->query('select * from name');

while($row=$res->fetchArray()){
    echo $row['name'];
}


?>