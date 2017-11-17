<?php

	$intitule=$_POST['intitule'];
	$description=$_POST['description'];

	require_once('connecteur.php');
	$connecteur->exec("INSERT INTO activite(intitule, description) VALUES('".$intitule."', '".$description."')");
	header("Location: ../admin.php");
?>