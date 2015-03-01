<?php
	$time_start = microtime(true);

	$num = array();
	$size = 1000;

	for ($i=0; $i < $size; $i++) { 
	 	array_push($num, rand(1,1000));
	 }

	// var_dump($num);

	for ($i=1; $i < $size; $i++) {

		for ($j=$i; $j > 0; $j--) { 
			if($num[$j] < $num[$j-1]) {
				$temp = $num[$j];
				$num[$j] = $num[$j-1];
				$num[$j-1] = $temp;
			}
		}
	}

	// var_dump($num); 

	$time_stop = microtime(true);

	var_dump($time_stop - $time_start);

	// 0.639 s for 1000 elements
	

?>