<?php

	/* only decimal part is used */
	$hugeNumber = "";

	function product(){
	global $hugeNumber;

		$result = 1;

		$i = 1;
		while($i <= 1000000){
			$char    = substr($hugeNumber, $i-1, 1);
			$result *= $char;
			echo"\n Multiplying {$char} with {$i} = {$result}";
			$i      *= 10;
		}
		return $result;
	}



	function main(){
	global $hugeNumber;

		/* making huge irrational decimal fraction */

		echo"\n Program started \n Start concatenating";
		$len = 1;
		for($i = 1; $len <= 1000001; $i++){
			$len = strlen($hugeNumber);
			$hugeNumber .= $i;
			if($i%4096 == 0) echo"\n{$i} - len: {$len}";
		}
		
		echo"\n Start multiplying \n";
		echo"\n Result: ".product()." \n";
	}

	main();

?>