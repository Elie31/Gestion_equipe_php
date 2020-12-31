<?php
	
	require_once '../php/connect.php';


	$id = $_POST['id'];

    $req = $link->prepare("DELETE FROM MatchVolley WHERE id_Match = ?");
    $req->execute(array($id));


	header('Location: ../view/accueil.php');
?>