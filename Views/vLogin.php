<?php
ob_start();
?>
<header>
	<h1 align="center" class="titre-article">Login</h1>
	<br>
</header>

<hr /><br /><br />
<div align="center">
<form action="index.php?action=login" method="post">
<pre>
	<b>UserName :</b>	<input  name="username" type="text" placeholder="votre username"  required="required" maxlength="30"/>

	<b>Password :</b>	<input name="password" type="password" placeholder="votre password"  required="required" maxlength="30" />

		<input type = "submit" value ="Connecter" />    <input type = "reset" value ="Annnuler" />
</pre>
</form> 
</div>
<?php
$page =ob_get_clean();
?>