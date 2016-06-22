<?php
ob_start();
?>
<header>
	<h1 align="center" class="titre-article">Liste des inscriptions</h1>
	<a align="left" class="logout" href="index.php?action=Deconnexion"><input type="button" value="LogOut" /></a>
	<br>
</header>

<hr /><br /><br />
<table border= '1' bordercolor = 'red' cellpadding = '5' width = '80%' align = 'center'>

<tr> <th>CNE</th>  <th>Nom</th>   <th>Prenom</th>  </tr>

<?php  while ($row = $resultat->fetch()) { ?>
  
<tr>
<td><a href='index.php?action=detail&CNE=<?php echo $row[0] ?>'>
<?php echo $row[0] ;?>
</a></td>
 
<td><a href='index.php?action=detail&CNE=<?php echo $row[0] ?>'>
<?php echo $row[1];?>
</a></td> 
<td><a href='index.php?action=detail&CNE=<?php echo $row[0] ?>'>
<?php echo $row[2];?>
</a></td>
</tr>  
    
 <?php }?>
  
</table>
<pre>

</pre>
<?php
$page =ob_get_clean();
?>