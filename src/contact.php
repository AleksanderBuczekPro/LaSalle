<?php

<<<<<<< Updated upstream
	$nom = $_POST['nom'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	require_once('connecteur.php');

	$connecteur->exec("INSERT INTO formulaire (nom, email, message, dateEnvoi) VALUES ('". $nom . "', '" . $email . "', '" . $message . "', NOW())");

	/*print_r($connecteur->errorInfo());
=======

	require_once('connecteur.php');

		$connecteur->exec("INSERT INTO formulaire (nom, email, message, dateEnvoi) VALUES ('". $nom . "', '" . $email . "', '" . $message . "', NOW())");
		/*print_r($connecteur->errorInfo());
		
		
	
		$date = date('d-m-Y');
>>>>>>> Stashed changes

	$date = date('d-m-Y');


	print_r($date);

	var_dump($nom, $email, $message);*/



	header("Location: ../index.php");

?>