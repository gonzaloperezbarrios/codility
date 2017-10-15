<?php

function solution($a){
    sort($a);
    $result = $a[0];
    for($i=0; $i < count($a); $i++) {
        if($i == count($a) - 1) {
            return $a[$i];
        }
        if($a[$i] == $a[$i+1]) {
            $i++;
        } else {
           return $a[$i];
        }
    }
    return $result;
}


echo solution([9,3,9,3,9,7,9]);

