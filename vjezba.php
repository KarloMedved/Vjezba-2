<?php

$a = 10;
$b = 20;
$c = 'Prva rijec';
$d = ' druga rijec';

echo 'a+b= ', $a + $b, "\n";
echo 'a-b= ', $a - $b, "\n";
echo 'a*b= ', $a * $b, "\n";
echo 'a/b= ', $a / $b, "\n";
echo 'a%b= ', $a % $b, "\n"; 

$f = $c . $d;

echo 'konkatenacija: ', $f, "\n";

echo $a += $b, "\n";

echo 'usporedba: ', var_dump($a > $b), "\n";

echo $a++, "\n";

echo $b--, "\n"; 