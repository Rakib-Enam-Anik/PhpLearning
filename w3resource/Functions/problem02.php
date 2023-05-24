<?php
//Write a function to check whether a number is prime or not

function IsPrime($n){
    for($x=2; $x<$n; $x++){
        if($n %$x ==0){
            return 0;
        }
    }
    return 1;
}
$a = IsPrime(3);
if ($a==0)
echo 'this is not a Prime Number....'."\n";
else
echo 'this is a Prime Number...'."\n";
?>