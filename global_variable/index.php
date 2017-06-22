<?php
	// exercice 1 
	echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";

	echo "<br>". $_SERVER['REMOTE_ADDR']. "\n\n";

	echo "<br>". $_SERVER['SERVER_NAME'] ;
	// exercice 2

	session_start();

	$_SESSION['nom']='peuplu';
	$_SESSION['prenom']='jean';

	// exercice 3
	setcookie('pseudo','peuplu', time() + 365*24*3600, null, null, false, true);
	setcookie('password','jean', time() + 365*24*3600, null, null, false, true);

	// exercice 5
	setcookie('pseudo','enemare', time() + 365*24*3600, null, null, false, true )
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<p><?php echo "hey ". $_SESSION['nom']. ", ". $_SESSION['prenom'] ?></p>
	<a href="index2.php">index n°2</a>

	<form>
		<label>Pseudo</label>
		<input type="texte" name="pseudo">
		<label>Mot de passe</label>
		<input type="password" name="password">
		<input type="submit" name="OK">



	</form>

</body>
</html>