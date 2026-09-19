<?php

// 12. Indexed Arrays & Pushing Elements
$colors = ["Red", "Green"];
array_push($colors, "Blue");
echo $colors[2]; // Result: Blue

// 13. Associative Arrays
$product = ["id" => 101, "name" => "Keyboard", "price" => 49.99];
echo $product["name"]; // Result: Keyboard

// 14. Multidimensional Arrays
$matrix = [
    [1, 2],
    [3, 4]
];
echo $matrix[1][0]; // Result: 3

// 15. Array Transformation (array_map)
$numbers = [1, 2, 3, 4];
$squared = array_map(fn($n) => $n * $n, $numbers);
print_r($squared); // Result: [1, 4, 9, 16]

?>