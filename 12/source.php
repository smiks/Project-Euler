<?php
	$limit=500;
function sum($min,$max)
	{
$sum=($min+$max)*($max/2);
return $sum;
	}
function countDivisors($number)
	{
	$cdiv=1;
	for($i=1;$i<=sqrt($number);$i++)
		{
		if(fmod($number,$i) == 0){$cdiv+=1;}
		}
		$cdiv=$cdiv*2;
		return $cdiv;
	}
$cd=0;
$start=1;
$old=0;
while($cd < $limit)
	{
	$new=sum(1,$start);
	$cd=countDivisors($new);
	//echo"<li>{$new} divisors:{$cd}";
	$start=$start+1;
	}
	echo"\n Result: {$new}  divisors:{$cd}";
/*
* 100 | 1,2,4,5,10,20,25,50,100 = 9
* 200 | 1,2,4,5,8,10,20,25,40,50,100,200 = 12
*
*
*/
?>