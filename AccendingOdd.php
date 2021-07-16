<?php

$num = array ('9863','7127','2020','80','131','55','100');
//basically this function will sort the numbers in accending order
asort($num);
foreach($num as $y => $x)
{
    echo "Numbers [".$y."] =".$x."<br>";
}
?>