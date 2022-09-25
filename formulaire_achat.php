<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }
?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
  <?php include('entet_vendeur.php')?>
  <div class="vendeur_f">
  <div>
  <?php include('body_vendeur.php')?>
</div>
<div class="vendeur_form">
  <h4>Vendeur Formulaire</h4>
  <form class="formulaire" method="POST" action="achat.php">
    <label>Id_Achat</label><br><input type="number" name="ida" size="30px"><br>
    <label>Id_Client</label><br><input type="number" name="idc" size="30px"><br>
    <label>Id_Article</label><br><input type="number" name="idarticle" size="30px"><br>
    <label>Quantite</label><br><input type="number" name="quantite" size="30px"><br>
    <label>Date</label><br><input type="date" name="date" size="30px"><br>
    <input type="submit" value="valider" >
  </form>
</div>
</div>
  </body>
</html>