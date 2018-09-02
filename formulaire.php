<?php


	try{
		$host ="db752003822.db.1and1.com";
		$user = "dbo752003822";
		$bdd = "db752003822";
		$passwd = "Jpgatien1993?";

		$bdd = new PDO('$host;dbname=$bdd;charset=utf8',$user,$passwd);
	}
	catch (Exception $e)
	{

		die('Erreur : ' . $e->getMessage());
	}

	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
    $portable =  $_POST['portable'];
    $present = $_POST['present'];
    $horaire = $_POST['horaire'];
    $nb_personnes = $_POST['nb_personnes'];


	echo $nom;
	echo $prenom;
/*
	 if(){
    	//$bdd->exec('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES());

    }else{
		//$bdd->exec('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES());    	
    }
    
	
	$bdd->exec('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES());

 */
    header('Location:formulaire-presence.php?present='.$present); 
  
?>