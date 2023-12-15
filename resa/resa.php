<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./../node_modules/bootstrap/dist/css/bootstrap.css">
    <title>Sandwitchs</title>
</head>
<body>

<div class="container">
    <div class="alert alert-secondary">
        Veuillez renseigner votre commande
    </div>
    <form action="recap.php" method="post" enctype="multipart/form-data">
        <label for="name">Name</label>
        <input required id="name" type="text" name="name" class="form-control">
        <label for="firstname">Firstame</label>
        <input required id="firstname" name="firstname" type="text" class="form-control">
        <label for="nbSandwitch">Nombre de sandwitchs</label>
        <input required id="nbSandwitch" name="nbSandwitch" type="number" class="form-control">
        <label for="type">Type du sandwitch</label>
        <select required class="form-control" name="type" id="type">
            <option value="viande">Viande</option>
            <option value="escalope">Escalope de dinde</option>
            <option value="poulet">Poulet</option>
        </select>
        <label for="ingredients">Sélectionnez vos ingrédients</label>
        <input class="form-check-inline" type="checkbox" id="ingredients" name="ingredients[]" value="salade"/>salade
        <input class="form-check-inline" type="checkbox" name="ingredients[]" value="harissa"/>harissa
        <input class="form-check-inline" type="checkbox" name="ingredients[]" value="mayo"/>mayo</br>
        <label for="fichier">Carte Adhérent</label>
        <input id="fichier" name="adherentCard" type="file" class="form-control">
        <input type="submit" value="commander" class="btn btn-primary">
    </form>
</div>

</body>
</html>