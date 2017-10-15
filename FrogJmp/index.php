<?php

function solution($X, $Y, $D) 
{
    $saltos=0;
    if (($Y - $X)%$D == 0) 
    {
        $saltos= ($Y - $X)/$D;
    }else{
        $saltos= ($Y - $X)/$D+1;
    }
    return (int)($saltos);
}
echo solution(10,85,30);
//142730189