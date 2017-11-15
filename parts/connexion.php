<?php
session_start();
$_SESSION["email"]=$_POST["email"];
$_SESSION["motdepasse"]=$_POST["motdepasse"];
 
try {$bdd = new PDO('mysql:host=localhost;dbname=salledesport', 'root', '');}
catch (Exception $e) {die("L'accès à la base de donnée est impossible.");}
 
if (empty($_SESSION["email"]) or empty($_SESSION['motdepasse'])) {
    echo "veuillez saisir un email et un mot de passe";
}
else {
    $st = $bdd->query("SELECT email, motdepasse FROM adherent WHERE email='".$_SESSION["email"]."' AND motdepasse='".$_SESSION["motdepasse"]."'")->fetch();
        $_SESSION['connecte'];
    if ($st['COUNT(*)'] == 1)
        $_SESSION['connecte'];
        header("Location: ../index.php");
}
?>