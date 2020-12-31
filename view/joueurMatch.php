<?php 

session_start(); 

if($_SESSION['user'] == 'admin'){

?>

<!DOCTYPE html>
<html>
<head>
	<title>FEUILLE MATCH</title>
</head>
<body>
		
	<h1>JOUEUR INSCRIT AU MATCH</h1>

	<?php

		/// ICI CA BUG
		foreach($_POST['joueur'] as $valeur){
        
			echo "Joueur : <b>" . $valeur . "</b><br>";
			
		}
	?>


	

</body>
</html>

<?php 

}else{
	header('Location: ../view/login.php');
}

?>