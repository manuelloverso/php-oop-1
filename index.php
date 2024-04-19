<?php 

include_once __DIR__ . '/db.php';

//echo $productions[0]->genre->name;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>OOP 1</title>
</head>
<style>
    body{
        font-family: sans-serif;
    }
</style>
<body>
    <div class="container my-5">

        <h1 class="mb-3">Productions</h1>
        <div class="row row-cols-3 gy-3">
            <?php foreach ($productions as $production) : ?>
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title"><?= $production->title ?></h3>
                            <p><strong>Vote:</strong> <?= $production->vote ?></p>
                            <p><strong>Language: </strong><?= $production->language ?></p>
                            <h5>Genres:</h5>
                            <p><strong>- Name: </strong><?= $production->genre->name ?></p>
                            <p><strong>- Description: </strong><?= $production->genre->description ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>    
        </div>
    </div>
</body>
</html>