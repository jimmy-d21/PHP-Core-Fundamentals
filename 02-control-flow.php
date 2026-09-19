<?php 

// 7. Conditionals: if / else / switch
$role = "admin";
if ($role === "admin") {
    echo "Access granted"; // Result: Access granted
}

// 8. PHP 8 Match Expression
$status = 200;
$message = match($status) {
    200, 201 => "Success",
    404 => "Not Found",
    default => "Unknown Status",
};
echo $message; // Result: Success

// 9. Null Coalescing Operator (??)
$userInput = $_GET['user'] ?? 'Guest';
echo "Hello, $userInput"; // Result: Hello, Guest

// 10. Nullsafe Operator (?->)
$userObj = null;
$country = $userObj?->getProfile()?->country;
var_dump($country); // Result: NULL

// 11. Loops: foreach with Key-Value
$prices = ["Apple" => 1.2, "Banana" => 0.8];
foreach ($prices as $fruit => $cost) {
    echo "$fruit costs $$cost\n"; // Result: Apple costs $1.2 ...
}

?>