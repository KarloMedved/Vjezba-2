<?php

//function makeCoffee($type = 'espresso')
//{
   // echo "Making a cup of  $type. \n";
//}

//makeCoffee('cappuccino');
//makeCoffee();
//makeCoffee(null);

//function makeYogurt($container, $flavour = 'rasberry', $style = 'Greek')
//{
//    return "Making a $container of $flavour $style yogurt. \n";
//}
//echo makeYogurt('bowl');

//function sum(...$numbers)
//{//
 //   var_dump($numbers);
//}

//echo sum (1, 2, 3, 4, 5), "\n";


function osoba($name, $surname) {

    $spojeno = $name . " " . $surname;
    $spojeno = strtoupper($spojeno);
    return $spojeno;
}

$rezultat = osoba("pero", "peric");
echo $rezultat, "\n"; 