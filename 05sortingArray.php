<?php
	$random =array(	'naam'=>"Jeroen", 
					'leeftijd'=> "27", 
					'lengte'=>"1.80", 
					'adres'=>"randomStreet 21", 
					'postcode'=>"2324AB", 
					'woonplaats'=>"testStad", 
					'telefoon nummer'=>"0906-0854",
					'aanwezig'=>"ja");
	
	echo '<b>'."The array unsorted".'</b>'.'<br/>';
	
	$temp = 1;
	while($temp <= 8){
		foreach($random as $key => $value) {
			echo "$temp: $key - $value".'<br/>';
			$temp++;
		}
	}
	 
	echo '<br/>'.'<br/>';
	ksort($random);
	
	echo '<b>'."The array sorted by key".'</b>'.'<br/>';
	$temp = 1;
	while($temp <= 8){
		foreach($random as $key => $value) {
			echo " $temp: $key - $value".'<br/>';
			$temp++;
		}
	}
	
	echo '<br/>'.'<br/>';
	asort($random);
	
	echo '<b>'."The array sorted by value".'</b>'.'<br/>';
	$temp = 1;
	while($temp <= 8){
		foreach($random as $key => $value) {
			echo " $temp: $key - $value".'<br/>';
			$temp++;
		}
	}
	
?>
<!DOCTYPE html>
<html>
	<head>
		<style type="text/css">
		
		</style>
	
	</head>
	<body>
	<?php

        echo "an other test";
	?>
	</body>

</html>

