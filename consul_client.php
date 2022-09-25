<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="styles.css" />
  </head>
  <body class="vendeur" >
  <div?><?php include('entet_vendeur.php')?></div>
 <div>
<?php $conn=mysqli_connect('localhost','root','','bonbagay');
$req="SELECT *FROM clients";
$res=$conn->query($req);
print"<center>";
print"<table width='100%' border=3>";
print"<tr>
<th>Numero</th>
<th>Nom</th>
<th>Prenom</th>
<th>Adresse</th>
<th>CodePostal</th>
<th>Ville</th>
<th>Pays</th>
<th>Telephone</th>
</tr>
";
while($rep=mysqli_fetch_array($res))
{
    print"
    <tr>
<td>".$rep[0]."</td>
<td>".$rep[1]."</td>
<td>".$rep[2]."</td>
<td>".$rep[3]."</td>
<td>".$rep[4]."</td>
<td>".$rep[5]."</td>
<td>".$rep[6]."</td>
<td>".$rep[7]."</td>
</tr>
    ";
}
print"</table></center>";
echo "<div class='sucess'>
             <h3>Cliquez ici <a href='vendeur.php'>back</a></p></h3>
            
       </div>";
?>
</div>
 </body>
</html>