<?php

$username="luc";//"luc";
$pwd = "yw27fkbv"; //"yw27fkbv";
$dbname = "GestionEquipe"; //"GestionEquipe";
$host = "localhost";

    try{
        $link = new PDO("mysql:host=$host;dbname=$dbname",$username,$pwd);
    }catch(Exception $e) {
        die('Erreur connection'.$e->getMessage());
    }

?>