<?php

function solution($a){
    sort($a);
    $result = $a[0];
    $tem=array();
    for($i=0; $i < count($a); $i++) {
        if($i == count($a) - 1) {
           break;
        }
        if($a[$i] == $a[$i+1]) {
            $i++;
        } else {
            array_push($tem,$a[$i]);
        }
    }
    return max($tem);
}
echo solution([4, 6, 2, 2, 6, 6, 1]);