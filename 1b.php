<?php
// Compound Interest Formula:
// CI = P * ( (1 + R/(100*n))^(n*t) ) - P

// Take user input
$P = (float)readline("Enter Principal amount (P): ");
$R = (float)readline("Enter Annual interest rate (%) (R): ");
$t = (float)readline("Enter time (in years) (t): ");
$n = (int)readline("Enter number of times interest compounded per year (n): ");

// Calculate compound interest
$r = $R / 100;
$A = $P * pow((1 + $r / $n), $n * $t);
$CI = $A - $P;

// Print results
echo "\nCompound Interest = " . number_format($CI, 2) . "\n";
echo "Total Amount = " . number_format($A, 2) . "\n";
?>
