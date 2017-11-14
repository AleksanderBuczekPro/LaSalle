<?php

	$intitule=$_POST['intitule'];
	$description=$_POST['description'];

	$connecteur=new PDO('mysql:host=localhost;dbname=lasalle','salledesport','webforce3');
	$connecteur->exec("INSERT INTO activite(intitule, description) VALUES('".$intitule."', '".$description."')");
	header("Location: ../admin.php");
?>