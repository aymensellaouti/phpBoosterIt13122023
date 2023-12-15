<!-- 

    1- Cette page elle permet de spécifiez les préférences 
    2- Dans updateSettings, nous allons traiter le post 
        2-1 Récupérer les données
        2-2 Mettre à jour les cookies
    3- Page de notre site : 
        3-1 On va récupérer les préférences depuis les cookies 
        3-2 On applique les préférences sur nos paragraphes 


 -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./../node_modules/bootstrap/dist/css/bootstrap.css">
    <title>Settings</title>
</head>
<body>

    <div class="container">
        <?php include 'navbar.php' ?>
        <div class="alert alert-secondary">
            Veuillez renseigner votre couleur de texte et votre police favorite pour la plateforme
        </div>
        <form action="updateSettings.php" method="post">
            <label for="color">Couleur</label>
            <input required id="color" type="color" name="color" class="form-control">
            <label for="size">
                taille
            </label>
            <input required id="size" type="number" name="size" class="form-control">
            <label for="font">Font</label>
            <select required id="font" name="font" class="form-control">
                <option value="garamond">garamond</option>
                <option value="arial">arial</option>
                <option value="verdana">verdana</option>
            </select>
            <input type="submit" value="confirmer" class="btn btn-primary">
        </form>
    </div>

</body>

</html>