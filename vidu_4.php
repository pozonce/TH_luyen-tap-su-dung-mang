<?php
function findMultiplesOfThree($arr) {
    $result = [];
    foreach($arr as $val) {
        if($val % 3 == 0) {
            $result[] = $val;
        }
    }
    return $result;
}

$numbers = [1, 2, 5, 6, 7, 9, 12, 15, 22, 24, 14, 421];
$multiples = findMultiplesOfThree($numbers);
echo "The multiples of three are: " . implode(", ", $multiples);
