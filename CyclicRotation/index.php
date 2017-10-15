<?php
function solution($A, $K)
{
    if(!empty($A) && $K>0)
    {
        $i=1;       
        while ($i <= $K) {        
            $i++;  
            $itm=end($A);
            array_pop($A);
            array_unshift($A,$itm);
        }

    }
    return $A;
}

solution([1,5,5] , 0);