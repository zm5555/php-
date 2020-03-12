<?php
$a = [5, 15, 3, 4, 9, 11];

$t1=microtime(true);


function maopao2($a)
{

    for ($i = 1; $i < count($a); ++$i) {

        for ($j = 0; $j < count($a) - $i; $j++) {
            if ($a[$j] > $a[$j + 1]) {
                $t = $a[$j];
                $a[$j] = $a[$j + 1];
                $a[$j + 1] = $t;
            }
        }
    }
    return $a;
}
maopao2($a);
echo json_encode(maopao2($a));
$t2=microtime(true);


$a = [5, 15, 3, 4, 9, 11];

$t4=microtime(true);
function maopao($a)
{

    for ($i = 1; $i < count($a); ++$i) {

        for ($j = 0; $j < count($a) - $i; $j++) {
            if ($a[$j] > $a[$j + 1]) {
                $t = $a[$j];
                $a[$j] = $a[$j + 1];
                $a[$j + 1] = $t;
            }
        }
    }
    echo json_encode($a);
}
maopao($a);
$t3=microtime(true);


echo "方法1所需时间为";
echo $t2-$t1;
echo "\n";
echo "方法2所需时间为";
echo $t3-$t4;


