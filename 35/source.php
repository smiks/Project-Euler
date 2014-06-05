<?php

	$primes = [];
	$result = 0;
	$allNum = 1000000;
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

	function isCilcular($a){
	global $primes;
		$start = $a;

		$first = substr($a, 0, 1);
		$rest  = substr($a, 1, strlen($a));
		$a     = $rest.$first;
		while($a != $start){
			if(substr($a,0,1) != 0){
				if(!$primes[$a]){
					return false;
				}
			}
			$first = substr($a, 0, 1);
			$rest  = substr($a, 1, strlen($a));
			$a     = $rest.$first;
		}
		return true;
	}


	function check(){
	global $primes, $result;	
		foreach($primes as $key => $val){
			if($primes[$key]){
				//echo"\nCHECKING {$key} \n";
				if(isCilcular($key)){
					$result++;
					//echo("\n {$key}");
				}
			}
			
		}
	}
	

	function main(){
	global $primes, $allNum, $result;
		echo"\nFilling Primes\n";
		fillingPrimes($allNum);
		//var_dump($primes);
		echo"\n Looking for circular numbers \n";
		check();
		echo"\nResult: {$result} \n";

	}


	main();


?>