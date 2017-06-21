<?php 

// exercie 1

	$mois= array(
			"Janvier", 
			"Février", 
			"Mars", 
			"Avril", 
			"Mai", 
			"Juin", 
			"Juillet", 
			"Aout",
			"Septembre", 
			"Octobre", 
			"Novembre", 
			"Decembre"
		);

// exercice 2

	// print_r($mois[3])

// exercie 3

// print_r($mois[5])

// exercice 4

	// $mois[7]= "Août";
	// var_dump($mois);

// exercice 5

	$region= array(
			'numDepartement1' =>"02",
			'departement1'=> "aisne",
			'numDepartement2' =>"59", 
			'departement2'=> "nord",
			'numDepartement3' =>"60", 
			'departement4'=> "oise",
			'numDepartement5' =>"62", 
			'departement5'=> "Pas-de-calais",
			'numDepartement6' =>"80", 
			'departement6'=> "somme",
		);
	// var_dump($region);
 
// exercice 6

	// print_r($region["59"])

// exercice 7 

	$region["51"] = "marne";
	// var_dump($region);

// exercice 8 
	// for ($i = 0; $i <= 12; $i++) {
	// 	echo $mois[$i];
	// }

// exercice 9
	
	// foreach ($region as $regions ) {
	// 	  echo $regions ;
	// }

// exercice 10 

	echo "Le département ", $region["departement1"], " a le numero ", $region["numDepartement1"] ;
	echo "Le département ", $region["departement2"], " a le numero ", $region["numDepartement2"] ;
	echo "Le département ", $region["departement3"], " a le numero ", $region["numDepartement3"] ;
	echo "Le département ", $region["departement4"], " a le numero ", $region["numDepartement4"] ;
	echo "Le département ", $region["departement5"], " a le numero ", $region["numDepartement5"] ;	
	echo "Le département ", $region["departement6"], " a le numero ", $region["numDepartement6"] ;




 ?>