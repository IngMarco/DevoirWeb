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
  <body class="vendeur" >
  <?php include('entet_vendeur.php')?>
  <?php include('body_vendeur.php')?>
  </body>
</html>