<?
function product($num1,$num2,$num3){
	$result=$num1*$num2*$num3;
	return $result;
}
for($i=1;$i<500;$i++)
	{
	for($j=$i+1;$j<500;$j++)
		{
		//$r=($i*$i)+($j*$j)+($k*$k);
		$qk=($i*$i)+($j*$j);
		$k=sqrt($qk);
		$r=$i+$j+$k;
		if($r == 1000){
			$result = product($i,$j,$k);
			$s=$i+$j+$k;
			//echo"<li><u>{$i}+{$j}+{$k}={$s}</u>";
			}
		}
	}
echo"\nResult: {$result}";
?>