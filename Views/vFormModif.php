<?php
ob_start();
?>
<header>
	<h1 align="center" class="titre-article">Verifier vos information</h1>
	<br>
</header>
<hr /><br /><br />

<form name ="ModifEtudiant" action ="index.php?action=Ajouter" method = "post">

<pre>
	<b>CNE :</b>    	<input type = "text" name = "C" value="<?php echo $etudiant['C']; ?>" pattern="[0-9]+" required="required" maxlength="10"> <br />
	<b>Nom :</b>    	<input type = "text" name = "N" id="idMaj" value="<?php echo $etudiant['N']; ?>" pattern="[a-zA-Z]+" onblur="maj()" maxlength="30" required="required"> <br />
	<b>Prenom :</b> 	<input type = "text" name = "P" value="<?php echo $etudiant['P']; ?>" pattern="[a-zA-Z]+" required="required" maxlength="30"> <br />
	<b>CNI :</b>    	<input type = "text" name = "I" value="<?php echo $etudiant['I']; ?>" pattern="[a-zA-Z0-9]+" maxlength="10" required="required"> <br />
	<b>Tel :</b>    	<input type = "tel" name = "T" value="<?php echo $etudiant['T']; ?>" pattern="[0-9]+" maxlength="10" required="required"> <br />
	<b>Mail :</b>   	<input type = "email" name = "M" value="<?php echo $etudiant['M']; ?>" required="required" maxlength="75"> <br />
	
	       <input type = "submit" value ="Enregistrer" />       <input type = "reset" value ="Annuler" onClick ="history.go(-1)" />
</pre>
</form>
<?php
$page =ob_get_clean();
?>