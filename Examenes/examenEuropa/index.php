<?php

function solution($S) {
    $arrayS=explode(' ',$S);
    if(empty($arrayS)){
        return -1;
    }
    $result=array();
    for ($i=0; $i <count($arrayS) ; $i++) {
        if(IsNumeric($arrayS[$i])){
            array_push($result,$arrayS[$i]);
        }elseif(IsDup($arrayS[$i])){
            $d=end($result);
            array_push($result,$d);
        }elseif(IsPop($arrayS[$i])){
            array_pop($result);
        }elseif(IsLess($arrayS[$i])){
            $a=(int)end($result);
            $j=count($result)-2;
            if($j<1){
                return -1;
            }
            $b=(int)$result[$j];
            array_pop($result);
            array_pop($result);
            array_push($result,($a-$b));
        }elseif(IsPlus($arrayS[$i])){
            $a=(int)end($result);
            $j=count($result)-2;
            if($j<1){
                return -1;
            }
            $b=(int)$result[$j];
            array_pop($result);
            array_pop($result);
            array_push($result,($a+$b));
        }else{
            return -1;
        }
    }
    return (int)end($result);  
}

function IsNumeric($val) { 
  if (is_numeric($val)) { 
    return true; 
  } 
  return false; 
} 

function IsDup($val) { 
  if ($val=="DUP") { 
    return true; 
  } 
  return false; 
} 

function IsPop($val) { 
  if ($val=="POP") { 
    return true; 
  } 
  return false; 
} 

function IsLess($val) { 
  if ($val=="-") { 
    return true; 
  } 
  return false; 
} 

function IsPlus($val) { 
  if ($val=="+") { 
    return true; 
  } 
  return false; 
} 

echo solution("3 DUP 5 - -");