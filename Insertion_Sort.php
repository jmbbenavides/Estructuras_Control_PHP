<?php
function insertionSort1($n, $arr) {
    $value = $arr[$n - 1]; 
    $i = $n - 2;

    
    while ($i >= 0 && $arr[$i] > $value) {
        $arr[$i + 1] = $arr[$i]; 
        echo implode(" ", $arr) . "<br>|"; 
        $i--;
    }

    $arr[$i + 1] = $value;
    echo implode(" ", $arr) . "<br>"; 
}

//jemplo de uso
$n = 5;
$arr = [2, 4, 6, 8, 3];
insertionSort1($n, $arr);
