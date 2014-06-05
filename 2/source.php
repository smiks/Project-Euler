<?php
$max=4000000;
$sum=0;$n=0;$m=1;$i=0;$cnt=1;
while($m+$n < $max)
{
$i=$i+1;
$m=$m+$n;
$n=$m-$n;
if($m%2 == 0){
	$sum+=$m;
}
$cnt++;
}
echo"\n Result: {$sum}";
}
?>