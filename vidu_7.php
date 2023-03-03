<?php
function findMostFrequent($arr)
{
    $count = array();
    foreach ($arr as $val) {
        if (isset($count[$val])) {
            $count[$val]++;
        } else {
            $count[$val] = 1;
        }
    }
    $max = 0;
    foreach ($count as $val) {
        if ($val > $max) {
            $max = $val;
        }
    }
    $result = array();
    foreach ($count as $key => $val) {
        if ($val == $max) {
            $result[] = $key;
        }
    }
    return $result;
}

$numbers = [1, 2, 5, 4, 3, 2, 1, 2, 2];
$frequent = findMostFrequent($numbers);
echo "The most frequent numbers are: " . implode(", ", $frequent);
