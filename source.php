<?php
$end=100;
$n1=3;
$n2=5;
$array=array();
$array[0][1]="fizz";
$array[1][0]="buzz";
$array[0][0]="fizzbuzz";
for($i=1;$i<=$end;$i++) 
{
	$array[1][1]=$i;
	$fizz = $i % $n1 && true;
	$buzz = $i % $n2 && true;
	echo("<li>".$array[$fizz][$buzz]."</li>");
}
?>