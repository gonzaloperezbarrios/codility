<?php
function solution($N) {
    // write your code in PHP7.0
   $i=1;
   $num=null;
   while ($i <= $N) {
        $num=$i;
        $fizz=IsFizz((int)$num);
        $buzz=IsBuzz((int)$num);
        $woof=IsWoof((int)$num);
        if($i==1){
            print($i);
            echo("\x0a");
            $i++;
            continue;
        }
        if($fizz && $buzz && $woof ){
            print("FizzBuzzWoof");
            echo("\x0a");
        }elseif($fizz && $buzz){
            print("FizzBuzz");      
            echo("\x0a");
        }elseif($fizz && $woof){
            print("FizzWoof");      
            echo("\x0a");
        }else{ 
            if($fizz)
            {
                print("Fizz");
                echo("\x0a");
            }elseif($buzz)
            {
                print("Buzz");
                echo("\x0a");
            }elseif($woof)
            {
                print("Woof");
                echo("\x0a");
            }else{
                print($i);
                echo("\x0a");
            }
            
        } 
        $i++;
        
    }
}

function IsFizz($i)
{
    return ($i%3==0)?true:false;
}

function IsBuzz($i)
{
    return ($i%5==0)?true:false;
}

function IsWoof($i)
{
    return ($i%7==0)?true:false;
}

solution(24);

/*
1
2
Fizz
4
Buzz
Fizz
Woof
8
Fizz
Buzz
11
Fizz
13
Woof
FizzBuzz
16
17
Fizz
19
Buzz
FizzWoof
22
23
Fizz
*/