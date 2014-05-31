<?php

	$array = [];
	/* filling array with zeros */
	for($i=0; $i<16; $i++)
		for($j=0; $j<16; $j++)
			$array[$i][$j] = 0;

	$ourFileName="numbers.txt";
	if(file_exists($ourFileName)){
	/* filling array from file */
	$fh = fopen($ourFileName, 'r') or die("Can't open file");
		for($i=1;$i<=15;$i++){
		$command=fgets($fh, filesize($ourFileName));
		$number=explode(" ",$command);
		$j=0;
		foreach($number as $value){
			$array[$i][$j]=$value;
			$j++;
			}
		}

	echo"\nArray is filled\n";
	}

	/* calculating */

	/* rows */
	for($i = 15; $i >= 1; $i--){
		
		/* cols */
		for($j=0; $j < 15; $j++){
			$left   = $array[$i][$j];
			$right  = $array[$i][$j+1];
			$parent = $array[$i-1][$j];
			if($left != null && $right != null){
				if($left > $right){
					$array[$i-1][$j] = $parent+$left;
					echo"Left: {$left}\n";
				}
				if($left < $right){
					$array[$i-1][$j] = $parent+$right;
					echo"Right: {$right}\n";
				}
			}
		}

	}

print_r($array);


?>