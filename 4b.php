<?php
// Function to generate Floyd's triangle
function generate_floyd($rows) {
    $number = 1;
    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $number . " ";
            $number++;
        }
        echo PHP_EOL; // or echo "\n";
    }
}

// Example usage
$rows = 5;
echo "Floyd's Triangle:\n";
generate_floyd($rows);
?>
