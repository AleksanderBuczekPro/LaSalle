<?php
session_start();
$_SESSION["email"]=$_POST["email"];
$_SESSION["mdp"]=$_POST["mdp"];
 
try {$bdd = new PDO('mysql:host=localhost;dbname=salledesport', 'root', '');}
catch (Exception $e) {die("L'accès à la base de donnée est impossible.");}
 
if (empty($_SESSION["email"]) or empty($_SESSION['mdp'])) {
    echo "veuillez saisir un email et un mot de passe";
}
else {
    $st = $bdd->query("SELECT COUNT(*) FROM membres WHERE email='".$_SESSION["email"]."' AND mdp='".$_SESSION["mdp"]."'")->fetch();
    if ($st['COUNT(*)'] == 1)
        header("Location: ../index.php");
}
?>
