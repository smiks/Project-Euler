<?php
$result=array();
function divisible($number,$min,$max)
	{
	$error=0;
	for($i=$min;$i<=$max;$i++)
		{
			if(fmod($number,$i) != 0){
				$error=1;
				break;
			}
		}
		if($error == 1){
		return false;
		}
		else
			return true;
	}
	$j=20;
while(true)
	{
	if(divisible($j,1,20)){
		$result[]=$j;
		break;
		}
		$j+=20;
	}
echo"\n Result: ". min($result);
?>