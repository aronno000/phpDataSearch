<?php
session_start();

// Check if the user is authenticated as an admin
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header('Location: index.php'); // Redirect to the login page if not authenticated
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
</head>
<body>
    <h2>Welcome to the Admin Panel</h2>
    <!-- Admin panel content goes here -->
    <p><a href="studentInfoAdd.php">Add Student Info</a></p>
    <p><a href="allStudents.php">Show All Students</a></p>
    <p><a href="logout.php">Log Out</a></p>
</body>
</html>
