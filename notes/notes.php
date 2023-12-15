<?php
    // On doit récupérer notre session 
    session_start();
    if (!isset($_SESSION["notes"])) {
        // Une session vide (1er accès )
        $notes = [];
    } else {
        // Une session qui contient des notes 
        $notes = $_SESSION["notes"];
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./../node_modules/bootstrap/dist/css/bootstrap.css">
    <title>Mes notes</title>
</head>
<body>

<div class="container">
    <?php include_once 'navbar.php'?>
    <div class="alert alert-secondary">
        Mes notes
    </div>
    <?php if (count($notes) == 0) {?>
        <div class="alert alert-danger">
            Vous n'avez encore aucune note
        </div>
        <?php } else { ?>
            <ol class="list-group">
                <?php foreach ($notes as $note): 
                $bgc = '';
                    switch ($note['status']):
                        case 'TODO': $bgc = 'light'; break;
                        case 'INPROGRESS': $bgc = 'info'; break;
                        case 'DONE': $bgc = 'success'; break;
                    endswitch;    
                ?>
                    <li class="list-group-item list-group-item-<?=$bgc ?>">
                        <?=$note['name']?> : <?=$note['description']?>
                    </li>
                <?php endforeach ?>
            </ol>
        <?php } ?>
</div>

</body>
</html>