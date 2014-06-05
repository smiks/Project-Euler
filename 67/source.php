<?php

	$array = [];
	$rows = 100;
	/* filling array with zeros */
	for($i=0; $i<=$rows; $i++)
		for($j=0; $j<=$rows; $j++)
			$array[$i][$j] = 0;

	$ourFileName="triangle.txt";
	if(file_exists($ourFileName)){
	/* filling array from file */
	$fh = fopen($ourFileName, 'r') or die("Can't open file");
		for($i=1;$i<=$rows;$i++){
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
	for($i = $rows; $i >= 1; $i--){
		
		/* cols */
		for($j=0; $j < $rows; $j++){
			$left   = $array[$i][$j];
			$right  = $array[$i][$j+1];
			$parent = $array[$i-1][$j];
			if($left != null && $right != null){
				if($left >= $right){
					$array[$i-1][$j] = $parent+$left;
					//echo"LEFT: {$left} - Right: {$right} - parent: {$parent}\n";
				}
				if($left < $right){
					$array[$i-1][$j] = $parent+$right;
					//echo"RIGHT: {$right} - Left: {$left} - parent: {$parent}\n";
				}
			}
		}

	}

//print_r($array);
$result = $array[1][0];
echo"\nResult: {$result} \n";


?>