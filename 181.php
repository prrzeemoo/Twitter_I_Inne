<?php

$myArray = array("Rob", "Rob", "Rob", "Rob");

//nieprawidłowe ---> echo $myArray;

$myArray[] = "Katie";

print_r($myArray);

echo "<p>".$myArray[0]."<br><br>";

$anotherArray[0] = "pizza";

$anotherArray[1] = "yoghurt";

$anotherArray["myFavouriteFood"] = "ice-cream"; 

print_r($anotherArray);

echo "<br><br>";

$thirdArray = array(
	
	"France" => "French", 
	"USA" => "English", 
	"Germany" => "German");

unset($thirdArray["France"]);
	
print_r($thirdArray);

echo sizeof($thirdArray);
 
?>