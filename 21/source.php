<?php


	$result = [];

	function fillZero($a){
		for($i = 0; $i <= 10000; $i++){
			$a[$i]=0;
		}
		return $a;
	}

	function sum($a){
		return array_sum($a);
	}

	function divisors($a){
		$array = [];
		for($i = 1; $i <= ($a/2); $i++){
			if($a%$i == 0){
				array_push($array, $i);
			}
		}
		return $array;
	}


	function main(){
	global $result, $gSum;
	$result = fillZero($result);
		for($i = 0; $i <= 10000; $i++){
			if($result[$i] == 0){
				$a = divisors($i);
				$tmpSum1 = sum($a);
				$b = divisors($tmpSum1);
				$tmpSum2 = sum($b);
				if($i == $tmpSum2 && $tmpSum1 != $tmpSum2){
					$result[$i] = $tmpSum1;
				}
			}
		}
		$finish = sum($result);
		echo"\n Result: {$finish}\n";
	}

	main();

?>
	