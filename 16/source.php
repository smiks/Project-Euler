<?php
$exp=1000;
$base=2;
$result=">";
$result2=pow($base,$exp);
$result2=number_format($result2,0,'.','');
$result=">".$result2;
$result=$result."<";
$char='';
$sum=0;$i=1;
while($char != '<')
	{
	$char=substr($result,$i,1);
$sum+=$char;
$i++;
	}
echo"\nResult: {$sum}";

?>