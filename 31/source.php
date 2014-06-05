<?php

	$coins = array( 1, 2, 5, 10, 20, 50, 100, 200 );
	$ways  = [];
	$ways[0] = 1;

	function fillArray($len){
	global $ways;
		for($i = 0; $i < $len; $i++){
			array_push($ways, 0);
		}

	}

	function calculate($target){
	global $ways, $coins;
		$len = count($coins);
		for($i = 0; $i < $len; $i++){
			for($j = $coins[$i]; $j <= $target; $j++){
				$tmp = $j - $coins[$i];
				$ways[$j] += $ways[$tmp];
			}
		}
	}

	function main(){
	global $ways;
		fillArray(200);
		calculate(200);
		echo"\nResult: {$ways[200]} \n";
	}

	main();


?>