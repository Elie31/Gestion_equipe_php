<?php

    require_once '../php/connect.php';

    $option = $_POST['option'];

    if(count($_POST['joueur']) < 6){
        header('Location: ../view/feuilleMatch.php');
        exit();
    }else{
     
        foreach($_POST['joueur'] as $valeur){

            if($option == "1"){
                $opt1 = "Titulaire";
                echo "Joueur : <b>" . $valeur . "</b><br>" .$opt1."</b><br>";
            }elseif($option == "0"){
                $opt2 = "Remplaçant";
                echo "Joueur : <b>" . $valeur . "</b><br>" .$opt2."</b><br>";
            }
        
			
			
		}
    }
    
    

?>