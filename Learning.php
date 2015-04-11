<?php
   //1. Find the Missing number in PHP 
    $numbers=array(1,2,3,5,6); // Missing number is 4
    $n = sizeof($numbers);
    $n=$n+1;
    $total = $n*($n+1)/2;

   echo $missingNumber = $total - array_sum($numbers);

?>

<?php 
//2. Find the Largest Number in the array without using MAX Function 
$i=0;
$array=array(1,656,77,9349,121,11101,233,3);
$finalValue=0;
foreach($array as $k => $c)
{

$nextValue=$i+1;
if(isset($array[$nextValue]) &&( $c > $array[$nextValue] ))
{
unset($array[$k]);
$array[$nextValue]=$c;
$finalValue=$c;
}
}
echo $finalValue;
?>
