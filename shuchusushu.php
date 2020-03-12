<form action="" method="post">
    <input type="text" name="n1" />
    <input type="submit" name="提交" />
</form>
<?php
//判断一个数字是不是素数
$n = $_POST['n1'];
function sushu($n)
{
    $t1=microtime(true);
    for ($j = 2; $j < 20000; $j++) {             //j是从2-200
        for ($k = 2; $j > $k; $k++) {          //
            if ($j % $k == 0) {              //余数是0表示不是素数
            $f=0;
            break;
            }
            else {
                $f=1;
            }
        }
       if($f==1){
          // echo $j;
         //  echo "\n";
       }
    }
    
    $t2=microtime(true);
    echo "t=". ($t2-$t1);
    for ($i = 2; $i < $n; ++$i) {
        if (is_int($n / $i)) {
            $flag = "不是素数";
            break;
        } else {
            $flag = "是素数";
        }
    }
    echo $flag;


}

sushu($n);



