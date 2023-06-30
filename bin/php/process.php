<?php

$errors = [];

if (!empty($_POST)) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];

    if (empty($nom)) {
        $errors[] = 'Nom is empty';
    }
    if (empty($prenom)) {
        $errors[] = 'Prenom is empty';
    }

    if (empty($email)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }
    if (empty($telephone)) {
        $errors[] = 'Telephone is empty';
    } else if (!preg_match('/^[0-9]{10}+$/', $telephone)) {
        $errors[] = 'Telephone is invalid';
    }

    if (empty($sujet)) {
        $errors[] = 'Sujet is empty';
    }

    if (empty($message)) {
        $errors[] = 'Message is empty';
    }
    


    
}
if (!empty($errors)) {
    $allErrors = join('<br/>', $errors);
    $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
 }

?>