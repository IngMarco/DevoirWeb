
<!DOCTYPE html>
<html>
  <head>
 <link rel="stylesheet" href="styles.css">
  </head>
  <body>
  <center>
<table width='60%' border=3>
    <thead>
<tr>
<th>Numero</th>
<th>Nom</th>
<th>Prenom</th>
<th>Adresse</th>
<th>CodePostal</th>
<th>Ville</th>
<th>Pays</th>
<th>Telephone</th>
<th>Option </th>
</tr>
</thead>
<?php 
$conn=mysqli_connect('localhost','root','','bonbagay');
$req="SELECT *FROM clients";
$res=$conn->query($req);

 while($rep=mysqli_fetch_array($res))
 {  
?>
<tbody>
    <tr>
<td><?php echo $rep['numero']?></td>
<td><?php echo $rep['nom']?></td>
<td><?php echo $rep['prenom']?></td>
<td><?php echo $rep['adresse']?></td>
<td><?php echo $rep['codepostal']?></td>
<td><?php echo $rep['ville']?></td>
<td><?php echo $rep['pays']?></td>
<td><?php echo $rep['telephone']?></td>
<td>
<button><a href="">Update</a></button>
<button><a href="">Delete</a></button>
</td>
</tr>
    </tbody>
    <?php }?>
</table>
</center>
 </body>
</html>