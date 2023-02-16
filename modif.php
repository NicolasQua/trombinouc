<?php 
    include 'session.php';
?>
<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title> Trombinouc </title>
        <link rel="stylesheet" href="./style.css">
    </head>

<?php 

?> 

<body>
    

    <header> TROMBINOUC </header>

    <nav>	
			<div class="bar">
                <a href="profil.php">Publication</i></a> 
				<a href="addamis.php">Amis</a> 
				<a href="affProfil.php">Votre Profil</a>
				<a class="active" href="modif.php">Modifier le profil</a> 
				<a href="deconnex.php">Déconnecxion</a> 
			</div>
	</nav>
            
        <section>
            <h1> Modification de votre profil </h1>
            
            <form method="POST" action="editprofil.php">
                <p>    <label for="nom">Nom</label>        
                    <input id="nom" name="nom" type="text" autofocus/>
                </p>
                <p>    <label for="prenom">Prénom</label>        
                    <input id="prenom" name="prenom" type="text" autofocus/>
                </p>
                <p>    <label for="email">Email</label>        
                    <input id="email" name="email" type="text"  autofocus/>
                </p>
                <p><label for="mdp">Mot de passe</label>        
                    <input id="mdp" name="mdp" type="password" autofocus/>
                </p>
                <p>
                    <button id="modif" name="modif" type="submit" value="modif">Modification</button>
                </p>

            </p>
            </form>
    </section>
</body>
