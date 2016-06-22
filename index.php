<?php

include("Models/model.php");

if (empty($_GET["action"])) $action = "accueil";
else $action = $_GET["action"];

if ($action=='login') {

if(!isset($_POST["username"]) || !isset($_POST["password"]) || $_POST["username"] != "moi" || $_POST["password"] !="douz") {
include("Views/vLogin.php");
include("Views/gabarit.php");
exit();
}
session_start();
$_SESSION["username"]=$_POST["username"];
$action = 'liste';

}

//action detail
if ($action=='detail') {
	session_start();
	if (!isset($_SESSION["username"])) { 
	include("Views/vLogin.php");
	include("Views/gabarit.php");
	exit();
	}
	
	$resultat = AfficherEtudiant($_GET["CNE"]);
	$etudiant = $resultat->fetch();
	$vue = "vDetail.php";
}
//action liste
elseif ($action=='liste') {
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	if (!isset($_SESSION["username"])) { 
	include("Views/vLogin.php");
	include("Views/gabarit.php");
	exit();
	}
	$resultat = listeEtudiants();
	$vue = "vListe.php";
}

//action AfficherFormulaire d'ajout
elseif ($action=='Inscription') {
	$vue = "vFormAjout.php";
}
//action plan du site
elseif ($action=='Plan') {
	$vue = "vPlan.php";
}
//action deconnexion
elseif ($action=='Deconnexion') {
	$vue = "vDeconnexion.php";
}
//action admin
elseif ($action=='Admin') {
	session_start();
	if (!isset($_SESSION["username"])) { 
	$vue = "vLogin.php";
	}
	else{
	$resultat = listeEtudiants();
	$vue = "vListe.php";
	}
}
//action contact
elseif ($action=='Contact') {
	$vue = "vContact.php";
}
//action Ajouter
elseif ($action=='Ajouter') {
	AjouterEtudiant($_POST);
	$vue = "vAccord.php";
}
//action send
elseif ($action=='Send') {
	AjouterContact($_POST);
	$vue = "vAcceuil.php";
}
//action AfficherFormulaire Modif
elseif ($action=='Modifier') {
	
	$etudiant = $_POST;
	$vue = "vFormModif.php";
}
//action Modifier
elseif ($action=='modifier') {
	ModifierEtudiant($_POST);
	$resultat = AfficherEtudiant($_POST["C"]);
	$etudiant = $resultat->fetch();
	$vue = "vDetail.php";
}
//action supprimer
elseif ($action=='supprimer') {
	SupprimerEtudiant($_GET["CNE"]);
	$resultat = listeEtudiants();
	$vue = "vListe.php";
	
}
//tous les autres cas en affiche la page d'acceuil
else {
	$vue="vAcceuil.php";
}

include("Views/" . $vue);
include("Views/gabarit.php");
?>