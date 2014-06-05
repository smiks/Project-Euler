<?php


	$max = 2147000; /* no need to calculate higher 9**5 = 59049 9999999 would give 413343 which is low*/
	function isFifth($a){
		$len = strlen($a);
		$tmp = 0;
		for($i = 0; $i < $len; $i++){
			$num = substr($a,$i,1);
			$tmp += pow($num,5);
		}
		if($tmp == $a){
			return true;
		}
		return false;
	}



	function main(){
	global $max;
		$sum = 0;
		for($i = 2; $i < $max; $i++){
			if(isFifth($i)){
				$sum += $i;
			}
			if($i%1000000 == 0)echo"\n {$i}";
		}
		echo"\n Result: {$sum} \n";
	}

	main();


?>