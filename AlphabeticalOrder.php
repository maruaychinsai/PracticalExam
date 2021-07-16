<?php 
//i let $names be my array with the data given and use sort fucntion 
    $names = array('Marvin', 'Marco', 'Marvin','Marco', 'Marco','Marvin', 'Christian');
    sort($names);

    foreach($names as $y => $x)
    {
        echo "Name [".$y."] =".$x."<br>";
    }
?>