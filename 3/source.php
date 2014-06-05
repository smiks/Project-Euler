<?php
$max = 600851475143;
$sqrt=sqrt($max);
function isPrime($number) {
$sqrtn = intval(sqrt($number));
//won't work for 0-2
	for($i=3; $i<=$sqrtn; $i+=2) {
		if($number%$i == 0) {
			return false;
		}
	}
return true;
}    
    $primes = array();
    for($i=3; $i<=$sqrt; $i++) {
        if(fmod($max, $i) == 0) {
            if(isPrime($i)) {
                $primes[] = $i;
            }
        }
    }
    echo"\n Result: ". max($primes);
?>