<?php
	
	require_once '../php/connect.php';

	print_r($_POST);
	$numLicence = $_POST['numLicence'];

	$req = $link->prepare("DELETE FROM Joueur WHERE numLicence=:num");

	if (!$req) {
		echo "\nnpdo::errorInfo(): preparjne \n";
		print_r($linkpdo->errorInfo());
	}

	$req->execute(array('num'=>$numLicence));

	

	header('Location: ../view/accueil.php');
?>