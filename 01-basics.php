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

?>