<?php

        require_once '../php/connect.php';

        if(isset($_POST['num_licence']) && (!empty($_POST['num_licence'])) && 
        (isset($_POST['nom'])) && (!empty($_POST['nom'])) &&
        (isset($_POST['prenom'])) && (!empty($_POST['prenom'])) &&
        (isset($_POST['date_naissance'])) && (!empty($_POST['date_naissance'])) &&
        (isset($_POST['taille'])) && (!empty($_POST['taille'])) &&
        (isset($_POST['poids'])) && (!empty($_POST['poids'])) &&
        (isset($_POST['post_pref'])) && (!empty($_POST['post_pref'])) &&
        (isset($_POST['etat'])) && (!empty($_POST['etat'])) &&
        (isset($_POST['photo'])) && (!empty($_POST['photo']))){

            $num_licence = $_POST['num_licence'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $date_naissance = $_POST['date_naissance'];
            $taille = $_POST['taille'];
            $poids = $_POST['poids'];
            $post_pref = $_POST['post_pref'];
            $etat = $_POST['etat'];
            $photo = $_POST['photo'];


            $verifJoueur = $link->prepare('SELECT COUNT(*) FROM Joueur WHERE numLicence = ?');
            $verifJoueur->execute(array($num_license));
            $verifJoueur->fetchColumn();

            var_dump($verifJoueur->fetchColumn());

            if($verifJoueur->fetchColumn() > 0){

                echo 'Le joueur exite déjà, retour sur la page précédente ...';
                sleep(100);
                header('Location: ../view/ajoutJoueur.php');

            }else{
                

                $req = $link->prepare('INSERT INTO Joueur(numLicence,nom,prenom,dateNaissance,taille,poids,photo,postePref,etat)
                VALUES(?,?,?,?,?,?,?,?,?)');
                $req->execute(array($num_licence,
                                    $nom,
                                    $prenom,
                                    $date_naissance,
                                    $taille,
                                    $poids,
                                    $photo,
                                    $post_pref,
                                    $etat));

                header('Location: ../view/accueil.php');
            }

        }

           

     
        
     
      

        

?>