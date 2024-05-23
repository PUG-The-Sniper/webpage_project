<?php
include 'db3_conn.php';
include 'db2_conn.php';

// Check if grade_level is set
if (isset($_GET['grade_level'])) {
    $grade_level = $_GET['grade_level'];

    // Prepare a SQL statement to fetch student IDs for the selected grade level
    $sql = "SELECT id, name FROM users_students WHERE grade_level = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $grade_level);
    $stmt->execute();
    $result = $stmt->get_result();

    $students = array();
    while ($row = $result->fetch_assoc()) {
        $students[] = array(
            'id' => $row['id'],
            'name' => $row['name']
        );
    }

    // Return the students as JSON
    echo json_encode($students);
} else {
    // If grade_level is not set, return an empty array
    echo json_encode(array());
}
?>
