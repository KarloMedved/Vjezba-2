<?php

$a = 15;
$b = 10;
$c = 5;

if (($b > $a && $b < $c) || ($b < $a && $b > $c)) {
    echo "Uvjet je istinit\n";
} elseif (false) {
    echo "Uvjet je lažan\n";
}