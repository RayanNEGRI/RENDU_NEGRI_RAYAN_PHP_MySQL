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
          
          
        <!-- Onglet De Navigation survolant -->  
          
              <div class="subnav">
                <button class="subnavbtn">Recettes</button>
                <div class="subnav-content"><!-- apparait quand la personne passe le curseur sur le bouton du dessus --> 
                  <a href="Recettes.php">Listes des Recettes</a>
                  <a href="AjoutRecettes.php">Ajouter une Recettes</a>
                </div>
              </div>

          
        </div>
  </header>


 


  <main>

  <form action="AddRecette.php" method="POST">
        
        <input type="hidden" name="form" value="ajoutRecettes">

        <label for="titre">Titre</label>
        <input type="texte" name="titre" id="titre">

        <label for="description">Description</label>
        <input type="texte" name="description" id="description">

        <label for="tempsTotale">TempsTotale</label>
        <input type="integer" name="tempsTotale" id="tempsTotale">

        <label for="difficulte">Diffilcute</label>
        <input type="integer" name="difficulte" id="difficulte">

        <label for="regimeSociale">RegimeSociale</label>
        <input type="texte" name="regimeSociale" id="regimeSociale">

        <button type="submit">Envoyer</button>

  </form>
    
  </main>


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

