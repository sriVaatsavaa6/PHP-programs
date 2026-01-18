<?php
function square_root($num, $g = null) {
    if ($num < 0) {
        return "Square root of negative numbers is not defined for real numbers.";
    }

    if ($g === null) {
        $g = $num / 2;
    }

    $h = 0.5 * ($g + $num / $g);

    // Use a tolerance for more reliable floating-point comparison
    if (abs($g - $h) < 0.00001) {
        return $h;
    } else {
        return square_root($num, $h);
    }
}

$num = 25;
echo "Square root of $num is " . square_root($num) . "\n";
?>
