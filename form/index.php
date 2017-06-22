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
<!-- 	<form action="index.php" method="post">
		<label>prénom</label>
		<input type="text" name="prenom"/>
		<label>nom</label>
		<input type="text" name="nom"/>
		<input type="submit" value="OK" />
	</form>

	<?php 
		$nom= $_POST['nom'];
		$prenom = $_POST['prenom'];
		echo ("nom: $nom, prenom: $prenom");
 	?> -->

<!-- exercice 5 -->

	<form action="index.php" method="post">
		<label>civilité</label>
		<select name="civilite">
			<option>choisir</option>
			<option value="Mme">Mme</option>
			<option value="Mr">Mr</option>
		</select>
		<label>nom</label>
		<input type="text" name="nom"/>
		<label>prénom</label>
		<input type="text" name="prenom"/>
		<input type="submit" value="OK" />
	</form>
	
	<?php 
	$choix=$_POST['civilite'];
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
		echo "coucou $choix $nom $prenom !" ;

	?>

</body>
</html>