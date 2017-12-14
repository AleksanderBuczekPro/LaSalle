<?php

	$nom = $_POST['nom'];
	$email = $_POST['email'];
	$nlicense = $_POST['nlicense'];
	$Heured = $_POST['heured'];
	$Heuref =$_POST['heuref'];

	require_once('connecteur.php');
	$connecteur->exec("INSERT INTO coach(nomComplet, email, heureDebut, heureFin, numeroLicense) VALUES('".$nom."', '".$email."', '".$Heured."', '".$Heuref."','".$nlicense."')");
	

	header("Location: ../admin.php");


?>