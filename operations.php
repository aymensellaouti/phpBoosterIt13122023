<?php 
$input1 = 23;
$input2 = 48;
$operation = '-';

switch ($operation) {
    case '+':
        $result = $input1 + $input2;
        $message = "$input1 $operation $input2 = $result";
        break;
    case '-':
        $result = $input1 - $input2;
        $message = "$input1 $operation $input2 = $result";
        break;
    case '*':
        $result = $input1 * $input2;
        $message = "$input1 $operation $input2 = $result";
        break;
    case '/':
        if ($input2 == 0) {
            $message = 'La division par 0 est impossible';
        } else {
            $result = $input1 / $input2;
        }
        break;
    default:
        $message = 'Opérateur inconnu, merci de choisir entre ces 4 opérateurs : +, -, *, /';
        break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <title>Opertaion avec switch</title>
</head>
<body>
    <div class="container">
        <div class="alert alert-info">
            <?= $message ?>
        </div>
    </div>    
</body>
</html>
