<?php

$username="shovon" || "luc";
$pwd = "123" || "yw27fkbv";
$dbname = "gestion_equipe" || "GestionEquipe";
$host = "localhost"

    try{
        
    }catch(){
    
    }

    try{
        $link = new PDO("mysql:host=$host;dbname=$dbname",$username,$pwd);
    }catch(Exception $err) {
        die('Erreur connection'.$err->getMessage());
    }

?>