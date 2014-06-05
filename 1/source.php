<?php
if(isset($_POST['max']))
{
$max=(int)($_POST['max']);
$sum=0;
for($i=1;$i<$max;$i++)
{
if($i%3 == 0){
	$sum+=$i;
	}
elseif($i%5 == 0){
	$sum+=$i;
	}
}
echo"\n Result:{$sum}";

?>