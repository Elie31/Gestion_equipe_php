<?php

$username="shovon";
$pwd = "123";
$dbname = "gestion_equipe";
$host = "localhost";

    try{
        $link = new PDO("mysql:host=$host;dbname=$dbname",$username,$pwd);
    }catch(Exception $e) {
        die('Erreur connection'.$e->getMessage());
    }

?>