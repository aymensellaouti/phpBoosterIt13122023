<?php
$infos = get_defined_constants();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Mes constantes</title>
</head>
<body>
    <table>
        <tr>
            <th>Nom de la constante</th>
            <th>Valeur de la constante</th>
        </tr>

        <!-- 
            Boucler sur les constantes de mon tableau infos
            $infos sera de la form $nomDeLaconsta => $valeurDeLaConstante
        -->
        <?php foreach( $infos as $constanteName => $constanteValue ): ?>
            <tr>
                <td><?=$constanteName?></td>
                <td><?=$constanteValue ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>