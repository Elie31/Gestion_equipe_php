<?php

$username="luc";
$pwd = "yw27fkbv";
$dbname = "GestionEquipe";
$host = "localhost";

    try{
        $link = new PDO("mysql:host=$host;dbname=$dbname",$username,$pwd);
    }catch(Exception $e) {
        die('Erreur connection'.$e->getMessage());
    }

?>