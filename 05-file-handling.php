<?php

// 23. File Writing (file_put_contents)
file_put_contents("app.log", "Log entry at " . date("Y-m-d H:i:s") . "\n", FILE_APPEND);
// Result: Writes line to app.log

// 24. File Reading (file_get_contents)
$content = file_get_contents("app.log");
echo substr($content, 0, 20); // Result: Log entry at...

// 25. JSON Processing
$jsonString = '{"name":"John","role":"Dev"}';
$decoded = json_decode($jsonString, true);
echo $decoded['role']; // Result: Dev

// 26. CSV Processing
$csvData = [["ID", "Name"], [1, "Alice"], [2, "Bob"]];
$fp = fopen('users.csv', 'w');
foreach ($csvData as $row) { fputcsv($fp, $row); }
fclose($fp); // Result: Creates users.csv

?>