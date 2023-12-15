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
                    <div class="card col-md-4 ">
            <div class="card-header">
                <?= $note['name'] ?>
            </div>
            <div class="card-body <?="bg-$bgc"?>">
                <h5 class="card-title"><?= $note['status'] ?></h5>
                <p class="card-text"><?= $note['description'] ?></p>
                <?php if ($note['status'] != 'DONE') {?>
                <a href="changeStatus.php?id=<?= $note['id'] ?>&status=DONE" class="btn btn-success">Finalisé</a>
                <?php } ?>
                <?php if ($note['status'] != 'INPROGRESS') {?>
                <a href="changeStatus.php?id=<?= $note['id'] ?>&status=INPROGRESS" class="btn btn-info">En cours</a>
                <?php } ?>
                <?php if ($note['status'] != 'TODO') {?>
                <a href="changeStatus.php?id=<?= $note['id'] ?>&status=TODO" class="btn btn-light">Todo</a>
                <?php } ?>
            </div>
        </div>
                <?php endforeach ?>
            </ol>
        <?php } ?>
</div>

</body>
</html>