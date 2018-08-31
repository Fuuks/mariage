<?php


	/*try{
		$host ="mysql:host=localhost";
		$user = votre_login;
		$bdd = Nom_de_la_base_de_donnees;
		$passwd = Mot_de_passe;

	//	$bdd = new PDO('$host;dbname=test;charset=utf8',$user,$passwd);
	}
	catch (Exception $e)
	{

	//	die('Erreur : ' . $e->getMessage());
	}*/

	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
    $portable =  $_POST['portable'];
    $present = $_POST['present'];
    $horaire = $_POST['horaire'];
    $nb_personnes = $_POST['nb_personnes'];


//    if(){
    	//$bdd->exec('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES());

  //  }else{
		//$bdd->exec('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES());    	
    //}
    
	// On ajoute une entrée dans la table jeux_video
	//$bdd->exec('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES());


    header('Location:formulaire-presence.php?present='.$present); 
  
?>