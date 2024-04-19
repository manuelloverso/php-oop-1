<?php
include_once __DIR__ . '/Models/Production.php';
include_once __DIR__ . '/Models/Genre.php';
include_once __DIR__ . '/Models/Movie.php';
include_once __DIR__ . '/Models/Show.php';



$productions = [new Production('Lord of the Rings', 'English', 11 , new Genre('Adventure', 'A journey of four hobbits')) ];

array_push($productions, new Production('dune', 'English', 7 ,new Genre('Sci-fi', 'Paul Atreides predicts future')), new Production('Avatar', 'English', 9 , new Genre('Adventure', 'People wanna burn Pandora cause they have nothing to do')));
//echo ucwords('hello php Ok');
$interstellar_genres = [
    new Genre('Sci-fi', 'nice film '),
    new Genre('another genre ', 'as good as stated before')
];
$interstellar = new Production('interstellar','en',8,$interstellar_genres);
array_push($productions, $interstellar);

//var_dump($productions);
//$productions[0]->setVote();
foreach ($productions as $production){
    $production->setVote($production->vote);
    $production->setTitle($production->title);
};

$shrek = new Movie('Shrek', 'en', 8 , new Genre('fantasy', 'fantasy ok'), '100M', '2 hours');
$tlou = new Show('The last of us', 'en', 8 , new Genre('action', 'action ok'), 1);
$got = new Show('Game of Thrones', 'en' ,9 , new Genre('fantasy', 'Dragons are dangerous, but people even more'), 8);

$movies = [$shrek];
$shows = [$tlou, $got];

var_dump($shrek);
var_dump($tlou);
//array_push($productions , $new_movie);
//echo $productions[0]->vote;