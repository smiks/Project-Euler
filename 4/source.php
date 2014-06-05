<?php
$largest=0;
function isPalindrome($number) {
	global $largest;
	$number="".$number."";
	$rev=strrev($number);
	if($number == $rev)
	{
	if($number > $largest){$largest=$number;}
		return true;
	}
	return false;
}    
    $primes = array();
    for($i=100; $i<1000; $i++) {
		    for($j=100; $j<1000; $j++) {
		$result=$i*$j;
		isPalindrome($result);
		}
    }
    echo"\n Result: {$largest}";  
?>