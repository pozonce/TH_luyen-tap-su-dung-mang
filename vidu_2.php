<?php
function findMin($arr) {
    $min = $arr[0];
    foreach($arr as $val) {
        if($val < $min) {
            $min = $val;
        }
    }
    return $min;
}

$numbers = [1, 2, 5, 4, 3, -1, -22];
$min = findMin($numbers);
echo "The smallest number is: " . $min;
