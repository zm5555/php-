<?php
//计算给定两个数的最大公约数和最小公倍数
function gongyueshu($a1, $a2)//这个函数是求最大公约数
{
    for ($i = 2; $i < $a1; $i++) {//把a1的所有约数都存到数组arr1中
        if ($a1 % $i == 0) {
            $arr1[] = $i;
        }
    }
    for ($j = 2; $j < $a2; $j++) {//把a2的所有约数都存到数组arr2中
        if ($a2 % $j == 0) {
            $arr2[] = $j;
        }
    }
    $result = array_intersect($arr1, $arr2);//找到两个数组的交集
    return max($result);//返回最大值
}
function gongbeishu($a1, $a2)//这个函数是求最小公倍数
{
    for ($i = 1; $i < $a2; $i++) {//把a1从1-a2之间所有的倍数存到数组arr1
        $arr1[] = $i * $a1;
    }
    for ($j = 1; $j < $a1; $j++) {//把a2从1-a1之间所有的倍数存到数组arr2
        $arr2[] = $j * $a2;
    }

    $result = array_intersect($arr1, $arr2);//找两个数组的交集
    return min($result);//返回最小值
}
$a1 = 240;
$a2 = 360;
$gongyueshu = gongyueshu($a1, $a2);
$gongbeishu = gongbeishu($a1, $a2);
echo "最大公约数是" . $gongyueshu;
echo "最小公倍数是" . $gongbeishu;
