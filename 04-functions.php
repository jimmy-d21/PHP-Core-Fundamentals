<?php

// 17. Function Declaration & Return Types
function calculateTax(float $amount, float $rate = 0.12): float {
    return $amount * $rate;
}
echo calculateTax(100.0); // Result: 12

// 18. Named Arguments (PHP 8)
echo calculateTax(rate: 0.15, amount: 200.0); // Result: 30

// 19. Variadic Functions (...$args)
function sumAll(int ...$numbers): int {
    return array_sum($numbers);
}
echo sumAll(10, 20, 30, 40); // Result: 100

// 20. Anonymous / Callback Functions
$greet = function($name) { return "Hello, $name"; };
echo $greet("Sarah"); // Result: Hello, Sarah

// 21. Arrow Functions (fn)
$multiplier = 3;
$triple = fn($n) => $n * $multiplier;
echo $triple(5); // Result: 15

?>