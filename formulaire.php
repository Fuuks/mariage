<?php


	try {
		$host ="db769609296.hosting-data.io";
		$user = "dbo769609296";
		$database = "dbo769609296";
		$passwd = "Notrepartagejesus";

		$conn = new PDO("mysql:host=$host; dbname=$database;", $user, $passwd);
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