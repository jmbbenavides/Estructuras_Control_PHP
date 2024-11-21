<?php
function fizzBuzz($n) {
    $answer = [];

    for ($i = 1; $i <= $n; $i++) {
        if ($i % 3 === 0 && $i % 5 === 0) {
            $answer[] = "FizzBuzz";
        } elseif ($i % 3 === 0) {
            $answer[] = "Fizz";
        } elseif ($i % 5 === 0) {
            $answer[] = "Buzz";
        } else {
            $answer[] = (string)$i;
        }
    }

    return $answer;
}

$n1 = 3;
print_r(fizzBuzz($n1)); 
echo "<br>";
$n2 = 5;
print_r(fizzBuzz($n2)); 
echo "<br>";
$n3 = 15;
print_r(fizzBuzz($n3)); 
?>
