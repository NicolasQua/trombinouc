<?php
	try {$bd = new PDO("mysql:host=localhost;dbname=ct003388","ct003388", "ct003388827c");
		$bd->exec ('SET NAMES utf8') ;
		} 
		catch (Exception $e){
			die ("Erreur: Connexion à la base impossible");
		}
?>
