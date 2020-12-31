<?php

	require_once '../php/connect.php';

    $lieu_match = $_POST['lieu_match'];
    $heure = $_POST['heure'];
    $nom_tournoi = $_POST['nom_tournoi'];
    $date_match = $_POST['date_match'];
    $nom_equipe = $_POST['nom_equipe'];


	$req = $link->prepare("UPDATE MatchVolley SET dateM = ?,lieuM = ?,heureM = ?,nomTournoi = ?,nomEquipeAdv = ?");

	$returnExecute = $req->execute(array($date_match,$lieu_match,$heure,$nom_tournoi,$nom_equipe));


	header('Location: ../view/accueil.php');

?>