<?php

$primeNumbers = [2, 3, 5, 7, 11];



$primeNumbers[] = 13;


//if (isset($primeNumbers[2])) 
{
    echo 'treci element je: ', ($primeNumbers[2]), "\n";
}
//else
{
    echo 'treći element u nizu ne postoji.';
} 

//var_dump($primeNumbers[2]);

//var_dump(count($primeNumbers));

//print_r($primeNumbers);

//rsort($primeNumbers);

//print_r($primeNumbers)
?>

<?php

$users = [
    'Marko' =>[
    'ime' => 'Marko', 
    'prezime' => 'Barka',
    'godine' => '10',
    'spol' => 'muško'
    ],
    'Ana' => [
        'ime' => 'Ana',
        'prezime' => 'Barka',
    'godine' => '12',
    'spol' => 'žensko'
    ]

];

var_dump($users);

unset($users[0]["spol"], $users[1]["spol"]);

var_dump($users);

$users[] = ['Karlo' => [
    'ime' => 'Karlo',
    'prezime' => 'Medved',
    'godine' => '2'
],
];

var_dump($users);









