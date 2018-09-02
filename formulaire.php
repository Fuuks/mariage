<?php


	try {
		$host ="mysql:host=db752003822.db.1and1.com;dbname=db752003822";
		$user = "dbo752003822";
		
		$passwd = "Jpgatien1993?";

		$conn = new PDO($host, $user, $passwd);
	
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

		$req = $conn->prepare('INSERT INTO inscription VALUES (?, ?, ?, ?, ?,?)');

		$req->execute(array($nom,$prenom,$portable,$present,$horaire,$nb_personnes));
		header('Location:index.html');
		
    }else{
		$sql ="INSERT INTO inscription (nom,prenom,portable,present) VALUES ('$nom','$prenom','$portable','$present')";
		$res = $conn->exec($sql);

		
		if($res == 1){
			header('Location:formulaire-presence.php?present='.$present); 
		}
		
	 }
	 
	 echo $res;
    
   
  
?>