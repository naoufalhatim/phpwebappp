<?php
ob_start();
?>
<header>
	<h1 align="center" class="titre-article">Contact US</h1>
	<br>
</header>

<hr /><br /><br />
<form action="index.php?action=Send" method="post">
    Votre nom<br>
    <input type="text" name="CN" id="idMaj" placeholder="votre nom" pattern="[a-zA-Z]+" onblur="maj()" maxlength="30" required="required"><br>
    Votre e-mail<br>
    <input type="email" name="CM" placeholder="votre mail"  required="required" maxlength="100"><br>
    Message<br>
    <textarea name="CC" cols="50" rows="5" placeholder="votre message"  maxlength="200"></textarea> <br><br>
    <input type="submit" value="Send">
    <input type="reset" value="Clear">
</form>

<?php
$page =ob_get_clean();
?>