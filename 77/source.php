<?php

	$primes  = [];
	$primes2 = [];
	$allNum  = 1000000;
	$ways    = [];
	$ways[0] = 1;

	function fillArray($len){
	global $ways;
		for($i = 0; $i < $len; $i++){
			array_push($ways, 0);
		}

	}

	/* filling $num primes to array */
	function fillingPrimes($num){
	global $primes;
		for($i=0;$i<$num;$i++)
			{
			$primes[$i] = (!($i == 2 || $i%2 == 0 || $i == 0 || $i == 1));
			}
		for($i=3;$i<=($num/2);$i=$i+2)
			{
			if($primes[$i])
				{
				for($j=2*$i;$j<$num;$j+=$i)
					{
					$primes[$j]=false;
					}
				}
			}
	$primes[2] = true;
	}

	function copyPrimes($num){
	global $primes, $primes2;
		for($i=0; $i < $num; $i++){
			if($primes[$i] == 1){
				array_push($primes2, $i);
			}
		}
	}

	function calculate($target){
	global $ways, $primes2;
		$len      = count($primes2);
		$retValue = 0;
		for($i = 0; $i < $len; $i++){
			for($j = $primes2[$i]; $j <= $target; $j++){
				$tmp = $j - $primes2[$i];
				$ways[$j] += $ways[$tmp];
				$retValue  = $ways[$j];
			}
		}
		return $retValue;
	}


	function main(){
	global $primes2, $allNum, $ways;
		$result = 0;
		echo"\nFilling Primes\n";
		fillingPrimes($allNum);
		copyPrimes($allNum);
		echo"\n Looking for the first value which can be written as the sum of primes in over five thousand different ways \n";
		fillArray(6000);
		for($i = 1; $i < 5000; $i++){
			$wys = calculate($i);
			//echo"\n Possible to sum {$i} on {$wys} ways";
			if($wys > 4999){
				$result = $i;
				break;
			}
			/* cleaning array $ways for new calculating */
			for($j = 1; $j < count($ways); $j++){
				$ways[$j] = 0;
			}
		}
		echo"\nResult: {$result}\n";

	}


	main();


?>