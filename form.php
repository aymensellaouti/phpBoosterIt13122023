<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- action permet de définir la page 
    vers laquelle je veux envoyer mes données  -->
    <!-- method permet de spécifier 
    comment envoyer les données  -->
     <form action="processForm.php" method="post">
        name : <input type="text" name="name">
        age : <input type="number" name="age">
        <select name="hobbyCulinaire">
            <option value="burger">Un bon burger</option>
            <option value="salade">Pour les végétarien</option>
        </select>
        <input name="sport[]" type="checkbox" value="foot">Foot
        <input name="sport[]" type="checkbox" value="hand">hand
        <input name="sport[]" type="checkbox" value="natation">natation
        <input type="submit" value="envoyer">
     </form>   
</body>
</html>