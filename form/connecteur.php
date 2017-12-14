<?php
	require_once('idconnecteur.php');

	$connecteur = new PDO("mysql:host=$host;dbname=$db", $user, $pass, $pdo_options);
	$connecteur->exec('SET NAMES utf8;');
?>