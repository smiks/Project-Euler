<?php
$ourFileName="number.txt";
$array=array();
$sum=0;
if(file_exists($ourFileName))
		{
//fill
$fh = fopen($ourFileName, 'r') or die("Can't open file");
for($i=0;$i<100;$i++)
	{
$number=fgets($fh, filesize($ourFileName));
$sum+=$number;
	}
fclose($fh);
		}
		$firstten=substr($sum,0,11);
		$first=$firstten*1000000000;
		echo"\nResult: {$first}";
?>