<?php
	
	//echo "Hi there: ".$_GET['name']."!";
	
	//print_r($_GET);
	
	if (is_numeric($_GET['number']) && $_GET['number'] > 0 && $_GET['number'] == round($_GET['number'], 0)) {
	
		$i = 2;
		
		$isPrime = true;
		
		while ($i < $_GET['number']) {
			
			if ($_GET['number'] % $i == 0) {
				
				$isPrime = false;
				
			}
			
			$i++;
			
		}
	
		if ($isPrime) {
			
			echo "<p>".$i." jest liczbą pierwszą!</p>";
			
		} else {
			
			echo "<p>".$i." nie jest liczbą pierwszą!</p>";
			
		}
	
	} else if ($_GET) {
		
		echo "Wpisz liczbę całkowitą!";
		
	}

?>

<p>Please enter a whole number</p>

<form>

	<input type="text" name="number">
	
	<input type="submit" value="GO!">

</form>