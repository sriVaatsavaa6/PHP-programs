<?php
function calculate_mean($numbers) {
    $count = count($numbers);
    if ($count == 0) return 0; // Prevent division by zero

    $sum = array_sum($numbers);
    $mean = $sum / $count;
    return $mean;
}

function calculate_sd($numbers) {
    $mean = calculate_mean($numbers);
    $sum_sq_diff = 0;
    $count = count($numbers);

    foreach ($numbers as $num) {
        $sum_sq_diff += pow($num - $mean, 2);
    }

    if ($count == 0) return 0; // Prevent division by zero

    $variance = $sum_sq_diff / $count;
    $sd = sqrt($variance);
    return $sd;
}

$numbers = array(10, 20, 30, 40, 50);
$mean = calculate_mean($numbers);
$sd = calculate_sd($numbers);

echo "Numbers are: " . implode(", ", $numbers) . PHP_EOL;
echo "Mean: $mean" . PHP_EOL;
echo "Standard Deviation: $sd" . PHP_EOL;
?>
