<?php
$a=[3,8=>5,"dd1"=>6,2,11=>9,4];

function jiaohuan ($a){
    $max=$a[0];
    $min=$a[0];
    $k1="";
    $k2="";
    foreach ($a as $key=>$value){
        if($value>$max){
            $max=$value;
            $k1=$key;
        }
        if($value<$min){
            $min=$value;
            $k2=$key;
        }
    }
    echo $k1."=>".$max;
    echo "\n";
    echo $k2."=>".$min;

    $t=$a[$k1];
    $a[$k1]=$a[$k2];
    $a[$k2]=$t;
    return $a;
}
$b=jiaohuan($a);
print_r($b);