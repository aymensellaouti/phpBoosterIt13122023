<?php 

// récupérer les données envoyées du formulaire
$commande = $_POST;
// les échaper (htmlspecialchars)
// TODO redirection à la page de réservation si informations manquantes
if (!isset($commande['name']) && !isset($commande['firstname']) && !isset($commande['type']) && !isset($commande['nbSandwitch']) && !isset($commande['ingredients'])) {
    header('location:resa.php');
    exit(0);
}
$name = htmlspecialchars($commande['name']) ?? '';
$firstname = htmlspecialchars($commande['firstname'])  ?? '';
$type = htmlspecialchars($commande['type'])  ?? '';
$nbSandwitch = htmlspecialchars($commande['nbSandwitch'])  ?? '';
$ingredients = $commande['ingredients']  ?? [];



// TODO 1- récupérer la carte 
    // S'il existe 
    // récupérer : transférer le fichier  + nom unique 
    $file = $_FILES['adherentCard'];
    if ($file && $file['size'] > 0) {
        // générer un nom unique 
        $newFileName = uniqid().$file['name'];
        // On définit le chemin du fichier
        $filePath = "uploads/$newFileName";
        // on déplace le file envoyé par l'utilisateur vers notre dossier d'uploads 
        move_uploaded_file($file["tmp_name"], $filePath);
        $commande['carteAdherent']=$filePath;
    }
// On a deux cas pour le calcul
    // 1er quantité < 10 prix total  = 4 *nb 
    // 1éme quantité >= 10 prix total  = 4 *nb + calcule la remise(10%) et on l'affiche  
$prixTotal = $nbSandwitch * 4;
    // Les afficher dans notre page html 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../node_modules/bootstrap/dist/css/bootstrap.css">
    <title>Récap</title>
</head>
<body>
    <div class="container">
        <div class="alert alert-info">
            Récap de votre commande
        </div>
        <div class="alert alert-primary">
            <ol class="list-group">
                <li class="list-group list-group-item">
                    Client : <?=$firstname.' '.$name ?>
                </li>
                <li class="list-group list-group-item">
                    Sandwitch : <?=$type ?>
                </li>
                <li class="list-group list-group-item">
                    quantité : <?=$nbSandwitch ?>
                </li>
                <li class="list-group list-group-item">
                   <ol>
                    Vous avez choisi les ingrédients suivants 
                    <?php foreach ($ingredients as $ingredient): ?>
                        <li><?= $ingredient ?></li>
                    <?php endforeach ?>
                   </ol>
                </li>
                <li class="list-group list-group-item">
                    Prix Total: <?=$prixTotal ?>
                </li>
                <?php if($nbSandwitch >= 10) { ?>
                    <li class="list-group list-group-item">
                        Remise: <?=$prixTotal * 0.1 ?>
                    </li>
                    <li class="list-group list-group-item">
                        Prix après Remise: <?=$prixTotal * 0.9 ?>
                    </li>
                <?php } ?>
                <?php if(isset($file)) { ?>
                    <li class="list-group list-group-item">
                        <embed src="<?=$filePath ?>" width="100%" height="500" alt="carte adherent">
                    </li>
                <?php } ?>
            </ol>
        </div>
    </div>
</body>
</html>