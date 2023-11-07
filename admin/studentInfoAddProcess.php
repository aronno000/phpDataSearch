<?php
require '../conn.php';

if (isset($_POST['save'])) {
    // Handle Profile Img file upload
    $target_dir = "img/profileImg/";
    $target_file = $target_dir . uniqid() . "_" . basename($_FILES["profileImg"]["name"]);
    if (move_uploaded_file($_FILES["profileImg"]["tmp_name"], $target_file)) {
        $profileImagePath = $target_file;
    } else {
        echo "Student Image upload failed.";
        exit;
    }

    // Handle Certificate Img file upload
    $target_dirTwo = "img/certificateImg/";
    $target_fileTwo = $target_dirTwo . uniqid() . "_" . basename($_FILES["certificateImageStudent"]["name"]);
    if (move_uploaded_file($_FILES["certificateImageStudent"]["tmp_name"], $target_fileTwo)) {
        $certificateImagePath = $target_fileTwo;
    } else {
        echo "Certificate Image upload failed.";
        exit;
    }

    $student_id = $_POST['student_id'];
    // Check if the student_id already exists in the database
    $check_student_id_query = "SELECT student_id FROM students WHERE student_id = '$student_id'";
    $check_id_query = mysqli_query($conn, $check_student_id_query);
    if (mysqli_num_rows($check_id_query) > 0) {
        echo "Student ID already exists. Please enter a unique Student ID.";
        echo "<br>";
        echo "<a href='studentInfoAdd.php'>Go Back</a>";
    } else {
        $student_name = $_POST['student_name'];
        $trainer_name = $_POST['trainer_name'];
        $institution_name = $_POST['institution_name'];
        $course_title = $_POST['course_title'];
        $course_details = $_POST['course_details'];
        $course_duration = $_POST['course_duration'];
        $course_start_date = $_POST['course_start_date'];
        $course_completion_date = $_POST['course_completion_date'];

        // Insert data into the database
        $sql = "INSERT INTO students (student_id, profileImage, student_name, trainer_name, institution_name, course_title, course_details, course_duration, course_start_date, course_completion_date, certificateImagePath) VALUES ('$student_id', '$profileImagePath', '$student_name', '$trainer_name', '$institution_name', '$course_title', '$course_details', '$course_duration', '$course_start_date', '$course_completion_date', '$certificateImagePath')";

        if ($conn->query($sql) === TRUE) {
            // Store user information in sessions
            session_start();
            $_SESSION['student_id'] = $student_id;
            $_SESSION['student_name'] = $student_name;

            header('Location: adminPanel.php');
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
