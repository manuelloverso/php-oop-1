<?php
include_once __DIR__ . '/Models/Production.php';
include_once __DIR__ . '/Models/Genre.php';
include_once __DIR__ . '/Models/Movie.php';


$productions = [new Production('Lord of the Rings', 'English', 11 , new Genre('Adventure', 'A journey of four hobbits')) ];

array_push($productions, new Production('dune', 'English', 7 ,new Genre('Sci-fi', 'Paul Atreides predicts future')), new Production('Avatar', 'English', 9 , new Genre('Adventure', 'People wanna burn Pandora cause they have nothing to do')));
//echo ucwords('hello php Ok');

//var_dump($productions);
//$productions[0]->setVote();
foreach ($productions as $production){
    $production->setVote($production->vote);
    $production->setTitle($production->title);
};

$new_movie = new Movie('Shrek', 'en', 8 , new Genre('fantasy', 'fantasy ok'), '100M', '2 hours');
var_dump($new_movie);
//echo $productions[0]->vote;