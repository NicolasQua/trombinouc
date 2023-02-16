<?php
include 'base.php';
include './Outils/outils.php';
  session_start();
  if ($_POST['connection'] == 'connection') { //Si c'est la premiere connexion (depuis le connex donc sans F5)
    $sql = "SELECT * FROM PROFIL WHERE email = :email AND mdp = :mdp"; // Stocke le code SQL de la requête
    $req = $bd->prepare ($sql); // Requête préparée
    $marqueurs=array('email'=>$_POST['mail'], 'mdp'=>$_POST['mdpc']);
    $req->execute ($marqueurs); // Requête exécutée
    $lesEnreg = $req->fetch (); // Requête exécutée
    $req->closeCursor (); // Requête détruite
    //debug($lesEnreg);
    $_SESSION['prenom'] = $lesEnreg[2];
    $monID = $lesEnreg[0];
    if (isset($_SESSION['mail']) == false){ //si $_SESSION['addrEmail'] est vide
        if (isset($_POST['mail']) == false || isset($_POST['mdpc']) == false) { // si les post sont pas set : KO  donc si on essaie d'utilise le lien on va direct sur le connex
           header('Location:http://isis.unice.fr/~ct003388/acces/M2105/Projet/index.php?err1');
           exit();
         }
        if ($_POST['mail']!= $lesEnreg[3] || $_POST['mdpc']!= $lesEnreg[4]) { // si identifiants entrés dans connex ne correspondent pas a ceux dans la BdD : KO
           header('Location:http://isis.unice.fr/~ct003388/acces/M2105/Projet/index.php?err2');
           print_r($lesEnreg);
           print_r($_POST);
           exit();
       }else{ //donc si les identifiant corresponent on initialise la session avec $_POST['addrEmail']
           $_SESSION['mail'] = $_POST['mail'];
       }
    }
  }else {// si on a fait F5, la session est deja crée
    $sql = "SELECT * FROM PROFIL WHERE email = :email"; // Stocke le code SQL de la requête
    $req = $bd->prepare ($sql); // Requête préparée
    $marqueurs=array('email'=>$_SESSION['mail']);
    $req->execute ($marqueurs); // Requête exécutée
    $lesEnreg = $req->fetch (); // Requête exécutée
    $req->closeCursor (); // Requête détruite
    //debug($lesEnreg);
    $monID = $lesEnreg[0];
    if (isset($_SESSION['mail']) == false){ //si $_SESSION['addrEmail'] est vide
        if (isset($_POST['mail']) == false || isset($_POST['mdpc']) == false) { // si les post sont pas set : KO
           header('Location:http://isis.unice.fr/~ct003388/acces/M2105/Projet/index.php?err3');
           exit();
         }
        if ($_POST['mail']!= $lesEnreg[3] || $_POST['mdpc']!= $lesEnreg[4]) { // si identifiants entrés dans connex ne correspondent pas a ceux dans la BdD : KO
           header('Location:http://isis.unice.fr/~ct003388/acces/M2105/Projet/index.php?err4');
           exit();
       }else{ //donc si les identifiant corresponent on initialise la session avec $_POST['addrEmail']
           $_SESSION['mail'] = $_POST['mail'];
       }
    }
  }
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
	<title> Trombinouc </title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="./style.css">
	</head>


	<body>
		<header> Trombinouc </header>
		<nav>	
			<div class="bar">
      <a  class="active" href="profil.php">Publication</i></a> 
				<a href="addamis.php">Amis</a> 
				<a  href="affProfil.php">Votre Profil</a>
				<a href="modif.php">Modifier le profil</a> 
				<a href="deconnex.php">Déconnecxion</a>  
			</div>
		</nav>
		<section>

			<h1> Voici le fil d'activité</h1>
      <?php /* Publication */ ?>
      <div id="publier">
				<form method="POST" action="./postadd.php">
					<input type="text" placeholder="Ecrire votre publication" name="publier">
					<button type="submit">Publier </button>
				</form>
		</div>   

		<p> Publications récentes : </p>
		
<?php 
include './base.php';
		$timestapDate = time() ;
$sql="SELECT * FROM PUBLICATION ORDER BY date DESC";
$req = $bd->prepare($sql);
$req->execute($marqueurs);
$lesEnreg=$req->fetchall();
$req->closeCursor();

/* echo "<pre><p>";
print_r ($lesEnreg);
echo "</pre>";  */

foreach($lesEnreg as $valeur ){
	echo "<p> {$valeur['auteur']} ({$valeur[date]}) : <br>  {$valeur[message]}  ";
	echo "<form method='GET' action='./commenter.php'>";
  	echo "<button id='add' name='add' type='submit' required autofocus/> Commenter </button>  ";
	echo "</form></p><br><br><br>";
}

//echo "{$lesEnreg[1]['message']} a dit : {$lesEnreg[1][message]} le {$lesEnreg[1][date]} </p>";
?>
		</section>
	</body>
</html> 
