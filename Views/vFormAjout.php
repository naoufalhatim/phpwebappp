<?php
ob_start();
?>
<header>
	<h1 align="center" class="titre-article">Formulaire d'inscription</h1>
	<br>
</header>

<hr /><br /><br />

<form name ="ajoutEtudiant" action ="index.php?action=Modifier" method = "post">
<pre>
	<b>CNE :</b>    	<input type = "text" name = "C" placeholder="Exemple: 1234567890" pattern="[0-9]+" required="required" maxlength="10"> <br />
	<b>Nom :</b>    	<input type = "text" name = "N" id="idMaj" placeholder="votre nom" pattern="[a-zA-Z]+" onblur="maj()" maxlength="30" required="required"> <br />
	<b>Prenom :</b> 	<input type = "text" name = "P" placeholder="votre nom" pattern="[a-zA-Z]+" required="required" maxlength="30"> <br />
	<b>CNI :</b>    	<input type = "text" name = "I" placeholder="Exemple: CD123456" pattern="[a-zA-Z0-9]+" maxlength="10" required="required"> <br />
	<b>Tel :</b>    	<input type = "tel" name = "T" placeholder="Exemple: 0123456789" pattern="[0-9]+" maxlength="10" required="required"> <br />
	<b>Mail :</b>   	<input type="email" name = "M" placeholder="votre mail"  required="required" maxlength="75"> <br />

		<input type = "submit" value ="Inscription" />      <input type = "reset" value ="Annnuler" />
</pre>
</form>
<?php
$page =ob_get_clean();
?>