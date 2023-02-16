<?php
	include 'session.php';
?>
<?php 
    if(empty($_POST['nom'])){

    }else{
        $sql="UPDATE PROFIL SET nom = :nom WHERE email = :email";
        $req = $bd->prepare($sql);
        $marqueurs=array('nom'=>$_POST['nom'],'email'=>$_SESSION['mail']);
        $req->execute($marqueurs);
        $lesEnreg=$req->fetch();
        $req->closeCursor();
    }
    if(empty($_POST['prenom'])){

    }else{
        $sql="UPDATE PROFIL SET prenom = :prenom WHERE email = :email";
        $req = $bd->prepare($sql);
        $marqueurs=array('prenom'=>$_POST['prenom'],'email'=>$_SESSION['mail']);
        $req->execute($marqueurs);
        $lesEnreg=$req->fetch();
        $req->closeCursor();
    }
    if(empty($_POST['email'])){

    }else{
        $sql="UPDATE PROFIL SET email = :mail WHERE email = :email";
        $req = $bd->prepare($sql);
        $marqueurs=array('mail'=>$_POST['email'],'email'=>$_SESSION['mail']);
        $req->execute($marqueurs);
        $lesEnreg=$req->fetch();
        $req->closeCursor();
    }
    if(empty($_POST['mdp'])){

    }else{
        $sql="UPDATE PROFIL SET mdp = :mdp WHERE email = :email";
        $req = $bd->prepare($sql);
        $marqueurs=array('mdp'=>$_POST['mdp'],'email'=>$_SESSION['mail']);
        $req->execute($marqueurs);
        $lesEnreg=$req->fetch();
        $req->closeCursor();
    }
        //header('location:profil.php');
        echo '<pre>';
        print_r($_SESSION);
        print_r($_POST);
        echo '</pre>';
    
?> 
