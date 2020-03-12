<?php

$a = [
        [
            [1,2],[3,4]
        ],
        [
            [5,6],[7,8]
        ]   
    ];
$b=max($a);
echo json_encode( $b);
function test_print($value)
{
    echo $value;
}
//array_walk_recursive($a, 'test_print');
