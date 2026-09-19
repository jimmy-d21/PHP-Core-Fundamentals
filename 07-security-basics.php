<?php 

// Input Sanitization
$rawEmail = "   john.doe(at)example.com  ";
$cleanEmail = filter_var(trim($rawEmail), FILTER_SANITIZE_EMAIL);
echo $cleanEmail; // Result: john.doe(at)example.com

?>