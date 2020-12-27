<!DOCTYPE html>
<html>
<head>
	<title>FEUILLE MATCH</title>
</head>
<body>
	
		
	<h1>SAISIE DE FEUILLE DE MATCH</h1>

	<?php 
		require_once '../php/connect.php';
        $res = $link->query('SELECT * FROM Joueur');
        

		while ($data = $res->fetch()) { 

                if($data[8] == "Actif"){
				?>
		            <form name="formulaire" method="post" action="../php/choixDuJoueur.php">
                    
                    <input type="checkbox" name="joueur[]" value="<?php echo $data[0].' | '.$data[1].' | '.$data[2].' | '.$data[3].' | '.$data[4].' | '.$data[5].' | '.$data[7].' | '.$data[8].' | '.$data[6];?>"> <?php echo $data[0].' | '.$data[1].' | '.$data[2]; ?>
					<select name="pets" id="pet-select">
						<option value="1">Titulaire</option>
						<option value="0">Remplançant</option>
					</select>
                    </br>

				<?php
                }
		} 

		?>
</br>
<input type="submit" value="Sélectionner">
</form> 


	

</body>
</html>