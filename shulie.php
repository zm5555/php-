<?php
function shulie($n){

if($n==1){
    return 1;
}

if($n==2){
    return 2;
}





$result=shulie($n-2)*3;

    return $result;

}
$n=7;
echo $result=shulie($n);
