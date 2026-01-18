<?php
// Function to check if a number is odd or even
function checkOddEven($num) {
    if ($num % 2 == 0) {
        echo "$num is Even\n";
    } else {
        echo "$num is Odd\n";
    }
}

// Function to check if a number is divisible by another number N
function checkDivisible($num, $N) {
    if ($N == 0) {
        echo "Division by zero error\n";
        return;
    }
    if ($num % $N == 0) {
        echo "$num is divisible by $N\n";
    } else {
        echo "$num is not divisible by $N\n";
    }
}

// Function to check if a number is a perfect square of another number x
function checkSquare($num, $x) {
    if ($x * $x == $num) {
        echo "$num is the square of $x\n";
    } else {
        echo "$num is not the square of $x\n";
    }
}

// Taking inputs from the user via command line
$number = (int)readline("Enter a number to check odd/even: ");
$divisor = (int)readline("Enter a number to check divisibility: ");
$squareBase = (int)readline("Enter a number to check if {$number} is its square: ");

// Performing the checks
checkOddEven($number);
checkDivisible($number, $divisor);
checkSquare($number, $squareBase);
?>
