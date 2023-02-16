<?php 
    include 'base.php';
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

        
            
        <section>
            <h1> Vous devenez vous connecter</h1>
            
            <?php
                if($_GET['?error'] == 2){
                echo "<strong>Erreur d'authentification. Login ou mot de passe incorrect  </strong>";
                }
                if($_GET['connex'] == 1){
                    echo "<strong>Vous avez été correctement inscrit, vous pouvez connectez !</strong>";
                }
                if($_GET['deco']== 3){
                    echo "<strong>Vous avez été déconnecté ! Revenez vite !</strong>";
                }
            ?>        
            
            
            
            <form method="POST" action="./profil.php">
                <p>    <label for="email">Email</label>        
                    <input id="mail" name="mail" type="text" required autofocus/>
                </p>
                <p>    <label for="mdp">Mot de passe</label>
                    <input id="mdpc" name="mdpc" type="password" required />
                </p>
                <p>
                    <button id="connection" name="connection" type="submit" value="connection">Connnexion</a></button>
                </p>
                
            
            
            
            <p>Vous n'êtes pas encore inscrit ? <a href='./inscription.php'>Inscrivez vous !</a></p>

            </p>
            </form>
    </section>
</body>
