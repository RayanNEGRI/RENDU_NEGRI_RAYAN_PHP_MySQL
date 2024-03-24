<?php
try {
    $database = new PDO('mysql:host=localhost;dbname=exentrainementrecette','root','root');  //nom bdd + utilisateur et mdp
    
} catch (PDOException $e) {
    die('Site indisponible');
}


?>
