<?php

$properties =[
    'firstname' =>'Tom',
    'surname' => 'Riddle',
     'house' =>  'Slytherin',
] ;

var_dump(
    count($properties)
);



?>

<?php

$imeGrupe = 'dev23';
$grupa = [
    "naziv" => "$imeGrupe",
    "brojPolaznika" => 21,
    "dvorana" => null
];


$grupa['predavac'] = 'Ivan Mandić'; 
$grupa['brojPolaznika'] = 22;

unset($grupa['brojPolaznika']);
unset($niz[1]);
$niz[] = 'Lucija';

//var_dump(isset($grupa['naziv']) );
