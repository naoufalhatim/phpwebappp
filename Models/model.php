<?php


//connexion à la base de données
function ouvrirConnexion(){
	$user = 'webnaoufal';
	$password = 'Hatim123&';
	$db = 'mysql:host=localhost;dbname=webnaoufal';
	try {
		$cn = new PDO($db, $user, $password);
	}
	catch (PDOException $dbex) {
		die("Erreur de connexion : " . $dbex->getMessage() );
	}
	return $cn;
}

function AjouterEtudiant($t) {

$cn = ouvrirConnexion();

$Rq = "insert into etudiant values ('" . $t["C"] . "','" . $t["N"] .  "','" . $t["P"] .  "','" . $t["I"] .  "','" . $t["T"] .  "','" . $t["M"] . "')";
$resultat = $cn->exec($Rq);

}

function ModifierEtudiant($t) {

$cn = ouvrirConnexion();

$Rq = "update etudiant set CNE='" . $t["C"] . "' , Nom='" .$t['N'] ."', Prenom = '" . $t['P'] ."', CNI = '" . $t['I'] ."', Tel = '" . $t['T']
 ."', Mail = '" . $t['M'] . "' where CNE ='" . $t['oldC']. "'";
$resultat = $cn->exec($Rq);

}

function SupprimerEtudiant($c) {

$cn = ouvrirConnexion();
$Rq = "delete from etudiant where CNE='" . $c . "'";
$resultat = $cn->exec($Rq);

}

function AfficherEtudiant($c) {

$cn = ouvrirConnexion();
$Rq = "select * from etudiant where CNE='" . $c . "'";
$resultat = $cn->query($Rq);
return $resultat;

//return $cn->query("select * from etudiant where Code='" . $c . "'");

}

function listeEtudiants() {
	$cn = ouvrirConnexion();
	return $cn->query("select * from etudiant");
}

function AjouterContact($t) {
	$cn = ouvrirConnexion();
	$Rq = "insert into contact values ('" . $t["CN"] . "','" . $t["CM"] .  "','" . $t["CC"] . "')";
	$resultat = $cn->exec($Rq);
}
