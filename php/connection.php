<?php

session_start();
	
	require_once '../php/connect.php';

    if(isset($_POST['user']) && (!empty($_POST['user'])) && 
        (isset($_POST['pwd'])) && (!empty($_POST['pwd']))){

    $user = $_POST['user'];
    $pwd = $_POST['pwd'];

    $req = $link->prepare('SELECT * FROM Admin WHERE user = ? AND pwd = ?');
    $req->execute(array($user,$pwd));

    if($data = $req->fetch()){
        $_SESSION['user'] = $user;
    }else{
        header('Location: ../view/login.php');
    }

    if(isset($_SESSION['user'])){
        header('Location: ../view/accueil.php');
    }else{
        header('Location: ../view/login.php');
    }
    
    

	

   
    
}
?>