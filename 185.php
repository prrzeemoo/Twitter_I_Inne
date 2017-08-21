<?php

$family = array("Rob", "Kirsten", "Tommy", "Ralphie");

foreach ($family as $key => $value) {
	
	$family[$key] = $value." Przemo";
	
	echo "Array item ".$key." is ".$value."<br>";
	
}

for ($i = 0; $i < sizeof($family); $i++) {
	
	echo $family[$i]."<br>";
	
}	

?>