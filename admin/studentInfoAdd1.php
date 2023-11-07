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
    <title>Student Profile CRUD</title>
</head>
<body>
    <h1>Student Profile CRUD</h1>
    <form method="post" action="studentInfoAddProcess.php" enctype="multipart/form-data">
        Student Image: <input type="file" name="profileImg" accept=".png, .jpg, .jpeg" required><br>
        <input type="hidden" name="id" value="">
        Student ID: <input type="text" name="student_id" required><br>
        Student Name: <input type="text" name="student_name" required><br>
        Trainer Name: <input type="text" name="trainer_name" required><br>
        Institution Name: <input type="text" name="institution_name" required><br>
        Course Title: <input type="text" name="course_title" required><br>
        Course Details: <textarea name="course_details" required></textarea><br>
        Course Duration (days): <input type="number" name="course_duration" required><br>
        Course Start Date: <input type="text" name="course_start_date" required><br>
        Course Completion Date: <input type="text" name="course_completion_date" required><br>
        Certificate Image: <input type="file" name="certificateImageStudent" required><br>
        <input type="submit" name="save" value="Save">
    </form>
</body>
</html>
