<?php
function chuanlian()
{

    $arr = func_get_args();
    $s1 = $arr[0];
    $count = count($arr);
    $result=$arr[1]."";
    for ($i = 2; $i < $count; $i++) {
        $result .= $s1 . $arr[$i];
    }
    echo $result;
}
chuanlian("-", "ab", "cd", "123");
