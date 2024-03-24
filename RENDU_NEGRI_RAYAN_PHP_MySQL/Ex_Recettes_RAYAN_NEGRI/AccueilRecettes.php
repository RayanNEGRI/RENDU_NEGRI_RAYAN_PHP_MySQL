<!DOCTYPE html>
<html lang="fr">
<head>
		<!-- appel de la feuille de style externe -->
		<link rel="stylesheet" href="CSS/accueil.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Site Recettes Rayan NEGRI </title>
</head>

<body> 
    <header>
    <!-- Le Menu de Navigation -->
        <div class="navbar">

        <!-- Deux Onglet de Navigation -->
          
              <a href="AccueilRecettes.php">Accueil</a>
          
        </div>
  </header>


 


  <main>

  <form action="addRecette.php" method="POST">
        
        <input type="hidden" name="form" value="ajoutRecette">

        <label for="titre">titre</label>
        <input type="text" name="titre" id="titre">

        <label for="description">description</label>
        <input type="text" name="description" id="description">

        <label for="difficulte">difficulte entre 1 et 5 </label>
        <input type="text" name="difficulte" id="difficulte">

        <label for="tempsTotale">temps totale </label>
        <input type="text" name="tempsTotale" id="tempsTotale">

        <label for="regimeSociale">regime sociale </label>
        <input type="text" name="regimeSociale" id="regimeSociale">

        <button type="submit">Envoyer</button>

  </form>

    
  </main>

  <?php require 'database.php';

  $requete = $database->prepare("SELECT * FROM `recettes` ORDER BY `recettes`.`id` DESC");

  $requete->execute();

  $recettes = $requete->fetchAll(PDO::FETCH_ASSOC);


  foreach($recettes as $recette) : ?>

  <form action="deleteRecettes.php" method="POST">

      <input type="hidden" name="form" value="supprimerRecettes">
      <input type="hidden" name="suppr" value="<?php echo $recette['id']; ?>">

      <?php echo '<li>' . $recette['id'] . '</li>'; ?>    
      <?php echo '<li>' . $recette['titre'] . '</li>'; ?>
      <?php echo '<li>' . $recette['description'] . '</li>'; ?>
      <?php echo '<li>' . $recette['difficulte'] . '</li>'; ?>
      <?php echo '<li>' . $recette['tempsTotale'] . '</li>'; ?>
      <?php echo '<li>' . $recette['regimeSociale'] . '</li>'; ?>

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

