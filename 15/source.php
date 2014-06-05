<?php
/*
The Matrix
2 3 4 5 6 
3 6 10 15 21 
4 10 20 35 56 
5 15 35 70 126 
6 21 56 126 252
result is diagonal of matrix
*/
$array=array();
$array2=array();
$mesto=20; /*20x20*/
for($i=2;$i<$mesto+2;$i++)
	{
	$array2[$i][1]=$i; //echo"<li><u>filling i: {$i}</u>";
	for($j=2;$j<$mesto+2;$j++)
		{
		$jj=$j+1;
	$array2[$i][$j]=$jj; //echo"<li>filling j: {$j}";
		}
	}
for($i=2;$i<$mesto+2;$i++)
	{

	for($j=1;$j<$mesto+2;$j++)
		{
			$r=$array2[$i][$j];
			if($i > 2)
			{
			$ii=$i-1;
			$jj=$j+1;
			$one=$array2[$i][$j];
			$two=$array2[$ii][$jj];
			$r=$array2[$i][$j+1]=$one+$two;
			}else
			{
			}
		}
	}
	$result=$array2[$mesto+1][$mesto];
	echo"\n Result: {$result}";
}
?>