<!-- 
    3- Page de notre site : 
        3-1 On va récupérer les préférences depuis les cookies 
        3-2 On applique les préférences sur nos paragraphes 
 -->
 <!doctype html>
<html lang="en">
<!-- 3 types de styles --
    1- un fichiuer externe .css (3)
    2- Une balise style (2)
    3- attribut style d'une balise (1)
-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./../node_modules/bootstrap/dist/css/bootstrap.css">
    <style>
        p {
            <?php if (isset($_COOKIE['color'])) {?>
                color: <?=$_COOKIE['color'] ?> ; 
            <?php } ?>
            <?php if (isset($_COOKIE['size'])) {?>
                font-size: <?=$_COOKIE['size'].'px' ?>;  
            <?php } ?>
            <?php if (isset($_COOKIE['font'])) {?>
                font-family: <?=$_COOKIE['font'] ?>;  
            <?php } ?>
        }
    </style>
    <title>Accueil</title>
</head>
<body>

    <div class="container">
        <?php include 'navbar.php' ?>
        
        <p>Bonjour Booster IT</p>
    </div>

</body>

</html>