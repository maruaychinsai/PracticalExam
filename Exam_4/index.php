<?php
  
// Declare and define two dates
$date1 = strtotime("2020-12-03"); 
$date2 = strtotime("2021-03-14"); 
  
// i used absolute value so there's no posibility that it will be negative
$diff = abs($date2 - $date1); 
  
  
// year divide the date into total seconds in a year (365*60*60*24) to get year
$years = floor($diff / (365*60*60*24)); 
  
  
// to get month subtract it with years
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24)); 
  
  
//subtract years month and divide to total seconds in a day
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
  
  
//print the result
printf("%d years, %d months, %d days", $years, $months,$days);
?>