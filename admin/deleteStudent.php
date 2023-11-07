<?php
session_start();

// Check if the user is authenticated as an admin
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header('Location: index.php'); // Redirect to the login page if not authenticated
    exit();
}

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $student_id = $_GET['id'];
    
    require '../conn.php'; // Include database connection code
    
    // Delete student data from the database based on student_id
    $sql = "DELETE FROM students WHERE id = $student_id";
    $conn->query($sql);

    // Redirect back to the student list after deleting
    header('Location: adminPanel.php');
}
?>
