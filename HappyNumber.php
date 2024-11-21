<?php
function isHappy($n) {
    $seen = [];

    while ($n !== 1 && !isset($seen[$n])) {
        $seen[$n] = true;
        $n = array_sum(array_map(fn($digit) => $digit ** 2, str_split($n)));
    }

    return $n === 1;
}

$n1 = 19;
echo isHappy($n1) ? "true" : "false"  ; 

echo "<br>";
$n2 = 2;
echo isHappy($n2) ? "true" : "false";
?>
