<?php
$productions = [new Production('Lord of the Rings', 'English', 11 , new Genre('Adventure', 'A journey of four hobbits')) ];

array_push($productions, new Production('dune', 'English', 7 ,new Genre('Sci-fi', 'Paul Atreides predicts future')), new Production('Avatar', 'English', 9 , new Genre('Adventure', 'People wanna burn Pandora cause they have nothing to do')));
//echo ucwords('hello php Ok');

var_dump($productions);
//$productions[0]->setVote();
foreach ($productions as $production){
    $production->setVote();
    $production->setTitle();
}

//echo $productions[0]->vote;