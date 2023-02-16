<?php
		session_start();
		
//include './base.php';
?>
<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title> Trombinouc </title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
    

    <header> Trombinouc </header>
		
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

</body>








