<?php
$total;

function sum($a, $b, &$total){
    $total = $a + $b;
}

sum(2,$b, $total);

echo $total;

?>