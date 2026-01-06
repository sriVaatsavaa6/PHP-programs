<?php
// Program to find a given pattern in text and replace it with another text

$text        = readline("Enter the text: ");
$patternWord = readline("Enter the word/pattern to find: ");
$replacement = readline("Enter the replacement text: ");

// Make a safe, case-insensitive regex
$pattern = '/' . preg_quote($patternWord, '/') . '/i';

$modifiedText = preg_replace($pattern, $replacement, $text);

echo "\nOriginal text: $text\n";
echo "Modified text: $modifiedText\n";
?>
