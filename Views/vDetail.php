<?php
ob_start();
?>
<header>
	<h1 align="center" class="titre-article">Detail d'un etudiant</h1>
	<a align="left" class="logout" href="index.php?action=Deconnexion"><input type="button" value="LogOut" /></a>
	<br>
</header>

<hr /><br /><br />
<pre>
	<b>CNE :</b>    	<?php echo $etudiant["CNE"]; ?> <br />
	<b>Nom  :</b>    	<?php echo $etudiant["Nom"]; ?><br />
	<b>Prenom :</b>  	<?php echo $etudiant["Prenom"]; ?><br />
	<b>CNI :</b>     	<?php echo $etudiant["CNI"]; ?><br />
	<b>Tel :</b>     	<?php echo $etudiant["Tel"]; ?><br />
	<b>Mail :</b>    	<?php echo $etudiant["Mail"]; ?><br />

						<a class="navigation-lien" href ='index.php?action=liste'>Retour</a>  <a class="navigation-lien" href ='index.php?action=supprimer&CNE=<?php echo $etudiant["CNE"]; ?>' onClick="return confirm('Etes vous surs?');">Supprimer</a>

</pre>
  
</table>

<?php
$page =ob_get_clean();
?>