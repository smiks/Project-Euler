<?php
$longest=0;$num=0;
function test($number)
	{
while(chain($number) > 0)
		{
echo"{$number} -> ";
if($number == 1){break;}
$number=chain($number);
		}
	}
function chain($number)
	{
	if(fmod($number,2) == 0)
		{
	return $number/2;

		}
	else
		{
	return 3*$number+1;
		}
	}
	//test(9);
$asteps=array();
for($i=1;$i<1000000;$i++)
	{
$steps=0;$nm=$i;
while($nm > 1)
		{
		$nm=chain($nm);
		$steps++;
		if($asteps[$nm] > 0){$steps=$steps+$asteps[$nm];}
		if($steps > $longest){$longest=$steps;$num=$i;}
		if($asteps[$nm] > 0){break;}
		}
		$asteps[$i]=$steps;
	}
	echo"\n Result: {$num}";

?>