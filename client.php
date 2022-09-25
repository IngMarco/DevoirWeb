<?php
$c=mysqli_connect('localhost','root','','bonbagay');
//declaration des variables
$numero=$_POST['num'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$adresse=$_POST['adresse'];
$code=$_POST['code'];
$ville=$_POST['ville'];
$pays=$_POST['pays'];
$tel=$_POST['tel'];
//on cree la requete
$req="INSERT INTO clients VALUES('','$nom','$prenom','$adresse','$code','$ville','$pays','$tel')";

//on envoie la requete
$ex=$c->query($req);
if($ex)
{
   
    header("Location: formulaire_client.php ");
}
else{
echo"enregistrement echoue";
}
?>