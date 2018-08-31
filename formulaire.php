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

	echo $_POST['nom'];
	echo $_POST['prenom'];
    echo $_POST['portable'];
    echo $_POST['present'];
    echo $_POST['horaire'];
    echo $_POST['nb_personnes'];


//    if(){
    	//$bdd->exec('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES());

  //  }else{
		//$bdd->exec('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES());    	
    //}
    
	// On ajoute une entrée dans la table jeux_video
	//$bdd->exec('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES());


    //echo $to;
  
?>