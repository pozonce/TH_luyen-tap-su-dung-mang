<?php
function calculateSum($arr)
{
    $sum = 0;
    foreach ($arr as $val) {
        $sum += $val;
    }
    return $sum;
}

$numbers = [1, 2, 5, 4, 3, 0, 22, 12];
$sum = calculateSum($numbers);
echo "The sum is: " . $sum;
