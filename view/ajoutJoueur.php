
<!DOCTYPE html>
<html>
<head>
	<title>Ajout de Joueur</title>
</head>
<body>
	<h1>Ajouter un joueur</h1>
	<form action="../php/ajout.php" method="post">
		NumLicense : <input type="number_format" name="num_licence" maxlength="10" minlength="10" placeholder="numero de 10 chiffres" required autofocus><br/>
		Nom : <input type="text" name="nom" maxlength="20" required autofocus><br/>
		Prenom : <input type="text" name="prenom" maxlength="20" required autofocus><br/>
		Date de naissance : <input type="date" name="date_naissance" required autofocus><br/>
		Taille : <input type="number" step="0.01" name="taille" required autofocus><br/>
		Poids : <input type="number" step="0.01" name="poids" required autofocus><br/>
		Poste <?php echo "préféré" ?> : <input type="text" name="post_pref" maxlength="20" required autofocus><br/>
		Etat : <input type="text" name="etat" required autofocus><br/>
		Photo : <input type="file" name="photo" required autofocus><br/>
		
		<input type="submit" name="ajouter" value="Ajouter">
		<input type="reset" name="zero" value="Reset">
		
	</form>

</body>
</html>