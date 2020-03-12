<?php
set_error_handler("error");
function error($errNo,$errMsg,$errFile,$errLine){

    echo "$errFile 的 $errLine 行发生错误，";
    echo "错误号为$errNo ，错误信息是$errMsg";


    echo"!!!!!!!!!!!\n";
}
echo $asdfasdf;
trigger_error("text error",E_USER_WARNING);
$a=func();