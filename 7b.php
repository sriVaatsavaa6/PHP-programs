<?php
$filename = readline("Enter filename: ");
$content  = readline("Enter content to add: ");

$fp = fopen($filename, "a") or die("Cannot open file\n");
fwrite($fp, $content . "\n");
fclose($fp);

echo "Content added to $filename\n";
?>
