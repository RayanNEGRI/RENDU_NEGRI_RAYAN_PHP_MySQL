<?php

require 'database.php';

if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form'] == 'ajoutTweet'){  
    if ($_POST['contenu'] != '') {
        $nouveauTweet = [
            'contenu' => $_POST['contenu'],
        ];
        
        $requete = $database->prepare("INSERT INTO tweet (contenu) VALUES (:contenu)");
        
        if ($requete->execute($nouveauTweet) ) {
            echo 'Tweet bien ajouté';
        } else {
            echo 'Erreur lors de l ajout';
        }

    } else {
        echo "Formulaire incomplet";
    }
}

header('Location: http://localhost/Twitter_Rayan_NEGRI/Accueil.php');
exit();

?>