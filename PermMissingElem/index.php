<?php

function solution($A) {
    sort($A);
    $total=count($A);
    if($total==0){
        return 1;
    }
    elseif($total==1){
        $valor=end($A);
        if(end($A)==1 || end($A)==0){
            $valor++;
        }else{
            $valor--;
        }
        return $valor;
    }else{
        for ($i=0; $i <$total ; $i++) {   
            if($i == $total - 1 )
            {
                
                if($A[$i-1]>1 && $total<3){
                    return $A[$i-1]-1; 
                }else{
                    if($A[0]>1){
                        return $A[0]-1;
                    } 
                    break;
                }
               
            }         
            if(($A[$i+1]-$A[$i])!=1)
            {
               return $A[$i]+1;
            }
        }
    }
    return end($A)+1;
}

echo solution([-1,-3]);