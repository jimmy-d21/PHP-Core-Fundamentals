<?php

// 17. Function Declaration & Return Types
function calculateTax(float $amount, float $rate = 0.12): float {
    return $amount * $rate;
}
echo calculateTax(100.0); // Result: 12

// 18. Named Arguments (PHP 8)
echo calculateTax(rate: 0.15, amount: 200.0); // Result: 30

?>