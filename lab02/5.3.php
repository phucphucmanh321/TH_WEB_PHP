<?php
    $a = 4;
    $b = 8;  
    $c = 1;

    $delta = pow($b,2) - 4*$a*$c;
    if($delta>0){
        $x1 = ( -$b + sqrt($delta) ) / 2*$a;
        $x2 = ( -$b - sqrt($delta) ) / 2*$a;
        echo "Phương trình có 2 nghiệm phân biệt <br />";
        echo "x1 = ".$x1;
        echo "<br />x2 = ".$x2;
    } else if($delta == 0){
        $x = -$b  / 2*$a;
        echo "Phương trình có nghiệm kép<br />";
        echo "x1 = x2 = ".$x;
    } else echo "Phương trình vô nghiệm";
?>