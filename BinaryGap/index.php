<?php

function solution($N)
{
    $binario=decbin($N);
    $arryBinario=str_split($binario);
    $max=0;
    $maxTemp=0;
    for ($i=0; $i <count($arryBinario) ; $i++) { 
        if((int)$arryBinario[$i]==1)
        {
            $j=$i;
            $a=contarCeros($arryBinario, ++$j);
            if($a!=false){
                $maxTemp=$a;              
            }
        }
        if($maxTemp>$max){
            $max=$maxTemp;
        }
    }
    return $max;
}

function contarCeros($arryBinario, $j)
{
    $cont=0;
    $control=false;
    for ($i=$j; $i <count($arryBinario) ; $i++) { 
        $arryBinario[$i];
        if((int)$arryBinario[$i]==0){
            $cont++;
        }else{
            $control=true;
            break;
        }
    }
    if($control){
        return $cont;
    }else{
        return false;
    }
}

echo solution(15);