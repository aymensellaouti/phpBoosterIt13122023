<?php
// TODOS :
// Définir le nombre de notes 
$nbNotes = random_int(4,20);
// Définir et remplir un tableau de notes (notes: 0 et 20)
$notes = [];
$min = 20; 
$max = 0;
for($i = 0; $i < $nbNotes; $i++) {
    // ajoute à la fin du tableau
    $notes[] = random_int(0,20);
    if ($min > $notes[$i]) {
        $min = $notes[$i];
    }
    if ($max < $notes[$i]) {
        $max = $notes[$i];
    }
}
// Le nombre d'éléments du tableau de notes
// Le min et le max
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Notes</title>
</head>
<body>
    <table>
        <?php foreach($notes as $note): ?>
            <tr>
                <td><?= $note ?></td>
            </tr>
        <?php endforeach ?>
    </table>
    <div>
        <p>Nombre de notes : <?=$nbNotes ?></p>
        <p>La pire des notes  : <?= $min ?></p>
        <p>La meilleure des notes  : <?= $max ?></p>
    </div>
</body>
</html>