<?php

function getArrayElement($array, $key)
{
    return $array[$key];
    
}

$myArray = ['foo', 'bar', 'baz' ];
$element = getArrayElement($myArray, 1);
$element = 'xy';

var_dump($myArray[1]);