<?php

require 'database.php';

if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form'] == 'ajoutRecette'){  
        $nouvelleRecettes = [
            'titre' => $_POST['titre'],
            'description' => $_POST['description'],
            'difficulte' => $_POST['difficulte'],
            'regimeSociale' => $_POST['regimeSociale'],
            'tempsTotale' => $_POST['tempsTotale'],
        ];


        $requete = $database->prepare("INSERT INTO recettes (titre,description,difficulte,regimeSociale,tempsTotale) VALUES (:titre,:description,:difficulte,:regimeSociale,:tempsTotale)");
        
        if ($requete->execute($nouvelleRecettes) ) {
            echo 'Tweet bien ajouté';
        } else {
            echo 'Erreur lors de l ajout';
        }

    } else {
        echo "Formulaire incomplet";
    }


header('Location: http://localhost/Ex_Recettes_RAYAN_NEGRI/AccueilRecettes.php');
exit();

?>