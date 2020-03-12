<?php
//公鸡5R一个，母鸡3R，小鸡1r3个
//要计算效率高
//100R买了100鸡。求各几只
//思路：5x+3y+1/3z=100
//      x+y+z=100
//      两个方程求小于100的正整数解 
//      x=100-y-z 代入方程1
//      5（100-y-z）+3y+1/3z=100
//      500-2y-14/3 z=100
//      2y+（14/3）z=400
//      即求3y+7z=600 在100以内的正整数解
//      z=（600-3y）/7

$t1 = microtime(true);
for ($y = 1; $y <= 100; $y++) {
    $z = (600 - 3 * $y) / 7;
    if (is_int($z) && $z >= 0 && 100 - $y - $z >= 0) {

        echo "母鸡" . $y . "只 ";
        echo "小鸡" . $z . "只 ";
        $x = 100 - $y - $z;
        echo "公鸡" . $x . "只 ";
        echo "\n";
    }
}

$t2 = microtime(true);
echo '耗时'.round($t2-$t1,10).'秒';
echo"\n";


$t1 = microtime(true);
for($gongji=0;$gongji<=20;++$gongji ){
    for($muji=0;$muji<=(100-$gongji*5)/3;++$muji){
        $xiaoji=100-$gongji-$muji;
        if($xiaoji%3!=0){
            continue;
        }
        if($gongji*5+$muji*3+$xiaoji/3==100){
            echo "gongji$gongji,muji$muji,xiaoji$xiaoji";

        }
    }
}

$t2 = microtime(true);
echo '耗时'.round($t2-$t1,10).'秒';




//少用循环更快啊