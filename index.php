<?php 
include_once __DIR__ . '/Models/Production.php';
include_once __DIR__ . '/db.php';

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