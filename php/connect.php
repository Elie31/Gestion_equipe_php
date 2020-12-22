<?php

$username="shovon";//"luc";
$pwd = "123"; //"yw27fkbv";
$dbname = "gestion_equipe"; //"GestionEquipe";
$host = "localhost";

    try{
        $link = new PDO("mysql:host=$host;dbname=$dbname",$username,$pwd);
    }catch(Exception $e) {
        die('Erreur connection'.$e->getMessage());
    }

?>