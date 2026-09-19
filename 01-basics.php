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

?>