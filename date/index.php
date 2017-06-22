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

	// exercice 6
	$nb_jour_de_juin_2017 = date("t", mktime(0,0,0,7,0,2017));
	echo "<br> $nb_jour_de_juin_2017";

	// exercice 7
	$date3= '22-06-2017';
	echo "<br>";
	echo date('d-m-Y', strtotime($date3.' + 20 DAY'));

	// exercice 8
	$date4= '22-06-2017';
	echo "<br>";
	echo date('d-m-Y', strtotime($date4.' - 21 DAY'));	

 ?>