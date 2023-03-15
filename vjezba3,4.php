<?php

function increaseByTen($a)
{
    $a += 10;

    return $a;
}

$a = 5;

increaseByTen($a);

echo $a, "\n";