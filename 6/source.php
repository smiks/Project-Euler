<?php

function sum($min,$max)
	{
$sum=($min+$max)*($max/2);
return $sum;
	}
function squares($min,$max)
	{
$n=$max-$min+1;
$squares=(($n*($n+1)*(2*$n + 1))/6);
return $squares;
	}
$sum=sum(1,100);
$sum=$sum*$sum;
$squares=squares(1,100);
$diff=$sum-$squares;
	echo"\n Result: {$diff}";
?>