<?php 

	// exercice 1
	$date = date("d/m/Y");
	echo "$date";

	// exercice 2

	$dateTwo = date('d-m-Y');
	echo "<br> $dateTwo";

	// exercice 3
	setlocale(LC_TIME, 'fr_FR.UTF8');
	echo '<br>'. strftime('%A %d %B %Y ');

	// exercice 4
	setlocale(LC_TIME, 'fr_FR.UTF8');
	echo '<br>'. strftime('%A %d %B %Y, %H:%M');	
 ?>