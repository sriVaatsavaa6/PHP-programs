<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data from POST method
    $name = $_POST['name'];
    $dept = $_POST['dept'];
    $usn  = $_POST['usn'];
    $cgpa = $_POST['cgpa'];
    
    // Display form contents
    echo "<h2>Student Information Received:</h2>";
    echo "<br>";
    echo "Name: <b>$name</b><br>";
    echo "Department: <b>$dept</b><br>";
    echo "USN: <b>$usn</b><br>";
    echo "CGPA: <b>$cgpa</b><br>";
}
?>
