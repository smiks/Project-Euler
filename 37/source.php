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

	function isTruncatable($a){
	global $primes;
		$start  = $a;
		$length = strlen($start);

		/* left to right */
		for($i = 0; $i < $length; $i++){
			if(substr($start,$i,strlen($start)) != 0){
				$a = substr($start, $i, strlen($start));
				if(substr($a,0,1) != 0){
					if(!$primes[$a]){
						return false;
					}
				}
			}
		}
		/* right to left */
		$a = $start;
		$r = $a;
		$length = strlen($start);
		for($i = 0; $i < $length; $i++){
			if(substr($start,$i,strlen($start)) != 0){
				$a = substr($start, 0, strlen($start)-$i);
				if(substr($a,0,1) != 0){
					if(!$primes[$a]){
						return false;
					}
				}
			}
		}
		return true;
	}


	function check(){
	global $primes, $result;
	$count = 0;	
		foreach($primes as $key => $val){
			if($primes[$key]){
				//echo"\nCHECKING {$key} \n";
				if(isTruncatable($key) && strlen($key) > 1){
					$result += $key;
					if($count == 11){
						return 1;  /* ...only eleven primes... - from instructions in task. No need to look for more. */
					}
				}
			}
			
		}
	}
	

	function main(){
	global $primes, $allNum, $result;
		echo"\nFilling Primes\n";
		fillingPrimes($allNum);
		//var_dump($primes);
		echo"\n Looking for truncatable numbers \n";
		check();
		echo"\nResult: {$result} \n";

	}


	main();


?>