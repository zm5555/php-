<?php

//写个函数计算给定半径的⚪的面积
function measure_of_area($r){
    return $r*$r*M_PI;
}

$a = measure_of_area(100);
echo $a;