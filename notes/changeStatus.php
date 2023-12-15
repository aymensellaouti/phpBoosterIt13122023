<?php
session_start();
$id = strip_tags($_GET['id']);
$status = strip_tags($_GET['status']);
if (isset($_SESSION['notes']) && ($status == 'TODO' || $status == 'INPROGRESS' || $status == 'DONE')) {
    $notes = $_SESSION['notes'];

    foreach ($notes as &$note) {
        if($note['id'] == $id) {
            $note['status'] = $status;
            $_SESSION['notes'] = $notes;
            break;
        }
    }
}
header('location:notes.php');
