<?php
function solution($A) {
    $index=0;
    for ($i=0; $i <count($A) ; $i++) { 
        if($i==0){
            continue;
        }
        $index=$A[$i];
        if($index==-1){
            return count($A)-1;
        }
    }
    return $index;

}

  

echo solution([1, 4, 1, 3, -6,4,10]);

