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
    echo $dateexp;
	$connecteur=new PDO('mysql:host=localhost;dbname=lasalle','salledesport','webforce3');
	$connecteur->exec("INSERT INTO adherent(prenom, nom, email, motdepasse, numero, dateInscription, dateExpiration) VALUES('".$prenom."', '".$nom."', '".$mail."', '".$mdp."', '".$numclient."', '".$datedeb."', '".$dateexp."')");
	print_r($connecteur->errorInfo());
	// header("Location: ../admin.php");
?>