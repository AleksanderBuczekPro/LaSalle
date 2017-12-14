<?php
    	
	// Ma clé privée
	$secret = "6LeA5jwUAAAAAGFRrn6H9sbTtUtQ9v-8hhCm7-5G";
	// Paramètre renvoyé par le recaptcha
	$response = $_POST['g-recaptcha-response'];
	// On récupère l'IP de l'utilisateur
	$remoteip = $_SERVER['REMOTE_ADDR'];
	
	$api_url = "https://www.google.com/recaptcha/api/siteverify?secret=" 
	    . $secret
	    . "&response=" . $response
	    . "&remoteip=" . $remoteip ;
	
	$decode = json_decode(file_get_contents($api_url), true);
	
	if ($decode['success'] == true) {
		// C'est un humain
		
		$nom = $_POST['nom'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$connecteur = new PDO('mysql:host=localhost;dbname=lasalle', 'root', ''); 

		$connecteur->exec("INSERT INTO formulaire (nom, email, message, dateEnvoi) VALUES ('". $nom . "', '" . $email . "', '" . $message . "', NOW())");

		/*print_r($connecteur->errorInfo());

		$date = date('d-m-Y');


		print_r($date);

		var_dump($nom, $email, $message);*/

		mail("hector.barre@protonmail.com","Test mail", $message);
		print phpinfo();  
		//mail("hector.barre@protonmail.com", "Form to email message", $_POST["message"], "From: an@email.address");
	}


	header("Location: ../index.php");	

?>