
<!DOCTYPE html>
<html>
<head>
	<title>Ajout de Joueur</title>
</head>
<body>
	<h1>Ajouter un joueur</h1>
	<form action="../php/ajout.php" method="post">
		NumLicense : <input type="number_format" name="num_licence" maxlength="10" minlength="10" placeholder="Numero a 10 chiffres commençant par 1" required pattern="[0-9]{10}" required autofocus><br/>
		Nom : <input type="text" name="nom" maxlength="20" required autofocus><br/>
		Prenom : <input type="text" name="prenom" maxlength="20" required autofocus><br/>
		Date de naissance : <input type="date" name="date_naissance" max="<?php date('d/m/Y') ?>" required autofocus><br/>
		Taille : <input type="number" name="taille" placeholder="cm" required autofocus><br/>
		Poids : <input type="number" name="poids" placeholder="kg" required autofocus><br/>
		Poste <?php echo "préféré" ?> : <input type="text" name="post_pref" maxlength="20" required autofocus><br/>
		Etat : <input type="text" name="etat" required autofocus><br/>
		Photo : <input type="file" name="photo" required autofocus><br/>
		
		<input type="submit" name="ajouter" value="Ajouter">
		<input type="reset" name="zero" value="Reset">
		
	</form>

</body>
</html>