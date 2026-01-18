<?php
// Function to calculate and print roots of quadratic equation ax^2 + bx + c = 0
function calculateRoots($a, $b, $c) {
    if ($a == 0) {
        echo "Coefficient 'a' cannot be zero for a quadratic equation";
        echo "\n";
        return;
    }

    $discriminant = $b * $b - 4 * $a * $c;

    if ($discriminant > 0) {
        // Two distinct real roots
        $root1 = (-$b + sqrt($discriminant)) / (2 * $a);
        $root2 = (-$b - sqrt($discriminant)) / (2 * $a);
        echo "Roots are real and distinct:\n";
        echo "Root 1 = $root1\n";
        echo "Root 2 = $root2\n";
    } elseif ($discriminant == 0) {
        // One real root (repeated)
        $root = -$b / (2 * $a);
        echo "Roots are real and equal:\n";
        echo "Root = $root\n";
    } else {
        // Complex roots
        $realPart = -$b / (2 * $a);
        $imaginaryPart = sqrt(-$discriminant) / (2 * $a);
        echo "Roots are complex and imaginary:\n";
        echo "Root 1 = {$realPart} + {$imaginaryPart}i\n";
        echo "Root 2 = {$realPart} - {$imaginaryPart}i\n";
    }
}

// Taking input from user for coefficients a, b, and c
$a = (float)readline("Enter coefficient a: ");
$b = (float)readline("Enter coefficient b: ");
$c = (float)readline("Enter coefficient c: ");

// Calculate and display roots
calculateRoots($a, $b, $c);
?>
