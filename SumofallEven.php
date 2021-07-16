<?php

// my variables are $even and $i
$even=0;
$i=1;

while($i<=10)
{
    //we all know that even are divisible by 2 and if its equal to 0 then its even
if($i % 2==0)
{
    //$even is equals to $even + $i
$even += $i ;
}
//$i is incrimented it will not stop unless equal na sa 10
$i++;
}
echo "The sum of all even numbers is: $even";

?>