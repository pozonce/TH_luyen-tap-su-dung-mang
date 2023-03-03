<?php
function countOccurrences($arr, $target) {
    $count = 0;
    foreach($arr as $val) {
        if($val == $target) {
            $count++;
        }
    }
    return $count;
}

$numbers = [1, 2, 5, 4, 3, 2, 1, 12, 22, 14, 24];
$count = countOccurrences($numbers, 22);
echo "The number 22 appears " . $count . " times in the array.";
