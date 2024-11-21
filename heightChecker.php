<?php
function heightChecker($heights) {
    $expected = $heights;
    sort($expected);

    $differences = 0;
    for ($i = 0; $i < count($heights); $i++) {
        if ($heights[$i] != $expected[$i]) {
            $differences++;
        }
    }
    return $differences;
}

$heights1 = [1, 1, 4, 2, 1, 3];
echo "Output: " . heightChecker($heights1) . "\n";
echo "<br>";
$heights2 = [5, 1, 2, 3, 4];
echo "Output: " . heightChecker($heights2) . "\n"; 
echo "<br>";
$heights3 = [1, 2, 3, 4, 5];
echo "Output: " . heightChecker($heights3) . "\n";
?>
