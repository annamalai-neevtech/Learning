<?php
   //1. Find the Missing number in PHP 
    $numbers=array(1,2,3,5,6); // Missing number is 4
    $n = sizeof($numbers);
    $n=$n+1;
    $total = $n*($n+1)/2;

   echo $missingNumber = $total - array_sum($numbers); // OUTPUT 4

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
echo $finalValue; // OUTPUT: 11101
?>


<?php 
//3. Fibonacci series 
$count = 0 ;
$first = 0;
$second = 1;
echo $first." , ";
echo $second." , ";
while ($count < 20 )
{
$third = $second + $first ;
echo $third." , ";
$first = $second ;
$second = $third ;
$count = $count + 1;
}
// OUPUT : 0,1,1,2,3,5,8,13,21,34..
?>


<?php 
//4. REVERSE the Given number 
$number=12345;
$reverse=0;
while($number>0)
{
   $reverse=$reverse*10;
   $reverse=$reverse+($number%10);
   $number=(int)($number/10);
}
echo $reverse;  // OUPUT : 12345
?>

<?php 
//5. Reverse the Words
$str="How are You";
$i=0;
while($d=$str[$i])
{
   if($d==" ")
   {
      $out =" ".$temp.$out;
      $temp="";
   }
   else
   {
      $temp.=$d;
   }
$i++;
}
echo $temp.$out; 
?>

<?php 
//6. Reverse the String 
$string="ABCDEFG";
$i=0;
while(isset($string[$i]))
{
   $i++;
}

$i--;

while(isset($string[$i]))
{
   echo $string[$i];
   $i--;
}

?>
