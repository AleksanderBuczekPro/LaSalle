<?php

	$intitule = $_POST['intitule'];
	$coach = $_POST['coach'];
	$salle = $_POST['salle'];
	$date = $_POST['date'];

	require_once('connecteur.php');
	$connecteur->exec("INSERT INTO seance(heureDebut, intitule, idCoach, idSalle) VALUES('".$date."', '".$intitule."', '".$coach."', '".$salle."')");
	

	header("Location: ../admin.php");

?>