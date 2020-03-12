<?php
$d1=1;
$d2=2;
$d3=4;
$d4=8;
$d5=16;
$state=13;
for ($i=1;$i<=5;++$i){
    $temp="d".$i;
    $r=$state&$$temp;
    if ($r>0){
        echo "number", $i, " yes\n";
    }
    else{
        echo "number", $i," no\n";
    }
}
$state=$state | $d1;//将1号的状态置为yes
for ($i=1;$i<=5;++$i){
    $temp="d".$i;
    $r=$state&$$temp;
    if ($r>0){
        echo "number", $i, " yes\n";
    }
    else{
        echo "number", $i," no\n";
    }
}
$state=$state|$d5;//将5号的状态置为yes

for ($i=1;$i<=5;++$i){
    $temp="d".$i;
    $r=$state&$$temp;
    if ($r>0){
        echo "number", $i, " yes\n";
    }
    else{
        echo "number", $i," no\n";
    }
}
$state=$state&~$d2;
$state=$state&~$d3;//这样是改为no
$state=$state&~$d4;
$state=$state&~$d5;
$state=$state&~$d1;
for ($i=1;$i<=5;++$i){
    $temp="d".$i;
    $r=$state&$$temp;
    if ($r>0){
        echo "number", $i, " yes\n";
    }
    else{
        echo "number", $i," no\n";
    }
}