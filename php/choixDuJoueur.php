<?php

    require_once '../php/connect.php';

            $req = $link->prepare('SELECT * FROM Joueur WHERE numLicence LIKE ?');
            $req->execute(array($num_licence));

            
    foreach($_POST['joueur'] as $valeur){
        
        echo "Joueur : <b>" . $valeur . "</b><br>";

    }

?>