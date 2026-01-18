<?php
// (i) Strings represented with literals (single quote or double quote)
echo 'Hello ' . 'World!'; // single quotes concatenation
echo "\n";
echo "Hello " . "World!"; // double quotes concatenation
echo "\n";

// (ii) Strings as variables
$str1 = "Good";
$str2 = "Morning";
echo $str1 . $str2;
echo "\n";

// (iii) Multiple strings as literals and variables
$name = "Alice";
echo 'Hello, ' . $name . "! Welcome to " . "PHP programming.";
echo "\n";

// (iv) Strings and string variables containing single quotes inside the content
$quote = "It's a wonderful day";
echo "Message: " . $quote;
echo "\n";
echo "She said, 'Hello!'";
echo "\n";

// (v) Strings containing HTML segments with elements and attributes
$html = '<a href="https://example.com" target="_blank">Visit Example</a>';
echo 'Click here: ' . $html;
echo "\n";
?>
