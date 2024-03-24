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

  <form action="add.php" method="POST">
        
        <input type="hidden" name="form" value="ajoutUser">

        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom">

        <label for="email">Email</label>
        <input type="text" name="email" id="email">

        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password">

        <button type="submit">Envoyer</button>

  </form>

    
  </main>

  <?php require 'database.php';

  $requete = $database->prepare("SELECT id, nom, email FROM user");

  $requete->execute();

  $users = $requete->fetchAll(PDO::FETCH_ASSOC);


    foreach($users as $user) : ?>

  <form action="delete.php" method="POST">

      <input type="hidden" name="form" value="supprimer">
      <input type="hidden" name="suppr" value="<?php echo $user['id']; ?>">

      <?php echo '<li>' . $user['nom'] . '' . $user['email'] . '</li>'; ?>

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

