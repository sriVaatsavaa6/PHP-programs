<?php
// Program to filter elements of an array using key names

$first_array  = array(
    'c1' => 'Red',
    'c2' => 'Green',
    'c3' => 'White',
    'c4' => 'Black'
);

$second_array = array('c2', 'c4');   // keys to remove

// array_diff_key compares keys; array_flip makes values become keys
$result = array_diff_key($first_array, array_flip($second_array));

print_r($result);
?>
