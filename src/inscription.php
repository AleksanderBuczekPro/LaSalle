<?php
	
	$prenom=$_POST['prenom'];
	$nom=$_POST['nom'];
	$mail=$_POST['mail'];
	$mdp=$_POST['mdp'];
	$numclient=$_POST['numclient'];
	$datedeb = date('Y-m-d');
	$datexp = date("Y-m-d");
	$dateexp = strtotime ( '+1 year' , strtotime ( $datedeb ) ) ;
    $dateexp = date ( 'Y-m-j' , $dateexp );
	
	require_once('connecteur.php');
	$connecteur->exec("INSERT INTO adherent(prenom, nom, email, motdepasse, numero, dateInscription, dateExpiration) VALUES('".$prenom."', '".$nom."', '".$mail."', '".$mdp."', '".$numclient."', '".$datedeb."', '".$dateexp."')");
	
	header("Location: ../admin.php");
?>