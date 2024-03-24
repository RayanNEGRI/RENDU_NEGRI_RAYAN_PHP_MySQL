<!DOCTYPE html>
<html lang="fr">
<head>
		<!-- appel de la feuille de style externe -->
		<link rel="stylesheet" href="">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Site twitter Rayan NEGRI </title>
</head>

<body> 
 
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

  

</body>
</html>

