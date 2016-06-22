<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Gestion des Etudiants</title>
	<meta charset="utf-8">
	<script language="javascript">
	function maj(){

	document.getElementById("idMaj").value=document.getElementById("idMaj").value.toUpperCase();
	}
	function afficherDate(idZoneAffichage) {

	var d= new Date();
	var jours = new Array ("Dimanche","Lundi","Mardi","Mercredi", "Jeudi","Vendredi", "Samedi");
	var mois= new Array("Janvier", "Février", "Mars","Avril", "Mai","Juin", "Juillet", "Aout","Septembre", "Octobre", "Novembre", "Décembre");


	var LaDate = jours[d.getDay()] + " " + d.getDate() + " " + mois[d.getMonth()] + " " + d.getFullYear();

	document.getElementById(idZoneAffichage).innerHTML = LaDate;

}
	</script>
	<link rel="stylesheet" type="text/css" href="css/style.css"  />
</head>
<body>
	<header class="header">
	<img src='images/00.png' width="100%"/>
	
	</header>
	<div class="simple-ss" id="simple-ss"></div>
	<nav class="navigation">
		<ul>
			<li><a class="navigation-lien" href="index.php?action=Accueil" title="Accueil">Accueil</a></li>
			<li><a class="navigation-lien" href="index.php?action=Inscription" title="Inscription">Inscription</a></li>
			<li><a class="navigation-lien" href="index.php?action=Admin" title="Espace Admin">Espace Admin</a></li>
			<li><a class="navigation-lien" href="index.php?action=Contact" title="Contact Us">Contact Us</a></li>
			<li style="float:none;"><br style="clear:both;"></li>
		<div align="right" id= "zoneDate"></div>
		</ul>
	</nav>
	
 
	<div class="main">
	
		<aside class="aside">
			<header><h3 align="center"><u>A-propos</u></h3></header>
			<br>-Ce site entre dans le cadre d'un mini projet de web dynamique, dans le cadre des projets de web pour gerer les .........
			<br>
			<br><u>Réalisé par: </u>
			    <ul>
				<li><a class="navigation-lien" href="mailto:naoufal.hatim@usmba.ac.ma">Hatim Naoufal</a></li><br>
			    <li><a class="navigation-lien" href="mailto:dehbi.mehdi@gmail.com">Dahbi Mehdi</a></li>
			    </ul>
			
			<br>
			<br>
			<br>
			<br>
			
			<br>
			<br>
			<br>
		
		</aside>
		
		<article class="article">
		
			<?php echo $page; ?>
			
		</article>

		
		
		<br style="clear:both;">
	</div>
	
	<footer class="footer">
		<nav class="ma-class-en-css">
			<ul>
				<li><a class="navigation-lien" href="index.php?action=Plan" title="Plan">Plan du site</a></li>
				<li>|</li> 
				<li><a class="navigation-lien" href="#" title="2016">Copyright</a></li>
				<li style="float:none;"><br style="clear:both;"></li>
			</ul>
		</nav>
	</footer>
	
<script language = "javascript">
afficherDate("zoneDate");
</script>
</body>
</html>
