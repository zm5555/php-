



<form action="" method="post">
    <input type="text" name="n1" />
    <input type="submit" name="提交" />
</form>
<?php
//判断一个数字是不是素数，是输出yes，不是输出no
// $data1 = $_POST['n1'];
// for ($i=2;$i<pow($data1,0.5);++$i){
//     if(is_int($data1/$i)){
//         $flag="不是素数";
//        // echo $i;
//     break;
//     }
    
//     else{
//        $flag="yes";
//     }
// }
// echo $flag;


// //不用flag用计数器也可以

// $c=0;
// $data1 = $_POST['n1'];
// for ($i=1;$i<=$data1;++$i){
//     if($data1%$i==0){
//         $c++;
//     }
// }
// if ($c==2){
//     echo"是素数";
// }
// else{
//     echo "不是素数";
// }


$c=0;
$data1 = $_POST['n1'];
for ($i=1;$i<=$data1/2;++$i){
    if($data1%$i==0){
        $c++;
    }
}
if ($c==1){
    echo"是素数";
}
else{
    echo "不是素数";
}


// $c=0;
// $data1 = $_POST['n1'];
// for ($i=1;$i<=pow ($data1,0.5);++$i){
//     if($data1%$i==0){
//         $c++;
//     }
// }
// if ($c==1){
//     echo"是素数";
// }
// else{
//     echo "不是素数";
// }
















