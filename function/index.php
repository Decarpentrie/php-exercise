<?php 
// exercice 1
	
	// function foo() {
	// 	echo "true";
	// };
	// foo();

// exercice 2

	// function word($word="coucou"){
	// 	echo $word;
	// };
	// word();

// exercice 3

	// function wordTwo($wordOne="youhou", $wordWord="hop"){
	// 	echo $wordOne, $wordWord;
	// };
	// wordTwo();

// exercice 4

	// function number($a=15, $b=13){
	// 	if ($a>$b){
	// 		echo "le premier nombre est plus grand";
	// 	}else if($a<$b){
	// 		echo "le premier nombre est plus petit";
	// 	}else{
	// 		echo "les deux nombres sont identique";
	// 	};
	// };
	// number()

// exercice 5

	// function wordNumber($h=15, $l="youhou"){
	// 	echo $h, $l;
	// }
	// wordNumber();

// exercice 6

	// function string($nom="pierre", $prenom="paul", $age="98"){
	// 	echo "Bonjour ", $nom," ", $prenom, " tu a ", $age , " ans" ;
	// }
	// string();

// exercice 7

	function ageGenre($age=20, $genre= "femme"){
		if ($age < 18 && $genre === "homme" ) {
			echo "Vous êtes un homme et vous êtes majeur" ;
		}else if ($age > 18 && $genre === "homme" ) {
			echo "Vous êtes un homme et vous êtes mineur";
		}else if ($age > 18 && $genre === "femme") {
			echo "Vous êtes une femme et vous êtes majeur";
		}else if ($age > 18 && $genre === "femme") {
			echo "Vous êtes une femme et vous êtes mineur";
		}
	}
	ageGenre();








?>