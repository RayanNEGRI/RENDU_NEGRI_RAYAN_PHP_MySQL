<?php

require 'database.php';




if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form'] == 'supprimerTweet'){
    $tweetASupprimer = [
        'idTweet' => $_POST['suppr']
    ];

    $requete = $database->prepare('DELETE FROM `tweet` WHERE idTweet = :idTweet');
    $requete->execute($tweetASupprimer);
}

header('Location: http://localhost/Twitter_Rayan_NEGRI/Accueil.php');
exit();

?>

