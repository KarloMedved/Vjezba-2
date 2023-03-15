<?php


function broj($number){
    
   static $a;

   $a += $number;
   return $a;

}

$broj = 'broj';

echo($broj(rand(1,10))),"\n";
echo($broj(rand(1,10))),"\n";
echo($broj(rand(1,10))),"\n";
echo($broj(rand(1,10))),"\n";
echo($broj(rand(1,10))),"\n";