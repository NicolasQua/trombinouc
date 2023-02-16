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
    

    <header> TROMBINOUC </header>

        
            
        <section>
            <h1> Inscription</h1>
            
            <form method="POST" action="./connex.php">
                <p>    <label for="nom">Nom</label>        
                    <input id="nom" name="nom" type="text" required autofocus/>
                </p>
                <p>    <label for="prenom">Prénom</label>        
                    <input id="prenom" name="prenom" type="text" required autofocus/>
                </p>
                <p>    <label for="email">Email</label>        
                    <input id="email" name="email" type="text" required autofocus/>
                </p>
                <p><label for="mdp">Mot de passe</label>        
                    <input id="mdp" name="mdp" type="password" required autofocus/>
                </p>
                <p>
                    <button id="inscription" name="inscription" type="submit" value="inscription">Inscription</button>
                </p>

            </p>
            </form>
    </section>
</body>
