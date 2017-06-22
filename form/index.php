<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- exercice 1 et 3 -->
	<!-- <form action="user.php" method="GET">
		<label>prénom</label>
		<input type="text" name="prenom">
		<label>nom</label>
		<input type="text" name="nom">
		<input type="submit" value="OK" >
	</form> -->

<!-- exercice 2 et 4 -->
	<form action="index.php" method="post">
		<label>prénom</label>
		<input type="text" name="nom"/>
		<label>nom</label>
		<input type="text" name="prenom"/>
		<input type="submit" value="OK" />
	</form>

<?php 
$nom= $_POST['nom'];
$prenom = $_POST['prenom'];

echo ("nom: $nom, prenom: $prenom");

 ?>


</body>
</html>