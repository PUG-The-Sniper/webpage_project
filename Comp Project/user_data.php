<?php

$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "user_data";

// Establishing the connection
$conn = mysqli_connect($sname, $uname, $password, $db_name);

// Checking the connection
if (!$conn) {
    echo "Connection failed!";
    exit(); // If connection fails, exit the script
}

// Fetching the schedule data
$schedule_query = "SELECT * FROM grade_10_schedule"; // Assuming your schedule table name is 'grade_10_schedule'
$schedule_result = mysqli_query($conn, $schedule_query);

if (!$schedule_result) {
    echo "Error fetching schedule data: " . mysqli_error($conn);
    exit(); // If fetching schedule data fails, exit the script
}

?>
