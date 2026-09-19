<?php 

// Input Sanitization
$rawEmail = "   john.doe(at)example.com  ";
$cleanEmail = filter_var(trim($rawEmail), FILTER_SANITIZE_EMAIL);
echo $cleanEmail; // Result: john.doe(at)example.com

// Password Hashing (Bcrypt/Argon2)
$password = "SecretP@ss123";
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
echo "Hash generated"; // Result: Hash generated

// Password Verification
$isValid = password_verify("SecretP@ss123", $hashedPassword);
var_dump($isValid); // Result: bool(true)

?>