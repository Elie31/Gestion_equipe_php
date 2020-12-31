<?php 

session_start(); 

if($_SESSION['user'] == 'admin'){

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ajout de Match</title>
</head>
<body>
	<h1>Ajouter de Match</h1>
	<form action="../php/ajoutMatch.php" method="post">
		Lieu du Match : <input type="text" name="lieu_match" placeholder="Lieu" required autofocus><br/>
		Heure du Match : <input type="time" name="heure" required autofocus><br/>
		Nom du Tournoi : <input type="text" name="nom_tournoi" required autofocus><br/>
		Date du match : <input type="date" name="date_match" min="2000-01-01" required autofocus><br/>
        Nom Equipe adverse: <input type="text" name="nom_equipe" required autofocus><br/>
		
		<input type="submit" name="submit" value="Ajouter">
		<input type="reset" name="zero" value="Reset">
		
	</form>

</body>
</html>

<?php 

}else{
	header('Location: ../view/login.php');
}

?>