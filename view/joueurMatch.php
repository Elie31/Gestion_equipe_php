<!DOCTYPE html>
<html>
<head>
	<title>FEUILLE MATCH</title>
</head>
<body>
		
	<h1>JOUEUR INSCRIT AU MATCH</h1>

	<?php

		
		foreach($_POST['joueur'] as $valeur){
        
			echo "Joueur : <b>" . $valeur . "</b><br>";
			
		}
	?>


	

</body>
</html>