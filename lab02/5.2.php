<?php

use function PHPSTORM_META\type;

    $a = 100;
    $b = $a - floor($a);
    if($b > 0)
        echo $a." là số thực.";
    else echo $a." là số nguyên.";
?>