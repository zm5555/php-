<?php

function f1()
{
    static $i = 1;
    echo "$i";
    $i++;
    if ($i < 10) {    //出口条件 只有i<100才会调用
        f1();       //函数中调用函数
    }
}
f1();

echo "<br>";
//求一个数的阶乘
function jiecheng($n)
{
    if ($n == 1) { //1的阶乘是1
        return 1;
    }
    $result = jiecheng($n - 1) * $n; //求n的阶乘就是n乘以n-1的阶乘
    return $result;
}


$v1 = jiecheng(10);
echo $v1;

//求斐波那契数列第n项
function fbnq($n)
{
    $n1 = 1;                      //数列的第一项
    $n2 = 1;                      //数列的第二项  
    $result = 0;


    for ($i = 3; $i <= $n; $i++) {  //前两项已知，从第三项开始
        $result = $n1 + $n2;
        $n1 = $n2;                    //刚才的第二项变成现在的第一项
        $n2 = $result;                //求得的结果变成第二项了
    }
    return $result;
}
$v2 = fbnq(12);

echo "<br>";
echo $v2;




//求斐波那契数列第n项
function fbnq2($n)
{
    if ($n == 3) {
        return 2;
    }
    if ($n == 4) {
        return 3;
    }
    $result = fbnq2($n - 1) + fbnq2($n - 2);
    return $result;
}
$v3 = fbnq2(21);

echo "<br>";
echo $v3;
