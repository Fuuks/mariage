<?php


	try {
		$host ="mysql:host=mysql-mariagedecrisetchristy.alwaysdata.net;dbname=mariagedecrisetchristy_db";
		$user = "399475_user_root";
		
		$passwd = "";

		$conn = new PDO($host, $user, $passwd);
		$conn->exec('SET NAMES utf8');
	} catch ( PDOException $e ) {
		die( 'Connection failed: ' . $e->getMessage() );
	}

	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
    $portable =  $_POST['portable'];
    $present = $_POST['present'];

	if($present == "oui"){
		$horaire = $_POST['horaire'];
		$nb_personnes = $_POST['nb_personnes'];
		$req = $conn->prepare('INSERT INTO inscription (nom, prenom, portable, present, horaire, nb_personnes) VALUES (?, ?, ?, ?, ?,?)');
		$req->execute(array($nom,$prenom,$portable,$present,$horaire,$nb_personnes));

	}else{
		$req = $conn->prepare('INSERT INTO inscription (nom, prenom, portable, present) VALUES (?, ?, ?, ?)');
		$req->execute(array($nom,$prenom,$portable,$present));	
	}

	 header('Location:formulaire-presence.php?present='.$present);
?>