<?php
// Recursive function to compute n-th Fibonacci term
function fibonacci($n) {
    if ($n == 0) return 0;
    if ($n == 1) return 1;
    return fibonacci($n - 1) + fibonacci($n - 2);
}

$num_terms = 10; // Or any number of terms you want

echo "Fibonacci series (first $num_terms terms): ";
for ($i = 0; $i < $num_terms; $i++) {
    echo fibonacci($i);
    if ($i < $num_terms - 1) echo ", ";
}
echo "\n";
?>
