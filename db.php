<?php
$productions = [new Production('Lord of the Rings', 'English', 11) ];

array_push($productions, new Production('dune', 'English', 7), new Production('Avatar', 'English', 9));
//echo ucwords('hello php Ok');

//var_dump($productions);
//$productions[0]->setVote();
foreach ($productions as $production){
    $production->setVote();
    $production->setTitle();
}

//echo $productions[0]->vote;