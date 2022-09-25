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
  <?php
require('connexion.php');
if (isset($_REQUEST['reference'], $_REQUEST['article'],$_REQUEST['descp'],$_REQUEST['prix'])){
  // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
  $reference = stripslashes($_REQUEST['reference']);
  $reference = mysqli_real_escape_string($conn, $reference); 
  // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
  $article = stripslashes($_REQUEST['article']);
  $article = mysqli_real_escape_string($conn, $article);
  //recupere le type et supprimer les antislashes ajoutes par le formulaitre
  $descp = stripslashes($_REQUEST['descp']);
  $descp = mysqli_real_escape_string($conn, $descp);
  // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
  $prix = stripslashes($_REQUEST['prix']);
  $prix = mysqli_real_escape_string($conn, $prix);
  //requéte SQL + mot de passe crypté
$sql="INSERT INTO articles (reference,nom,description,prix)Values('$reference','$article','$descp','$prix')";
    
  // Exécuter la requête sur la base de données
    $res = mysqli_query($conn, $sql);
    if($res){
       echo "<div class='sucess'>
             <h3>Enregistrer avec succès.</h3>
             <p><a href='formulaire_article.php'>back</a></p>
       </div>";
    }
}else{
?>
  <form class="formulaire" method="post" action="">
    <label>Reference</label><br><input type="" name="reference" size="30px"><br>
    <label>Nom_Article</label><br><input type="text" name="article" size="30px"><br>
    <label>Description</label><br><input type="text" name="descp" size="30px"><br>
    <label>Prix</label><br><input type="number" name="prix" size="30px"><br>
    <input type="submit" value="valider">
  </form>
  <?php } ?>
</div>
</div>
</body>
</html>