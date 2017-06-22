<?php
	// exercice 1 
	echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";

	echo "<br>". $_SERVER['REMOTE_ADDR']. "\n\n";

	echo "<br>". $_SERVER['SERVER_NAME'] ;
	// exercice 2

	session_start();

	$_SESSION['nom']='peuplu';
	$_SESSION['prenom']='jean';
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


</body>
</html>