<?php 
    $x= 5;
    $y= 7;
    $somme = $x + $y;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .operation {
            border: red solid 2px;
            margin: 4px;
            font-size: 50px;
        }
    </style>
    <title>Somme</title>
</head>
<body>
    <p class="operation"><?= "$x + $y = $somme" ?></p>
</body>
</html>