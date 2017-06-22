<!-- exercice 2 -->
<?php 
	session_start() 

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 
		// echo "re-coucou ".  $_SESSION['nom']. ", ". $_SESSION['prenom'] ;
	// exercice 4
		echo "re-coucou ".  $_COOKIE['pseudo']. ", ". $_COOKIE['password'] ;
 	?>
</body>
</html>