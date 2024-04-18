<?php 
include_once __DIR__ . '/Models/Production.php';

$productions = [new Production('Lord of the Rings', 'english', 9) ];
var_dump($productions);

echo $productions[0]->language;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 1</title>
</head>
<body>
    
</body>
</html>