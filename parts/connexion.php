<?php

/* Indique le bon format des entêtes (par défaut apache risque de les envoyer au standard ISO-8859-1)*/
header('Content-type: text/html; charset=UTF-8');

/* Initialisation de la variable du message de réponse*/
$message = null;

/* Récupération des variables issues du formulaire par la méthode post*/
$email = filter_input(INPUT_POST, 'email');
$motdepasse = filter_input(INPUT_POST, 'motdepasse');

/* Si le formulaire est envoyé*/
if (isset($email,$motdepasse)) 
{
    
    /* Teste que les valeurs ne sont pas vides ou composées uniquement d'espaces */  
    $email = trim($email) != '' ? $email : null;
    $motdepasse = trim($motdepasse) != '' ? $motdepasse : null;
  
  
  /* Si $email et $motdepasse différents de null */
  if(isset($email,$motdepasse)) 
  {
    /* Connexion au serveur : dans cet exemple, en local sur le serveur d'évaluation
    A MODIFIER avec vos valeurs */
    $hostname = "localhost";
    $database = "salledesport";
    $username = "root";
    $password = "";
    
    /* Configuration des options de connexion */
    
    /* Désactive l'éumlateur de requêtes préparées (hautement recommandé) */
    $pdo_options[PDO::ATTR_EMULATE_PREPARES] = false;
    
    /* Active le mode exception */
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    
    /* Indique le charset */
    $pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = "SET NAMES utf8";
    
    /* Connexion */
    try
    {
      $connect = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password, $pdo_options);
    }
    catch (PDOException $e)
    {
      exit('problème de connexion à la base');
    }    
    
    /* Requête pour récupérer les enregistrements répondant à la clause : champ du email et champ du mdp de la table = email et mdp posté dans le formulaire */
    $requete = "SELECT * FROM adherent WHERE email = :nom AND motdepasse = :motdepasse";  
    
    try
    {
      /* Préparation de la requête*/
      $req_prep = $connect->prepare($requete);
      
      /* Exécution de la requête en passant les marqueurs et leur variables associées dans un tableau*/
      $req_prep->execute(array(':nom'=>$email,':motdepasse'=>$motdepasse));
      
      /* Création du tableau du résultat avec fetchAll qui récupère tout le tableau en une seule fois*/
      $resultat = $req_prep->fetchAll(); 
      
      $nb_result = count($resultat);
      
      if ($nb_result == 1)
      {
        /* Démarre une session si aucune n'est déjà existante et enregistre le email dans la variable de session $_SESSION['login'] qui donne au visiteur la possibilité de se connecter.  */
        if (!session_id()) session_start();
        $_SESSION['login'] = $email;
            
        header("Location: ../index.php");
        /*ou redirection vers une page en cas de succès ex : menu.php*/
        /*header("Location: menu.php");
        exit();*/
        
        /* Si vous voulez récupérer les données elles se trouvent dans la première et unique ligne du tableau $resultat par exemple */
        /* $result = $resultat[0];
        echo $result['email'];
        echo $result['date_enregistrement'];
        */
      }
      else if ($nb_result > 1)
      {
        /* Par sécurité si plusieurs réponses de la requête mais si la table est bien construite on ne devrait jamais rentrer dans cette condition */
        $message = 'Problème de d\'unicité dans la table';
      }
      else
      {   /* Le email ou le mot de passe sont incorrect */
        header("Location: ../activite.php");
      }
    }
    catch (PDOException $e)
    {
      $message = 'Problème dans la requête de sélection';
    }   
  }
  else 
  {/*au moins un des deux champs "email" ou "mot de passe" n'a pas été rempli*/
    $message = 'Les champs Pseudo et Mot de passe doivent être remplis.';
  }
}
?>