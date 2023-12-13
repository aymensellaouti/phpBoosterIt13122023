<?php 
    include('generateMarkAndMention.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <title>Mention</title>
</head>
<body>
    <div class="container">
        <div class="alert alert-<?=$class?>">
            <?= $message ?>
        </div>
    </div>
    </body>
</html>