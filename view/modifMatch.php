<?php 

session_start(); 

if($_SESSION['user'] == 'admin'){

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
  
  $lieu_match = $_POST['lieu_match'];
  $heure = $_POST['heure'];
  $nom_tournoi = $_POST['nom_tournoi'];
  $date_match = $_POST['date_match'];
  $nom_equipe = $_POST['nom_equipe'];
  


	?>

	<form  action="../php/modif_Match.php" method="post">
        Lieu du Match : <input type="text" name="lieu_match" value = "<?php echo $lieu_match ?>" required autofocus><br/>
		Heure du Match : <input type="time" name="heure" value = "<?php echo $heure ?>" required autofocus><br/>
		Nom du Tournoi : <input type="text" name="nom_tournoi" value = "<?php echo $nom_tournoi ?>" required autofocus><br/>
		Date du match : <input type="date" name="date_match" min="2000-01-01" value = "<?php echo $date_match ?>" required autofocus><br/>
        Nom Equipe adverse: <input type="text" name="nom_equipe" value = "<?php echo $nom_equipe ?>" required autofocus><br/>
		
        <input type="submit" name="submit" value="modifier">
		<input type="reset" name="zero" value="Reset">
		
	</form>

</body>
</html>

<?php 

}else{
	header('Location: ../view/login.php');
}

?>