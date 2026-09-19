<?php

// 17. Function Declaration & Return Types
function calculateTax(float $amount, float $rate = 0.12): float {
    return $amount * $rate;
}
echo calculateTax(100.0); // Result: 12

?>