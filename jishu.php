<?php
// 求一个数组中最小的奇数
$a = [5, 8, 11, 14, 4, 2, 0,];
// 思路： 先排序。再找有没有奇数
for ($i = 1; $i < count($a); $i++) {   // 先冒泡排序
    for ($c = 0; $c < count($a) - $i; $c++) {
        if ($a[$c] > $a[$c + 1]) {
            $t = $a[$c];
            $a[$c] = $a[$c + 1];
            $a[$c + 1] = $t;
        }
    }
}
for ($j = 0; $j < count($a); $j++) {
    if ($a[$j] % 2 == 1) {
        $flag = "有奇数";
        echo "最小的奇数是$a[$j]";
        break;
    } else {
        $flag = "没有奇数";
    }
}
echo $flag;

//思路2 先把所有的奇数放入一个数组，然后再输出最小的

$b = [5, 8, 11, 14, 4, 2,];
$c = [];
foreach ($b as $value) { 
    if ($value % 2 == 1) {
        $c[] = $value;
    }
}
if ($c){
    $min=min($c);
    echo "最小的奇数$min";
}
else{
    echo "没有奇数";

}