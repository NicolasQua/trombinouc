<?php 
include 'session.php';
		$timestapDate = time() ;
$sql="INSERT INTO PUBLICATION(message,auteur , date )VALUES (:message,:auteur,NOW())";
$req = $bd->prepare($sql);
$marqueurs=array('message'=>$_POST['publier'],'auteur'=>$_SESSION['prenom']);
$req->execute($marqueurs);
$lesEnreg=$req->fetch();
$req->closeCursor();
header('location:profil.php');
//print_r ($lesEnreg);

//$auteur = $lesEnreg[0];
//print_r($lesEnreg);
//echo $auteur;
//echo "bonjour";
?>

