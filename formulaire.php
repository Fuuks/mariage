<?php


	try {
		$host ="mysql:host=mysql-event-wedding.alwaysdata.net;dbname=event-wedding_w";
		$user = "268384_w";
		
		$passwd = "Pswd268384_w?!";

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

	 header('Location:contact.php?present='.$present);
?>