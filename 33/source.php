<?php

	$numerators   = [];
	$denominators = [];

	function isOk($n, $d){

		/* sample: 49/98 = 4/8 */

		$n1 = substr($n, 0, 1);
		$n2 = substr($n, 1, 1);

		$d1 = substr($d, 0, 1);
		$d2 = substr($d, 1, 1);

		if($n2 != $d1){
			return false;
		}
		if($d != 0 && $d2 != 0){
			if($n/$d == $n1/$d2){		
				return true;
			}
		}
		return false;
	}

	function gcd($a,$b){
		do{
			if($a > $b){
				$a = $a - $b;
			}
			else{
				$b = $b - $a;
			}
		}while($a != $b);
		return $a;
	}

	/* lowest common term */
	function lct(){
	global $numerators, $denominators;
		$i = 0;
		if($denominators[$i] % $numerators[$i] == 0){
			$div = $denominators[$i] / $numerators[$i];
			$numerators[$i]   = 1;
			$denominators[$i] = $div;
		}
		/* looking for GCD */
		else{
			$div = gcd($numerators[$i],$denominators[$i]);
			$numerators[$i]   = $numerators[$i] / $div;
			$denominators[$i] = $denominators[$i] / $div;
		}
		return ($denominators[$i]);

	}

	/* product of these fractions */
	function product(){
	global $numerators, $denominators;

		$all = count($numerators);
		$num = 1;
		$dev = 1;
		for($i = 0; $i < $all; $i++){
			$num *= $numerators[$i];
			$dev *= $denominators[$i];
		}
		/* putting fraction to array[0] */
		$numerators[0]   = $num;
		$denominators[0] = $dev;
	}


	function main(){
	global $numerators, $denominators;

		for($numerator = 10; $numerator <= 99; $numerator++){
			for($denominator = 10; $denominator <= 99; $denominator++){

				/* make sure that value of fraction is < 1 */
				if($denominator > $numerator){
					if(isOk($numerator, $denominator)){
						echo("{$numerator}/{$denominator} \n");
						array_push($numerators, $numerator);
						array_push($denominators, $denominator);
					}
				}
			}
		}
		
		product();
		lct();
		echo("\nResult: ".lct()."\n");
	}
		

	main();


?>