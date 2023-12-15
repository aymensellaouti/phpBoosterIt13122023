<?php 

if (isset($_POST['sondage'])) {
    setcookie('sondage', $_POST['sondage'], time() + 60 * 2);
} else {
    header('Location:sondage.php');
}

header('Location:sondage.php');