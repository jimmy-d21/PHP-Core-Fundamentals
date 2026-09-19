<?php

// 27. Superglobals ($_SERVER)
$clientIp = $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1';
$method = $_SERVER['REQUEST_METHOD'];
echo "$method request from $clientIp"; // Result: GET request from 127.0.0.1

?>