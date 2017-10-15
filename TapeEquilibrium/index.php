<?php


function solution($A) {
    $suma_i=array_sum($A);
    $suma_i_ante=0;
    $min=0;
    for ($i=0; $i <count($A)-1 ; $i++) { 
       $minTemp=abs(($suma_i-$A[$i]-$suma_i_ante)-($A[$i]+$suma_i_ante));
       if($i==0){$min=$minTemp;}
       $suma_i_ante+=$A[$i];
        if($minTemp<$min){
            $min=$minTemp;
        }
    }
    return $min;
}

echo solution([3,1,2,4,3]);