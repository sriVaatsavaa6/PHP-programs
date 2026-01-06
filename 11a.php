<?php
// Program to count Aadhaar numbers in a text

// Function to count Aadhaar occurrences
function countAadhaarOccurrences($text) {
    // Aadhaar pattern: 12 consecutive digits
    $pattern = '/\b\d{12}\b/';
    
    // Find all matches
    preg_match_all($pattern, $text, $matches);
    
    // Return count
    return count($matches[0]);
}

// Sample text containing Aadhaar numbers
$text = "My Aadhaar number is 123456789012 and my friend's Aadhaar is 987654321098. Another person has 111122223333.";

// Count Aadhaar numbers
$count = countAadhaarOccurrences($text);

// Display result
echo "Text: $text\n";
echo "Number of Aadhaar numbers found: $count\n";
?>
