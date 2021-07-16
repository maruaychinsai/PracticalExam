
<?php  


function Fibonacci($number){
      
    // if and else if for first two series
    if ($number == 0)
        return 0;    
    else if ($number == 1)
        return 1;    
      
    // recursive call to get the upcoming numbers
    else
        return (Fibonacci($number-1) + 
                Fibonacci($number-2));
}
  
$number = 10;
//loop will stop if it's 10
for ($counter = 0; $counter < $number; $counter++){  
    echo Fibonacci($counter),"";
}
?>