<?php
        require_once '../php/connect.php';
        //print_r($_POST);


        if(isset($_POST['num_licence']) && (!empty($_POST['num_licence'])) && 
        (isset($_POST['nom'])) && (!empty($_POST['nom'])) &&
        (isset($_POST['prenom'])) && (!empty($_POST['prenom'])) &&
        (isset($_POST['date_naissance'])) && (!empty($_POST['date_naissance'])) &&
        (isset($_POST['taille'])) && (!empty($_POST['taille'])) &&
        (isset($_POST['poids'])) && (!empty($_POST['poids'])) &&
        (isset($_POST['post_pref'])) && (!empty($_POST['post_pref'])) &&
        (isset($_POST['etat'])) && (!empty($_POST['etat']))/* &&
        (isset($_POST['fileselect'])) && (!empty($_POST['fileselect']))*/){





            $num_licence = $_POST['num_licence'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $date_naissance = $_POST['date_naissance'];
            $taille = $_POST['taille'];
            $poids = $_POST['poids'];
            $post_pref = $_POST['post_pref'];
            $etat = $_POST['etat'];
            $photo = basename($_FILES["fileselect"]["name"]);
            
            //var_dump($photo);

            if($date_naissance > date('Y-m-j')){
                header('Location: ../view/ajoutJoueur.php');
                exit();
            }

            $verifJoueur = $link->prepare('SELECT * FROM Joueur WHERE numLicence LIKE ?');
            $verifJoueur->execute(array($num_licence));
            $joueur=$verifJoueur->fetch();

            if($joueur){
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

                //répertoire de déstination
                $target_dir = "/var/www/html/projetPHP/Gestion_equipe_php/photo/";
                $target_file = $target_dir.basename($_FILES["fileselect"]["name"]);
                //on initialise la variable update ok
                $uploadOk = 1;
                //on recup l'extention du fichier
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                 
                //on a cliqué sur le bouton qui s'appel submit
                if(isset($_POST["submit"])) {
                    //fichier image?
                    $check = getimagesize($_FILES["fileselect"]["tmp_name"]);
                    if($check !== false) {
                        //echo "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                    } else {
                        $message = "Le fichier n'est pas une image valide.";
                        //echo $message;
                        $uploadOk = 0;
                    }
                }
                // le fichier existe déjà?
                /*if (file_exists($target_file)) {
                    $message = "Erreur! le fichier image existe déjà.";
                    //echo $message;
                    $uploadOk = 0;
                }*/
                // le poid de l'image
                if ($_FILES["fileselect"]["size"] > 500000) {
                    $message = "Le fichier selectionné est trop volumineux.";
                    //echo $message;
                    $uploadOk = 0;
                }
                // les formats autorisés
                if($imageFileType != "jpg" &&$imageFileType != "JPG"&& $imageFileType != "png" && $imageFileType != "PNG" && $imageFileType != "jpeg" && $imageFileType != "JPEG" && $imageFileType != "gif" && $imageFileType != "GIF") {
                     
                    $message = "Les images doivent etre au format: JPG, JPEG, PNG ou GIF.";
                    //echo $message;
                    $uploadOk = 0;
                }
                // erreur
                if ($uploadOk == 0) {
                    $message = "Erreur! impossible d'ajouter l'image.";
                    //echo ($message);
                     
                // tt c'est bien passé
                } else {
                    if (move_uploaded_file($_FILES["fileselect"]["tmp_name"], $target_file)) {
                         
                             
                            //$message = "Image ajoutée avec succès.";
                                 
                            //echo $message;
                             
                    } else {
                        $message = "Erreur inconnue! Merci de retenter l'ajout plus tard ou de contacter l'administrateur.";
                        //echo $message;
                    }
                }
                header('Location: ../view/accueil.php');    
            }
        }

?>