<?php
		session_start();
?>
<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title> Trombinouc </title>
        <link rel="stylesheet" href="./style.css">
    </head>

<?php
include "./base.php";
?>

<body>
    

    <header> Trombinouc </header>
		
		   <nav>	
			<div class="bar">
				<a  href="profil.php">Publication</i></a> 
				<a class="active" href="addamis.php">Amis</a> 
				<a href="affProfil.php">Votre Profil</a>
				<a href="modif.php">Modifier le profil</a> 
				<a href="deconnex.php">Déconnecxion</a> 
			</div>
		</nav>
		
		<div id="rechercheAmis">
				<form method="GET" action="./recherche.php">
					<input type="text" placeholder="Trouvez un ami..." name="recherche">
					<button type="submit"><img src="Images/magnifier.png"></button>
				</form>
		</div>   

<form method="GET" action="./index.php">
   <button id="add" name="add" type="submit" required autofocus/> Publier </button>  
</form>
</body>
