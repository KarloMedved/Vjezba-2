<?php

$booksJson = file_get_contents('knjige.json');

$books = json_decode($booksJson, true);

foreach($books as $book) {
    if ($book['pages'] >500 ){
    echo "jako dugačka knjiga...\n";}
   
}

$books[] = [
    'title' => 'Laws of human nature',
    'author'=> 'Robert Greene',
    'pages' => 570,
    'available' => true
];

$booksJson = json_encode($books);

file_put_contents('knjige.json', $booksJson);
