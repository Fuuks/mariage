<?php


	try {
		$host ="mysql:host=db752003822.db.1and1.com;dbname=db752003822";
		$user = "dbo752003822";
		
		$passwd = "Jpgatien1993?";

		$conn = new PDO($host, $user, $passwd);
		$conn->exec('SET NAMES utf8');
	} catch ( PDOException $e ) {
		die( 'Connection failed: ' . $e->getMessage() );
	}

	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
    $portable =  $_POST['portable'];
    $present = $_POST['present'];
    $horaire = $_POST['horaire'];
	$nb_personnes = $_POST['nb_personnes'];

	if($present == "oui"){
		$req = $conn->prepare('INSERT INTO inscription VALUES (?, ?, ?, ?, ?,?)');
		$req->execute(array($nom,$prenom,$portable,$present,$horaire,$nb_personnes));

	}else{
		$req = $conn->prepare('INSERT INTO inscription VALUES (?, ?, ?, ?)');
		$req->execute(array($nom,$prenom,$portable,$present));	
	}

	 header('Location:formulaire-presence.php?present='.$present);
?>