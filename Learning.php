<?php
   //1. Find the Missing number in PHP 
    $numbers=array(1,2,3,5,6); // Missing number is 4
    $n = sizeof($numbers);
    $n=$n+1;
    $total = $n*($n+1)/2;

   echo $missingNumber = $total - array_sum($numbers);

?>
