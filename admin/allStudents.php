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
    <title>All Students</title>
</head>
<body>
    <h2>All Students</h2>
    <h3><a href="studentInfoAdd.php">ADD STUDENT INFO</a></h3>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Student ID</th>
            <th>Student Image</th>
            <th>Student Name</th>
            <th>Institution Name</th>
            <th>Course Title</th>
            <th>Course Details</th>
            <th>Course Duration</th>
            <th>Course Start Date</th>
            <th>Course Completion Date</th>
            <th>Certificate Image</th>
        </tr>

        <?php
            require '../conn.php';

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch student data from the database
        $sql = "SELECT * FROM students";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["student_id"] . "</td>";
                echo "<td><img src='" . $row["profileImage"] . "' width='100'></td>";
                echo "<td>" . $row["student_name"] . "</td>";
                echo "<td>" . $row["institution_name"] . "</td>";
                echo "<td>" . $row["course_title"] . "</td>";
                echo "<td>" . $row["course_details"] . "</td>";
                echo "<td>" . $row["course_duration"] . "</td>";
                echo "<td>" . $row["course_start_date"] . "</td>";
                echo "<td>" . $row["course_completion_date"] . "</td>";
                echo "<td><img src='" . $row["certificateImagePath"] . "' width='100'></td>";
                echo "</tr>";
            }
        } else {
            echo "No student data found.";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>
