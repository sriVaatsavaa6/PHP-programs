<?php
// Set timezone for IST as per the question's requirement
// Ensures correct display for "Monday, November 17, 2025, 7 PM IST"
date_default_timezone_set('Asia/Kolkata');

// 1. Full date (e.g. Monday, November 17, 2025)
echo "Today is: " . date("l, F d, Y") . "\n";
// 2. Year/Month/Day format
echo "Date (Y/m/d): " . date("Y/m/d") . "\n";
// 3. Date with hyphens (e.g. 2025-11-17)
echo "Date (Y-m-d): " . date("Y-m-d") . "\n";
// 4. 12-hour time with am/pm
echo "Time (h:i:sa): " . date("h:i:sa") . "\n";
// 5. 24-hour time (H:i)
echo "Time (H:i): " . date("H:i") . "\n";
// 6. Timezone name (T)
echo "Timezone (T): " . date("T") . "\n";
// 7. ISO-8601 date format
echo "ISO-8601 (c): " . date("c") . "\n";
// 8. RFC 2822 date format
echo "RFC 2822 (r): " . date("r") . "\n";
// 9. UNIX timestamp
echo "Timestamp (U): " . date("U") . "\n";
// 10. Custom: Day of the week and month
echo "Custom message: Today is " . date("l") . ", the " . date("jS \of F Y") . ".\n";
?>
