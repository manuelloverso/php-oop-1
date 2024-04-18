<?php 
include_once __DIR__ . '/Models/Production.php';

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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 1</title>
</head>
<body>
    <h1>Productions</h1>
    <ol>
        <?php foreach ($productions as $production) : ?>
            <li><?= "Title: $production->title ,Vote: $production->vote , Language: $production->language" ?></li>
        <?php endforeach; ?>    
    </ol>
</body>
</html>