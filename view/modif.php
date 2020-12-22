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

	<form action="../php/actionModif.php" method="post">
		NumLicense : <input type="number_format" name="num_licence" value = "<?php echo $numLicence ?> " placeholder="Numero a 10 chiffres" maxlength="10" minlength="10" placeholder="numero de 10 chiffres" required autofocus><br/>
		Nom : <input type="text" name="nom" value = "<?php echo $nom ?> " maxlength="20" required autofocus><br/>
		Prenom : <input type="text" name="prenom" value = "<?php echo $prenom ?> " maxlength="20" required autofocus><br/>
		Date de naissance : <input type="date" name="date_naissance" max="<?php date('Y-m-d') ?>" value = "<?php echo $dateNaissance?> " required autofocus><br/>
		Taille : <input type="number_format" value = "<?php echo $taille ?> " placeholder="cm" name="taille" required autofocus><br/>
		Poids : <input type="number_format" value = "<?php echo $poids ?> "  placeholder="kg" name="poids"  required autofocus><br/>
		Poste <?php echo "préféré" ?> : <input type="text" name="post_pref" value = "<?php echo $postePref ?> " maxlength="20" required autofocus><br/>
		Etat : <input type="text" name="etat" value = "<?php echo $etat ?> " required autofocus><br/>
		Photo : <input type="file" name="photo" value = "<?php echo $photo ?> " required autofocus><br/>
		<input type="hidden" name="numLicenceOrigine" value="<?php echo $numLicenceOrigine?>" >
		
		<input type="submit" name="ajouter" value="modifier">
		<input type="reset" name="zero" value="Reset">
		
	</form>

</body>
</html>