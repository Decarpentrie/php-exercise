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
	// echo '<br>' time();

	// exercice 5
	$now   = time();
	$date2 = strtotime('2-08-2017');
	
	function dateDiff($date1, $date2){
    $diff = abs($date1 - $date2);
    $retour = array();
 
    $tmp = $diff;
    $retour['second'] = $tmp % 60;
 
    $tmp = floor( ($tmp - $retour['second']) /60 );
    $retour['minute'] = $tmp % 60;
 
    $tmp = floor( ($tmp - $retour['minute'])/60 );
    $retour['hour'] = $tmp % 24;
 
    $tmp = floor( ($tmp - $retour['hour'])  /24 );
    $retour['day'] = $tmp;
 
    return $retour;
	}

	print_r( dateDiff($now, $date2));
	




 ?>