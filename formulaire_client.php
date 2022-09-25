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
  <form class="formulaire" method="POST" action="client.php">
    <label>Numero</label><br><input type="text" name="num" size="30px"><br>
    <label>Nom</label><br><input type="text" name="nom" size="30px"><br>
    <label>Prenom</label><br><input type="text" name="prenom" size="30px"><br>
    <label>Adresse</label><br><input type="text" name="adresse" size="30px"><br>
    <label>CodePostal</label><br><input type="text" name="code" size="30px"><br>
    <label>Ville</label><br><input type="text" name="ville" size="30px"><br>
    <label>Pays</label>
    <select name="pays">
    		<option >HAITI</option >
    		<option>CANADA</option>
    		<option>USA</option>
    		<option>FRANCE</option>
    		<option>JAPON</option>
    		<option>ITALI</option>
    		<option>JAMAIQUE</option>
    		<option>RUSSI</option>
    		<option>BRASIL</option>
        </select>
    <br>
    <label>Telephone</label><br><input type="text" name="tel" size="30px"><br>
    <input type="submit" value="valider" >
  </form>
</div>
</div>
  </body>
</html>