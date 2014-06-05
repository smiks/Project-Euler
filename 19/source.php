<?php


	$months   = [0,31,28,31,30,31,30,31,31,30,31,30,31];
	$leap     = [0,31,29,31,30,31,30,31,31,30,31,30,31];
	$days     = [0,1,2,3,4,5,6,7]; /* 1-Sunday, 7-Saturday*/

	function isLeap($a){
		if(($a%4 == 0 && $a%100 != 0) || $a%400 == 0)
			return true;
		return false;
	}

	function main(){
	global $months, $leap;	
		/* note: 1st Jan 1901 - Tuesday*/
		$dayCounter    = 6; /* First Sunday in January - 6th Jan */
		$sundays       = 0; /* Sundays on the first of the month*/
		/* loop over years */
		for($i = 1901; $i <= 2000; $i++){
			$j=1;
			/* looping over months */
			while($j <= 12){
				if(isLeap($i)){
					$max = $leap[$j];
					while($dayCounter <= $max){
						$dayCounter += 7;
					}
					if($dayCounter > $max){
						$dayCounter -= $max;
						$j++;
					}
					if($dayCounter == 1){
						$sundays++;
					}
				}
				else {
					$max = $months[$j];
					while($dayCounter <= $max){
						$dayCounter += 7;
					}
					if($dayCounter > $max){
						$dayCounter -= $max;
						$j++;
					}
					if($dayCounter == 1){
						$sundays++;
					}
				}
			}
		}

		echo"\nResult: {$sundays} \n";

	}

	main();

?>