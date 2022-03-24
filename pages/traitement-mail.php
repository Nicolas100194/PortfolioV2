<?php
    require '../inc.php';

    //vérifications champs
    $errors = [];

    if(!array_key_exists('prenom', $_POST) || $_POST['prenom'] == ''){
        $errors['prenom'] = "Vous n'avez pas indiqué votre prénom";
    }

    if(!array_key_exists('nom', $_POST) || $_POST['nom'] == ''){
        $errors['nom'] = "Vous n'avez pas indiqué votre nom";
    }

    if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Vous n'avez pas indiqué votre adresse email";
    }

    if(!array_key_exists('message', $_POST) || $_POST['message'] == ''){
        $errors['message'] = "Vous n'avez pas indiqué votre message";
    }



    //si erreur renvoyer sur portfolio sinon envoyer email
    if(!empty($errors)){
        $_SESSION['errors'] = $errors;
        $_SESSION['inputs'] = $_POST;
        header('Location: ../index.php');
    } else {
        $_SESSION['success'] = 1;
        $message = $_POST['message'];
        $headers = 'FROM: site@local.dev';
        $message = verifyInput($message);
        $email = verifyInput($_POST['email']);
        $prenom = verifyInput($_POST['prenom']);
        $nom = verifyInput($_POST['nom']);
        mail('contact@local.dev', 'Formulaire de contact', $message, $headers);
        header('Location: ../index.php');
    }

    function verifyInput($var){
        $var = trim($var);
        $var = stripslashes($var);
        $var = htmlspecialchars($var);

        return $var;
    }