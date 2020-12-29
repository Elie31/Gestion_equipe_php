<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<h1>Connectez-vous</h1>
	<form action="../php/connection.php" method="post"> 
		UTILISATEUR : <input type="text" name="user" placeholder="Nom utilisateur" required autofocus><br/>
		MOT DE PASSE : <input type="password" name="pwd" required autofocus><br/>
		<input type="submit" name="submit" value="Ajouter">
	</form>

</body>
</html>