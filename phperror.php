<?php
// assign value to variable
$car = 'Porsche';
// print variable value
// output: 'Before unset(), my car is a Porsche'
echo "Before unset(), my car is a $car";
// destroy variable
unset($car);
// print variable value
// this will generate an 'undefined variable' error
// output: 'After unset(), my car is a '
echo "After unset(), my car is a $car";
?>
