<?php 
    include "session.php";
?> 
<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title> Trombinouc </title>
        <link rel="stylesheet" href="./style.css">
    </head>



<body>
    

    <header> TROMBINOUC </header>

    <nav>	
			<div class="bar">
				<a  href="profil.php">Publication</i></a> 
				<a href="addamis.php">Amis</a> 
				<a class="active" href="affProfil.php">Votre Profil</a>
				<a href="modif.php">Modifier le profil</a> 
				<a href="deconnex.php">Déconnecxion</a> 
			</div>
		</nav>
            
        <section>
            <h1> Voici votre profil</h1>$
            <p>
                <?php 
                    $sql = "SELECT * FROM PROFIL WHERE email = :mail"; 
                    $req = $bd->prepare ($sql); 
                    $marqueurs=array('mail'=>$_SESSION['mail']);
                    $req->execute ($marqueurs); 
                    $lesEnreg = $req->fetchall (); 
                    $req->closeCursor ();
                    echo "<pre>";
                    print_r($_lesEnreg);
                    echo "</pre>";
                    echo "Votre nom : $_lesEnreg[1] <br>";
                    echo "Votre prénom : $_lesEnreg[2] <br>";
                    echo "Votre mail : $_lesEnreg[3] <br>";
                    echo 'Votre photo de Profil **Work in Progress**';
                ?>
            </p>
            </form>
    </section>
</body>
