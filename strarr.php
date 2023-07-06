<?php

    if(!isset($_POST['submit'])){
        
?>

<form method="post" action="strarr.php">
    <p> Enter First Name <input type="text" name="first"></p>
    <input type="submit" name="submit" value="submit">
</form>

<?php
    }
    else{
        $firstName=$_POST['first'][0];
        echo "First Letter of first name $firstName";
    }
?>