<?php
$max=0;$hor=0;$ver=0;$dia=0;$result=array();
function product($part){
	global $max;
$n1=(int)(substr($part,0,2));
$n2=(int)(substr($part,2,2));
$n3=(int)(substr($part,4,2));
$n4=(int)(substr($part,6,2));
$result=$n1*$n2*$n3*$n4;
//echo"<li>n1: {$n1} n2: {$n2} n3: {$n3} n4: {$n4} r: {$result}";
if($result > $max){$max=$result;}
}
$ourFileName="number.txt";
$array=array();
if(file_exists($ourFileName))
		{
//polnjenje
$fh = fopen($ourFileName, 'r') or die("Can't open file");
for($i=0;$i<20;$i++)
	{
$command=fgets($fh, filesize($ourFileName));
$number=explode(" ",$command);
$j=0;
foreach($number as $value)
	{
	$array[$i][$j]=$value;
	$j++;
	}
	}
fclose($fh);
		}
	echo"<br>Array is filled<br>";
//horizontal
	$tmp=0;$string="";
	for($i=0;$i<20;$i++)
	{
		for($j=0;$j<20;$j++)
		{
			$tmp+=1;
			$r=$array[$i][$j];
			$string.=$r;
			if($tmp == 4)
			{
				product($string);
				$string="";$tmp=0;
				$j=$j-3;
			}
		}
	}
	$hor=$max;
//vertical
$tmp=0;$string="";
	for($i=0;$i<20;$i++)
	{
		for($j=0;$j<20;$j++)
		{
			$tmp+=1;
			$r=$array[$j][$i];
			$string.=$r;
			if($tmp == 4)
			{
				product($string);
				$string="";$tmp=0;
				$j=$j-3;
			}
		}
	}
$ver=$max;
//diagonal
$tmp=0;$string="";
	for($i=0;$i<20;$i++)
	{
		for($j=0;$j<20;$j++)
		{
			for($k=0;$k<=3;$k++)
			{
			$r=$array[$i+$k][$j+$k];
			//echo"<li>{$r}";
			$string.=$r;
			}
			product($string);$string="";
		}
	}
$dia=$max;
$tmp=0;$string="";
	for($i=0;$i<20;$i++)
	{
		for($j=0;$j<20;$j++)
		{
			for($k=0;$k<=3;$k++)
			{
			$r=$array[$i+$k][$j-$k];
			//echo"<li>{$r}";
			$string.=$r;
			}
			product($string);$string="";
		}
	}
$dia=$max;
	$result[]=$hor;
	$result[]=$ver;
	$result[]=$dia;
	$res=max($result);
echo"\n Result: {$res}";

?>