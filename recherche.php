<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title> Trombinouc </title>
        <link rel="stylesheet" href="./style.css">
    </head>


<?php 	
include "./base.php";
include '../Outils/outils.php';
	$sql="SELECT * FROM PROFIL WHERE prenom = :recherche OR nom = :recherche";
	$req = $bd->prepare($sql);
	$marqueurs=array('recherche'=>$_GET['recherche']);
	$req->execute($marqueurs);
	$lesEnreg=$req->fetch();
	$req->closeCursor();  
	
	

	
echo "<p> {$lesEnreg[nom]} {$lesEnreg[prenom]} a été trouvé dans la base de donnée. </p>";
//debug ($lesEnreg);


?>
	
<form method="GET" action="./index.php">
   <button id="add" name="add" type="submit" required autofocus/> Envoyer une demande d'amis </button>  
</form>
             
