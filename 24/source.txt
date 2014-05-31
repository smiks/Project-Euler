<?php

	$permutations  = [];
	$opermutations = [];
	
	function permute($str,$i,$n) {
	global $permutations;
	   if ($i == $n)
	       array_push($permutations, $str);
	   else {
		for ($j = $i; $j < $n; $j++) {
		  swap($str,$i,$j);
		  permute($str, $i+1, $n);
		  swap($str,$i,$j);
	       }
	   }
	}

	/* function to swap the char at pos $i and $j of $str. */
	function swap(&$str,$i,$j) {
	    $temp = $str[$i];
	    $str[$i] = $str[$j];
	    $str[$j] = $temp;
	} 

	function order(){
	global $permutations;
		asort($permutations);
	}

	function copyArray(){
	global $permutations, $opermutations;
		foreach($permutations as $val){
			array_push($opermutations, $val);
		}

	}

	function find($n){
	global $opermutations;
		$n=$n-1;
		return($opermutations[$n]);
	}

	function main(){
		$string = "0123456789";
		echo"\nStart permutating string: {$string}\n";
		permute($string,0,strlen($string));
		order();
		copyArray();
		echo("Result: ".find(1000000)." \n");
	}

	main();