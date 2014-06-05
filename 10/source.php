<?php
$num=2000000;
$sqrt=(int)(sqrt($num));
for($i=0;$i<$num;$i++)
	{
	$primes[$i] = (!($i == 2 || $i%2 == 0 || $i == 0 || $i == 1));
	}
for($i=3;$i<=$sqrt;$i=$i+2)
	{
	if($primes[$i])
		{
		for($j=2*$i;$j<$num;$j+=$i)
			{
			$primes[$j]=false;
			}
		}
	}
$cnt=array_sum($primes);
$sum=2;
for($i=3;$i<$num;$i=$i+2)
	{
if($primes[$i]){$sum+=$i;}
	}
echo"\nResult: {$sum}";
}
?>