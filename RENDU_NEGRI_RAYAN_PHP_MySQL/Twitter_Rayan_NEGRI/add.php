<?php

require 'database.php';

if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form'] == 'ajoutUser'){  
    if ($_POST['nom'] != '' && $_POST['email'] != '') {
        $nouvelUser = [
            'nom' => $_POST['nom'],
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ];
        
        $requete = $database->prepare("INSERT INTO user (nom, email, password) VALUES (:nom, :email, :password)");
        
        if ($requete->execute($nouvelUser) ) {
            echo 'User bien ajouté';
        } else {
            echo 'Erreur lors de l ajout';
        }

    } else {
        echo "Formulaire incomplet";
    }
}

header('Location: http://localhost/Twitter_Rayan_NEGRI/Compte.php');
exit();

?>