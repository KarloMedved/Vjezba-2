<?php

$int_var = 123;

$float_var = 0.123;

$str = "Tekstualni zadatak";

$bool = true;

echo $int_var, ' ' ,$float_var, ' ' ,$str, ' ' , var_export($bool), "\n";


const PI = 3.14;

echo PI;

$a = 100;
$b = &$a;
echo 'prvo a:  ', $b, "\n";

$a = 55;
echo 'drugo a:  ', $b, "\n";
echo "\n", 'Pravo $a je', ":  $a", "\n\n"; 

$a = 100;
$b = &$a;
echo 'prvo a:  ', $b, "\n";

?>