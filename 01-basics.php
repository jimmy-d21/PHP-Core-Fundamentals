<?php

// 1. Basic PHP Syntax & HTML Embedding
$title = "Core Fundamentals";
echo "<h1>Welcome to $title</h1>"; // Result: Output <h1> with variable

// 2. Variables & Scope
$globalUser = "Alex";
function getProfile() {
    global $globalUser;
    static $calls = 0;
    $calls++;
    return "User: $globalUser (Call #$calls)";
}
echo getProfile(); // Result: User: Alex (Call #1)

// 3. Data Types Inspection
$price = 19.99;
$inStock = true;
var_dump($price, $inStock); // Result: float(19.99) bool(true)

// 4. Casting Data Types
$rawQty = "15 items";
$qtyInt = (int)$rawQty;
echo "Casted Quantity: $qtyInt"; // Result: 15

// 5. Output Methods Comparison
echo "Echo string 1", " Echo string 2\n"; // Result: Echo string 1 Echo string 2
print_r(["PHP", "MySQL"]); // Result: Array ( [0] => PHP [1] => MySQL )

?>