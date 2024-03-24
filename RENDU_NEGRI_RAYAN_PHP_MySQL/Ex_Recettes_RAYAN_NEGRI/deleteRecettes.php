<?php

require 'database.php';




if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form'] == 'supprimerRecettes'){
    $recettesASupprimer = [
        'id' => $_POST['suppr']
    ];

    $requete = $database->prepare('DELETE FROM `recettes` WHERE id = :id');
    $requete->execute($recettesASupprimer);
}

header('Location: http://localhost/Ex_Recettes_RAYAN_NEGRI/AccueilRecettes.php');
exit();

?>

