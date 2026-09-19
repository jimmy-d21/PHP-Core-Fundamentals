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

?>