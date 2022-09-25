<?php
$c=mysqli_connect('localhost','root','','bonbagay');
//declaration des variables
 $ida=$_POST['ida'];
 $idc=$_POST['idc'];
 $idarticle=$_POST['idarticle'];
 $quantite=$_POST['quantite'];
 $date=$_POST['date'];
//on cree la requete
$req1="INSERT INTO achats VALUES('','$idc','$idarticle','$quantite','$date')";

//on envoie la requete
$ex=$c->query($req1);
if($ex)
{
   
    header("Location: formulaire_achat.php ");
}
else{
echo"emregistrement echoue";
}
?>