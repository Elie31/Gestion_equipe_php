<?php

	require_once '../php/connect.php';

	$numLicence = $_POST['numLicence'];
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$dateNaissance = $_POST['dateNaissance'];
	$taille = $_POST['taille'];
	$poids = $_POST['poids'];
	$photo = $_POST['photo'];
	$postePref = $_POST['postePref'];
	$etat = $_POST['etat'];
	$numLicenceOrigine = $_POST['numLicenceOrigine'];



	if($date_naissance > date('Y-m-j')){
		echo"Date trop grande";
	}




	$req = $link->prepare("UPDATE Joueur SET numLicence = :numLicence, nom = :nom, prenom = :prenom, dateNaissance = :dateNaissance, taille = :taille, poids = :poids, photo = :photo, postePref = :postePref, etat = :etat WHERE numLicence = :numLicenceOrigine");

	if (!$req) {
		echo "\nnpdo::errorInfo(): prepare \n";
		print_r($link->errorInfo());
	}

	$returnExecute = $req->execute(array('numLicence'=>$numLicence,'nom'=>$nom,'prenom'=>$prenom,'dateNaissance'=>$dateNaissance,'taille'=>$taille,'poids'=>$poids,'photo'=>$photo,"postePref"=>$postePref,"etat"=>$etat,"numLicenceOrigine"=>$numLicenceOrigine));



	if (!$returnExecute) {
		echo "\nnpdo::errorInfo(): execute\n";
		print_r($link->errorInfo());
		print_r($link->errorCode());
		print_r($req->debugDumpParams());

	}

	header('Location: ../view/accueil.php');

?>