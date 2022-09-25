<?php $conn=mysqli_connect('localhost','root','','bonbagay');
$req="SELECT *FROM articles";
$res=$conn->query($req);
print"<center>";
print"<table width='100%' border=3>";
print"<tr>
<th>Reference</th>
<th>Nom_Artcle</th>
<th>Description</th>
<th>Prix</th>
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
</tr>
    ";
}
print"</table></center>";
echo "<div class='sucess'>
             <h3>Cliquez ici <a href='vendeur.php'>back</a></p></h3>
            
       </div>";
?>