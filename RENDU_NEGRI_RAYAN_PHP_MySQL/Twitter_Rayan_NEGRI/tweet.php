<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $tweetARechercher = $_GET['tweetContenu'];
    
    // Connexion à la base de données
    $bdd = new PDO('mysql:host=localhost;dbname=twitter', 'root', 'root');

    // Préparation de la requête SQL
    $requete = $bdd->prepare('SELECT tweet.*, user.* FROM `tweet` INNER JOIN `user` ON tweet.user_id = user.id WHERE tweet.contenu = :contenu');

    // Exécution de la requête avec le paramètre de liaison
    $requete->execute(array(':contenu' => $tweetARechercher));


    $resultat = $requete->fetch(PDO::FETCH_ASSOC);

    if ($resultat) {
        echo '<li>' . $resultat['idTweet'] . '</li>';
        echo '<li>' . $resultat['contenu'] . '</li>';
        echo '<li>' . $resultat['nom'] . '</li>';
    } else {
        echo "pas de tweet qui corresponde";
    }
}
?>
    
