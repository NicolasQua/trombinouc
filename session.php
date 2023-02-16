<?php
include 'base.php';
  session_start();
  $sql = "SELECT * FROM PROFIL WHERE EMAIL = :mail"; // Stocke le code SQL de la requête
  $req = $bd->prepare ($sql); // Requête préparée
  $marqueurs=array('mail'=>$_SESSION['mail']);
  $req->execute ($marqueurs); // Requête exécutée
  $lesEnreg = $req->fetch (); // Requête exécutée
  $req->closeCursor (); // Requête détruite
  //debug($lesEnreg);
  $ID = $lesEnreg[0];
  if (isset($_SESSION['mail']) == false){ //si $_SESSION['addrEmail'] est vide
      if (isset($_POST['mail']) == false || isset($_POST['mdpc']) == false) { // si les post sont pas set : KO
         header('Location:http://isis.unice.fr/~ct003388/acces/M2105/Projet/index.php?error=1');
         exit();
       }
      if ($_POST['mail']!= $lesEnreg[3] || $_POST['mdpc']!= $lesEnreg[4]) { // si identifiants entrés dans connex ne correspondent pas a ceux dans la BdD : KO
         header('Location:http://isis.unice.fr/~ct003388/acces/M2105/Projet/index.php?error=2');
         exit();
     }else{ //donc si les identifiant corresponent on initialise la session avec $_POST['addrEmail']
         $_SESSION['mail'] = $_POST['mail'];
     }
  }
  
	$sql="SELECT * FROM PROFIL WHERE email = :mail AND mdp = :mdpc";
	$req = $bd->prepare($sql);
	$marqueurs=array('mail'=>$_POST['mail'],'mdpc'=>$_POST['mdpc']);
	$req->execute($marqueurs);
	$lesEnreg=$req->fetch();

	$req->closeCursor();
	if(empty($lesEnreg)){
	//header('location:index.php?error=3');
  
	}else{
	header('location:profil.php');
	}
?>
