<?php
function generateHistogram($scores) {
    $histogram = array_fill(0, 10, 0);
    foreach ($scores as $score) {
        if ($score < 0 || $score > 100) continue; // skip out of range

        $index = floor($score / 10);
        if ($index > 9) $index = 9; // make sure 100 goes to last box
        $histogram[$index]++;
    }
    return $histogram;
}

$scores = [85, 92, 73, 45, 68, 79, 95, 86, 60, 82, 47, 41, 55, 89,
           75, 100, 65, 93, 78, 87];

$histogram = generateHistogram($scores);

echo "Histogram:\n";
for ($i = 0; $i < count($histogram); $i++) {
    $rangeStart = $i * 10;
    $rangeEnd = ($i == 9) ? 100 : ($i + 1) * 10 - 1;
    echo "$rangeStart-$rangeEnd: {$histogram[$i]} scores\n";
}
?>
