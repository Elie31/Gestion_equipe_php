
<!DOCTYPE html>
<html>
<head>
	<title>Ajout de Joueur</title>
</head>
<body>
	<h1>Ajouter un joueur</h1>
	<form enctype="multipart/form-data" action="../php/ajout.php" method="post">
		NumLicense : <input type="number_format" name="numLicence" maxlength="9" minlength="9" placeholder="Numero a 9 chiffres" required pattern="[0-9]{9}" required autofocus><br/>
		Nom : <input type="text" name="nom" maxlength="20" required autofocus><br/>
		Prenom : <input type="text" name="prenom" maxlength="20" required autofocus><br/>
		Date de naissance : <input type="date" name="dateNaissance" max="<?php date('d/m/Y') ?>" required autofocus><br/>
		Taille : <input type="number" name="taille" placeholder="cm" required autofocus><br/>
		Poids : <input type="number" name="poids" placeholder="kg" required autofocus><br/>
		Poste <?php echo "préféré" ?> : <input type="text" name="postPref" maxlength="20" required autofocus><br/>

		Etat : <select name="etat" required autofocus>
					<option value="Actif">Actif</option>
					<option value="Blesse">Blessé</option>
					<option value="Suspendu">Suspendu</option>
					<option value="Acbsent">Absent</option>
				</select><br/>

		Photo : <input type="file" name="fileselect" required autofocus><br/>
		
		<input type="submit" name="submit" value="Ajouter">
		<input type="reset" name="zero" value="Reset">
		
	</form>

</body>
</html>