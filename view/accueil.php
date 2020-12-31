<?php 

session_start(); 

if($_SESSION['user'] == 'admin'){

?>

<!DOCTYPE html>
<html>
<head>
	<title>ACCUEIL</title>
</head>
<body>
<?php include "../view/parts/header.php";?>
	
		
	<h1>BONJOUR TU ES SUR L'ACCUEIL</h1>

	<?php 
		require_once '../php/connect.php';
		$res = $link->query('SELECT * FROM Joueur');

		while ($data = $res->fetch()) { 

				echo $data[0].' | '.$data[1].' | '.$data[2].' | '.$data[3].' | '.$data[4].' | '.$data[5].' | '.$data[7].' | '.$data[8].' | '?> <img src="../photo/<?php echo $data[6]?>" height="100" width="100"><?php ;?>
				<form action="../view/modif.php" method="post">

					<input type="hidden" name="numLicence" value="<?php echo $data[0]?> ">
					<input type="hidden" name="nom" value="<?php echo $data[1]?> ">
					<input type="hidden" name="prenom" value="<?php echo $data[2]?>" >
					<input type="hidden" name="dateNaissance" value="<?php echo $data[3]?>" >
					<input type="hidden" name="taille" value="<?php echo $data[4]?>" >
					<input type="hidden" name="poids" value="<?php echo $data[5]?>">
					<input type="hidden" name="photo" value="<?php echo $data[6]?>" >
					<input type="hidden" name="postePref" value="<?php echo $data[7]?>">
					<input type="hidden" name="etat" value="<?php echo $data[8]?>" >
		
					<input type="submit" name="action" value="modifier">
		
				</form>
				<form action="../php/suppr.php" method="post">

					<input type="hidden" name="numLicence" value="<?php echo $data[0]?> ">
		
					<input type="submit" name="action" value="supprimer">
		
				</form>


				<?php
		} 

		?>
----------------------------------------------------------------------------------------------------------------------------------------</br>
<?php 
		require_once '../php/connect.php';
		$req = $link->query('SELECT * FROM MatchVolley');

		while ($dataM = $req->fetch()) { 

				echo $dataM[1].' | '.$dataM[2].' | '.$dataM[3].' | '.$dataM[4].' | '.$dataM[5];?>
				<form action="../view/modifMatch.php" method="post">

					<input type="hidden" name="date_match" value="<?php echo $dataM[1]?> ">
					<input type="hidden" name="lieu_match" value="<?php echo $dataM[2]?> ">
					<input type="hidden" name="heure" value="<?php echo $dataM[3]?>" >
					<input type="hidden" name="nom_tournoi" value="<?php echo $dataM[4]?>" >
					<input type="hidden" name="nom_equipe" value="<?php echo $dataM[5]?>" >
		
					<input type="submit" name="actionM" value="modifier">
		
				</form>
				<form action="../php/supprMatch.php" method="post">
			
					<input type="hidden" name="id" value="<?php echo $dataM[0]?> ">
		
					<input type="submit" name="actionM" value="supprimer">
		
				</form>


				<?php
		} 

		?>


	

</body>
</html>

<?php 

}else{
	header('Location: ../view/login.php');
}

?>