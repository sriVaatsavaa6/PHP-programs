<?php
// Function to calculate area of triangle
function triangleArea($base, $height) {
    return 0.5 * $base * $height;
}

// Function to calculate area of rectangle
function rectangleArea($length, $width) {
    return $length * $width;
}

// Take user input for Triangle
echo "Enter base of triangle: ";
$base = (float)readline();
echo "Enter height of triangle: ";
$height = (float)readline();

// Take user input for Rectangle
echo "Enter length of rectangle: ";
$length = (float)readline();
echo "Enter width of rectangle: ";
$width = (float)readline();

// Calculate areas
$triArea = triangleArea($base, $height);
$rectArea = rectangleArea($length, $width);

// Display results
echo "\nArea of Triangle: $triArea\n";
echo "Area of Rectangle: $rectArea\n";
?>
