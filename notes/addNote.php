<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./../node_modules/bootstrap/dist/css/bootstrap.css">
    <title>Ajouter une note</title>
</head>
<body>

<div class="container">
    <?php include_once 'navbar.php'?>
    <div class="alert alert-secondary">
        Ajouter une note
    </div>
    <form action="processAddNote.php" method="post">
        <label for="name">Name</label>
        <input required id="name" type="text" name="name" class="form-control">
        <label for="description">Description</label>
        <input required id="description" name="description" type="text" class="form-control">
        <input type="submit" value="ajouter" class="btn btn-primary">
    </form>
</div>

</body>
</html>