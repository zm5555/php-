<?php
for ($i = 1; $i <= 4; ++$i) {


    for ($j = 1; $j <= 4; ++$j) {
        echo "*";
    }
    echo "\n";
}
$n = 4;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}

for ($i = 1; $i <= $n; $i++) {
    //这个循环用于控制行数
    for ($j = 1; $j <= 2 * $i - 1; $j++) {
        echo "*";
    }
    echo "\n";
}

for ($i = 1; $i <= $n; $i++) {
    //这个循环用于控制行数
    for ($j = 1; $j <= $n - $i; $j++) { //先输出n-i个空格
        echo " ";
    }
    for ($j = 1; $j <= 2 * $i - 1; $j++) { //再输出2i-1个*
        echo "*";
    }
    echo "\n";
}

for ($i = 1; $i <= $n; $i++) {  //这个循环用于控制行数
    for ($j = 1; $j <= $n - $i; $j++) { //这个循环用于控制每行先输出多少个空格
        echo " ";
    }
    for ($j = 1; $j <= 2 * $i - 1; $j++) {
        if ($j == 1 || $j == 2 * $i - 1) {   //判断是不是第一个或者最后一个输出
            echo "*";
        } else {
            echo " ";
        }
    }
    echo "\n";
}


for ($i = 1; $i <= $n; $i++) {  //这个循环用于控制行数

    for ($j = 1; $j <= $n - $i; $j++) { //这个循环用于控制每行先输出多少个空格
        echo " ";
    }
    for ($j = 1; $j <= 2 * $i - 1; $j++) {
        if ($i == $n) {
            echo "*";
        } else {
            if ($j == 1 || $j == 2 * $i - 1) {   //判断是不是第一个或者最后一个输出
                echo "*";
            } else {
                echo " ";
            }
        }
    }

    echo "\n";
}

for ($i = 1; $i <= $n; $i++) {  //这个循环用于控制行数
    for ($j = 1; $j <= $n - $i; $j++) { //这个循环用于控制每行先输出多少个空格
        echo " ";
    }
    for ($j = 1; $j <= 2 * $i - 1; $j++) {
        if ($j == 1 || $j == 2 * $i - 1) {   //判断是不是第一个或者最后一个输出
            echo "*";
        } else {
            echo " ";
        }
    }
    echo "\n";
}
for ($i = $n-1; $i >=1; $i--) {  //这个循环用于控制行数
    for ($j = 1; $j <= $n - $i; $j++) { //这个循环用于控制每行先输出多少个空格
        echo " ";
    }
    for ($j = 1; $j <= 2 * $i - 1; $j++) {
        if ($j == 1 || $j == 2 * $i - 1) {   //判断是不是第一个或者最后一个输出
            echo "*";
        } else {
            echo " ";
        }
    }
    echo "\n";
}