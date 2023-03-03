<?php
function reverseArray($arr)
{
    $result = [];
    for ($i = count($arr) - 1; $i >= 0; $i--) {
        $result[] = $arr[$i];
    }
    return $result;
}

$numbers = [1, 2, 5, 4, 3, 4, 7, 22, 14];
$reversed = reverseArray($numbers);
echo "The reversed array is: " . implode(", ", $reversed);
