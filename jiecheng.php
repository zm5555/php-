<?php

//求一个数的阶乘
function jiecheng($n)
{
    if ($n == 1) { //1的阶乘是1
        return 1;
    }
    $result = jiecheng($n - 1) * $n; //求n的阶乘就是n乘以n-1的阶乘
    return $result;
}



echo "<br>";

$n=6;
$jc=1;
for($i=2;$i<=$n;$i++){
    $jc=$jc*$i;
}
echo $jc;






