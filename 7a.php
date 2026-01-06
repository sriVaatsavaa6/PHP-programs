<?php
// Function to print the first N lines of a file
function printFirstNLines($filename, $n) {
    // Check if file exists
    if (!file_exists($filename)) {
        echo "Unable to open the file\n";
        return;
    }
    
    // Open file in read mode
    $file = fopen($filename, 'r') or die("Unable to open file!");
    
    // Read and print first N lines
    $line_count = 0;
    while (!feof($file) && $line_count < $n) {
        $line = fgets($file);
        if ($line !== false) {
            echo $line . "\n";
            $line_count++;
        }
    }
    
    // Close file
    fclose($file);
    echo "\nTotal lines printed: $line_count\n";
}

// Take input from user
$filename = readline("Enter filename: ");
$n = (int)readline("Enter number of lines to print: ");

// Call function
printFirstNLines($filename, $n);
?>
