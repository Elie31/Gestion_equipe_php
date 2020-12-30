<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		print_r($_POST);

		$numLicence = $_POST['numLicence'];
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$dateNaissance = $_POST['dateNaissance'];
		$taille = $_POST['taille'];
		$poids = $_POST['poids'];
		$photo = $_POST['photo'];
		$postePref = $_POST['postePref'];
		$etat = $_POST['etat'];
		$numLicenceOrigine = $_POST['numLicence'];

		printf($dateNaissance,$poids,$taille);


	?>

	<form enctype="multipart/form-data" action="../php/actionModif.php" method="post">
		NumLicence : <input type="number_format" name="numLicence" value = "<?php echo $numLicence ?>" placeholder="Numero a 10 chiffres" maxlength="10" minlength="10" placeholder="numero de 10 chiffres" required autofocus><br/>
		Nom : <input type="text" name="nom" value = "<?php echo $nom ?>" maxlength="20" required autofocus><br/>
		Prenom : <input type="text" name="prenom" value = "<?php echo $prenom ?> " maxlength="20" required autofocus><br/>
		Date de naissance : <input type="date" name="dateNaissance" max="<?php date('Y-m-d') ?>" value = "<?php echo $dateNaissance?>" required autofocus><br/>
		Taille : <input type="number_format" value = "<?php echo $taille ?>" placeholder="cm" name="taille" required autofocus><br/>
		Poids : <input type="number_format" value = "<?php echo $poids ?>"  placeholder="kg" name="poids"  required autofocus><br/>
		Poste <?php echo "préféré" ?> : <input type="text" name="postePref" value = "<?php echo $postePref ?>" maxlength="20" required autofocus><br/>

		Etat : <select name="etat" required autofocus>
					<option value="<?php echo $etat ?>"><?php echo $etat ?></option>
					<option value="Actif">Actif</option>
					<option value="Blessé">Blessé</option>
					<option value="Suspendu">Suspendu</option>
					<option value="Acbsent">Absent</option>
				</select><br/>

		Photo : <input type="file" name="fileselect" value = "<?php echo $photo ?>" required autofocus><br/>
		<input type="hidden" name="numLicenceOrigine" value="<?php echo $numLicenceOrigine ?>" >
		
		<input type="submit" name="submit" value="modifier">
		<input type="reset" name="zero" value="Reset">
		
	</form>

</body>
</html>