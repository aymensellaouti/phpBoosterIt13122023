<?php $levelTable = 30 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Table de multiplication</title>
</head>
<body>
    <table>
        <!-- 1ére ligne c'est l'entete du tableau -->
        <tr class="jaune">
            <td>X</td>
            <?php for($i = 1; $i <= $levelTable ; $i++): ?>
                <td><?= $i ?></td>
            <?php endfor ?>
        </tr>
        <!-- Le reste du tableau -->
        <?php for($i = 1; $i <= $levelTable ; $i++): ?>        
            <tr>
                <td class="jaune"><?= $i ?></td>
                <?php for($j = 1; $j <= $levelTable ; $j++): ?>
                    <td class="rouge"><?= $i * $j ?></td>
                <?php endfor ?>
            </tr>
        <?php endfor ?>
    </table>
</body>
</html>
