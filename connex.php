<?php 
include 'base.php';
if($_POST['inscription'] == 'inscription'){
	
	$sql="INSERT INTO PROFIL ( nom, prenom, email, mdp) VALUES ( :nom, :prenom, :email, :mdp)";
	$req = $bd->prepare($sql);
	$marqueurs=array('nom'=>$_POST['nom'],'prenom'=>$_POST['prenom'],'email'=>$_POST['email'],'mdp'=>$_POST['mdp']);
	$req->execute($marqueurs);
	$lesEnreg=$req->fetch();
	$req->closeCursor();
	header('location:index.php?connex=1');
	debug($lesEnreg);
}
	
if($_POST['connection'] == 'connection'){echo "test";
	$sql="SELECT * FROM PROFIL WHERE email = :mail AND mdp = :mdpc";
	$req = $bd->prepare($sql);
	$marqueurs=array('mail'=>$_POST['mail'],'mdpc'=>$_POST['mdpc']);
	$req->execute($marqueurs);
	$lesEnreg=$req->fetch();

	$req->closeCursor();

	if(empty($lesEnreg)){
	header('location:index.php?error=2');
	}else{
	header('location:profil.php');
	}

}
?>
