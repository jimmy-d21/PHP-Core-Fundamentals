<?php

// 27. Superglobals ($_SERVER)
$clientIp = $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1';
$method = $_SERVER['REQUEST_METHOD'];
echo "$method request from $clientIp"; // Result: GET request from 127.0.0.1

// 28. Query String Processing ($_GET)
$page = filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT) ?? 1;
echo "Current Page: $page"; // Result: Current Page: 1

// 29. Form Handling ($_POST)
$username = $_POST['username'] ?? '';
echo "Submitted user: " . htmlspecialchars($username);

// 30. Setting & Reading Cookies
setcookie("theme", "dark", time() + 3600, "/");
echo $_COOKIE['theme'] ?? 'light'; // Result: dark (on subsequent request)

?>