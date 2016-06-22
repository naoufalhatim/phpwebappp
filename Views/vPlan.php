<?php
ob_start();
?>

<header>
	<h1 align="center" class="titre-article">Plan du site</h1>
	<br>
</header>

<hr /><br /><br />

<ul>
	<li><a class="navigation-lien" href="index.php?action=Accueil" title="Accueil">Accueil</a></li><br>
	<li><a class="navigation-lien" href="index.php?action=Inscription" title="Inscription">Inscription</a></li><br>
	<li><a class="navigation-lien" href="index.php?action=Admin" title="Espace Admin">Espace Admin</a></li><br>
	<li><a class="navigation-lien" href="index.php?action=Contact" title="Contact Us">Contact Us</a></li><br>
	
</ul>
<br/>
<header>
	<h1 align="center" class="titre-article">Lien utiles</h1>
	<br>
</header>
<hr /><br /><br />

<ul>
	<li><a class="navigation-lien" href="http://www.fsdmfes.ac.ma/" title="FSDM">FSDM</a></li><br>
	<li><a class="navigation-lien" href="http://www.fst-usmba.ac.ma/" title="FSTF">FSTF</a></li><br>
	<li><a class="navigation-lien" href="http://www.fldm-usmba.ac.ma/" title="FLDM">FLDM</a></li><br>
	<li><a class="navigation-lien" href="http://fsjes.usmba.ac.ma/" title="FSJES">FSJES</a></li><br>
	
</ul>
<pre>

</pre>
<?php
$page = ob_get_clean();
?>

