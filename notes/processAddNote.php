<?php 

// On ouvre la session 
session_start();        
    if(isset($_POST['name']) && $_POST['description']) {
        // récupérer les infos du formulaire    
        $name = htmlspecialchars($_POST['name']);
        $description = htmlspecialchars($_POST['description']);
        if (!isset($_SESSION["notes"])) {
            // Une session vide (1er accès )
            $notes = [];
        } else {
            // Une session qui contient des notes 
            $notes = $_SESSION["notes"];
        }
        // On crée la nouvelle note
        $note = [
            'id' => uniqid(),
            'name' => $name,
            'description' => $description,
            'status' =>'TODO',
        ];
        // On l'ajoute à la session 
        $notes[]= $note;
        $_SESSION['notes'] = $notes;
    }
    header('location:notes.php');
