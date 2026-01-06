<?php
// Program to find frequency of a word in a file

$filename  = readline("Enter filename: ");
$word      = readline("Enter word to search: ");

$content = file_get_contents($filename);
$count   = substr_count($content, $word);

echo "The word '$word' occurs $count times in file '$filename'.\n";
?>
