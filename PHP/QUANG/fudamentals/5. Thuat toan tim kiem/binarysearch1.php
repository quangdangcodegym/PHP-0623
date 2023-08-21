<?php
function binarySearch(
    array $numbers,
    int $needle,
    int $low,
    int $high
): bool {

    if ($high < $low) {
        return false;
    }

    $mid = (int)(($low + $high) / 2);

    if ($numbers[$mid] > $needle) {
        return binarySearch($numbers, $needle, $low, $mid - 1);
    } else if ($numbers[$mid] < $needle) {
        return binarySearch($numbers, $needle, $mid + 1, $high);
    } else {
        return true;
    }
}
$numbers = range(1, 200, 5);

$number = 31;
if (binarySearch($numbers, $number, 0, count($numbers) - 1)) {
    echo "$number Found \n";
} else {
    echo "$number Not found \n";
}

$numberTwo = 500;
if (binarySearch($numbers, $numberTwo, 0, count($numbers) - 1)) {
    echo "$numberTwo Found \n";
} else {
    echo "$numberTwo Not found \n";
}
