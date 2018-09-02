<?php


	try {
		$host ="mysql:host=db752003822.db.1and1.com;dbname=db752003822";
		$user = "dbo752003822";
		
		$passwd = "Jpgatien1993?";

		$conn = new PDO($host, $user, $passwd);
		$conn->setAttribute( PDO::ATTR_PERSISTENT, TRUE );
		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	} catch ( PDOException $e ) {
		die( 'Connection failed: ' . $e->getMessage() );
	}

	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
    $portable =  $_POST['portable'];
    $present = $_POST['present'];
    $horaire = $_POST['horaire'];
    $nb_personnes = $_POST['nb_personnes'];


	echo $nom;
	echo $prenom;

	 if($present == "oui"){
		$sql ="INSERT INTO inscription VALUES ('$nom','$prenom','$portable','$present','$horaire','$nb_personnes')";
		$res = $conn->exec($sql);

		if($res==1){
			header('Location:formulaire-presence.php?present='.$present); 
		}
    }else{
		$sql ="INSERT INTO inscription (nom,prenom,portable,present) VALUES ('$nom','$prenom','$portable','$present')";
		$res = $conn->exec($sql);

		if($res == 1){
			header('Location:formulaire-presence.php?present='.$present); 
		}
		
 	}
    
   
  
?>