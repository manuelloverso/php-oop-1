<?php 
include_once __DIR__ . '/Models/Production.php';
include_once __DIR__ . '/Models/Genre.php';
include_once __DIR__ . '/db.php';

//echo $productions[0]->genre->name;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 1</title>
</head>
<style>
    body{
        font-family: sans-serif;
    }
</style>
<body>
    <h1>Productions</h1>
    <ol>
        <?php foreach ($productions as $production) : ?>
            <li><?php echo "Title--> $production->title || Vote--> $production->vote || Language--> $production->language || Genre Name--> {$production->genre->name} || Description--> {$production->genre->description} " ?></li>
        <?php endforeach; ?>    
    </ol>
</body>
</html>