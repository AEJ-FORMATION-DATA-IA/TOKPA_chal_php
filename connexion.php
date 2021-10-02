<?php
	try {
    $bdd = new PDO('mysql:host=localhost;dbname=bd_membres;charset=utf8', 'root', '');
	} 
	catch (Exception $e) {
	    die('Erreur : ' . $e->getMessage());
	}

	//selection
	$select_mail = $bdd->prepare('SELECT * FROM membre WHERE mail=?');
    $select_compte = $bdd->prepare('SELECT * FROM membre WHERE mail=? AND pass=?');
    $req_select_rapport = "SELECT * FROM rapport ORDER BY date_rapport DESC";
	$select_membre = $bdd->prepare('SELECT * FROM membre WHERE id=?');


    //insertion
    $inscription_membre = $bdd->prepare('INSERT INTO membre (pseudo, mail, pass) VALUES (?, ?, ?)');
    $ajouter_rapport = $bdd->prepare('INSERT INTO rapport (pseudo, mail, rapp) VALUES (?, ?, ?)');
   
?>