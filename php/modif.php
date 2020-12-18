<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

		$numLicence = $_POST['numLicence']
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$dateNaissance = $_POST['dateNaissance'];
		$taille = $_POST['taille'];
		$poids = $_POST['poids'];
		$photo = $_POST['photo'];
		$postePref = $_POST['postePref'];
		$etat = $_POST['etat'];

		printf($nom);


	?>

	<form action="../php/actionModif.php" method="post">
		NumLicense : <input type="number_format" name="num_licence" value = "<?php echo $numLicence ?> " maxlength="10" minlength="10" placeholder="numero de 10 chiffres" required autofocus><br/>
		Nom : <input type="text" name="nom" value = "<?php echo $nom ?> " maxlength="20" required autofocus><br/>
		Prenom : <input type="text" name="prenom" value = "<?php echo $prenom ?> " maxlength="20" required autofocus><br/>
		Date de naissance : <input type="date" name="date_naissance" value = "<?php echo $dateNaissance ?> " required autofocus><br/>
		Taille : <input type="number" step="0.01" name="taille" value = "<?php echo $taille ?> " required autofocus><br/>
		Poids : <input type="number" step="0.01" name="poids" value = "<?php echo $poids ?> " required autofocus><br/>
		Poste <?php echo "préféré" ?> : <input type="text" name="post_pref" value = "<?php echo $photo ?> " maxlength="20" required autofocus><br/>
		Etat : <input type="text" name="etat" value = "<?php echo $postePref ?> " required autofocus><br/>
		Photo : <input type="file" name="photo" value = "<?php echo $etat ?> " required autofocus><br/>
		
		<input type="submit" name="ajouter" value="Ajouter">
		<input type="reset" name="zero" value="Reset">
		
	</form>

</body>
</html>