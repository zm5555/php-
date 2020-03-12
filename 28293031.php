<?php
$year = 2014;
$month = 2;
switch ($month) {
    case 1:
        echo "31";
        break;
    case 2:
        if(isRunnian($year)) {
            echo "29";
        } else {
            echo "28";
        }
        break;
    case 3:
        echo "31";
        break;
    case 4:
        echo "30";
        break;
}
function isRunnian($y)
{
    if ($y % 4 == 0 && $y % 100 != 0 || $y % 400 == 0) {
        return true;
    }
    else{
        return false;
    }
}
?>
