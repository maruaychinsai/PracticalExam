<?php
// PHP code to check for Palindrome string in PHP
// strrev will reverse the variable string
function Palindrome($str){ 
    if (strrev($str) == $str){ 
        return 1; 
    }
    else{
        return 0;
    }
} 
 

$input = "RACECAR";
if(Palindrome($input)){ 
    echo "Palindrome"; 
}
else { 
echo "Not a Palindrome"; 
}
?> 