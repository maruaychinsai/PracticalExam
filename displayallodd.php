<?php
$even="";
$odd="";
$i=1;
do
{
if($i%2==0)
{
$even = $even . "" .$i ;
}
else
{
$odd = $odd . "<br>" .$i;
}$i++;
}
while($i<=20);
echo "The Odd no =$odd";?>