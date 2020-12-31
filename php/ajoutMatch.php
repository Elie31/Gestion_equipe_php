<?php
        require_once '../php/connect.php';


        if(isset($_POST['lieu_match']) && (!empty($_POST['lieu_match'])) && 
        (isset($_POST['heure'])) && (!empty($_POST['heure'])) &&
        (isset($_POST['nom_tournoi'])) && (!empty($_POST['nom_tournoi'])) &&
        (isset($_POST['date_match'])) && (!empty($_POST['date_match'])) &&
        (isset($_POST['nom_equipe'])) && (!empty($_POST['nom_equipe']))){

        
            $lieu_match = $_POST['lieu_match'];
            $heure = $_POST['heure'];
            $nom_tournoi = $_POST['nom_tournoi'];
            $date_match = $_POST['date_match'];
            $nom_equipe = $_POST['nom_equipe'];
            

            $verifMatch = $link->prepare('SELECT * FROM MatchVolley WHERE dateM = ? AND heureM = ?');
            $verifMatch->execute(array($date_match,$heure));
            $match=$verifMatch->fetch();

            if($match){
                header('Location: ../view/saisieMatch.php');   
            }else{
                $req = $link->prepare('INSERT INTO MatchVolley(dateM,lieuM,heureM,nomTournoi,nomEquipeAdv)
                VALUES(?,?,?,?,?)');
                $req->execute(array($date_match,$lieu_match,$heure,$nom_tournoi,$nom_equipe));
                
                header('Location: ../view/accueil.php');    
            }
        }

?>