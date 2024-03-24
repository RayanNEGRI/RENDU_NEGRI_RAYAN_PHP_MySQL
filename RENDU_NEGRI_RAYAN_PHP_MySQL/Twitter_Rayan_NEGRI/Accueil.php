<!DOCTYPE html>
<html lang="fr">
<head>
		<!-- appel de la feuille de style externe -->
		<link rel="stylesheet" href="CSS/index.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Site twitter Rayan NEGRI </title>
</head>

<body> 
    <header>
    <!-- Le Menu de Navigation -->
        <div class="navbar">

        <!-- Deux Onglet de Navigation -->
          
              <a href="Accueil.php">Accueil</a>
          
          
        <!-- Onglet De Navigation survolant -->  
          
              <div class="subnav">
                <button class="subnavbtn">Comptes</button>
                <div class="subnav-content"><!-- apparait quand la personne passe le curseur sur le bouton du dessus --> 
                  <a href="Compte.php">Comptes</a>
                </div>
              </div>

              <div class="subnav">
                <button class="subnavbtn">Tweet</button>
                <div class="subnav-content"><!-- apparait quand la personne passe le curseur sur le bouton du dessus --> 
                  <a href="rechercheTweet.php">Recherche Tweet</a>
                </div>
              </div>
          
        </div>
  </header>


 


  <main>

  <form action="addTweet.php" method="POST">
        
        <input type="hidden" name="form" value="ajoutTweet">

        <label for="contenu">contenu</label>
        <input type="text" name="contenu" id="contenu">

        <button type="submit">Envoyer</button>

  </form>

    
  </main>

  <?php require 'database.php';

  $requete = $database->prepare("SELECT * FROM `tweet` INNER JOIN `user` ON tweet.user_id = user.id ORDER BY `tweet`.`idTweet` DESC");

  $requete->execute();

  $tweets = $requete->fetchAll(PDO::FETCH_ASSOC);


  foreach($tweets as $tweet) : ?>

  <form action="deleteTweet.php" method="POST">

      <input type="hidden" name="form" value="supprimerTweet">
      <input type="hidden" name="suppr" value="<?php echo $tweet['idTweet']; ?>">

      <?php echo '<li>' . $tweet['idTweet'] . '</li>'; ?>    
      <?php echo '<li>' . $tweet['contenu'] . '</li>'; ?>
      <?php echo '<li>' . $tweet['nom'] . '</li>'; ?>

      <button type="submit">Supprimer</button>

  </form>
  <?php endforeach;  ?>

  <footer>
      <!-- footer qui donne les informations du site-->
      <div class="footer-basic">
        <!-- image en dessous de deux réseaux quand on clique dessus sa nous redirige sur mon profil-->
            <div class="social"><a href="https://www.linkedin.com/in/rayan-negri-17a9b8237/"><i><img src="Image/linkedin-icon.png" alt="Image Linkedin"></i></a> <a href="https://github.com/RayanNEGRI"><i><img src="Image/github-icon.png" alt="Image GuitHub"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="https://www.iim.fr/">IIM Etudiant</a></li>
                <li class="list-inline-item"><a href="https://www.devinci.fr/">DeVinci Etudiant</a></li>
            </ul>
            <p class="copyright">Rayan NEGRI © 2024</p>
        
      </div>

  </footer>

  
</body>
</html>

