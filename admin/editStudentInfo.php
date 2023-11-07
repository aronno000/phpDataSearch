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

    // Fetch student data from the database based on student_id
    $sql = "SELECT * FROM students WHERE id = $student_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Student not found.";
        exit();
    }

    // Handle form submission for updating student data
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate and update the student data in the database
        $student_name = $_POST['student_name'];
        $trainer_name = $_POST['trainer_name'];
        $institution_name = $_POST['institution_name'];
        $course_title = $_POST['course_title'];
        $course_details = $_POST['course_details'];
        $course_duration = $_POST['course_duration'];
        $course_start_date = $_POST['course_start_date'];
        $course_completion_date = $_POST['course_completion_date'];

        // Handle file uploads for Student Image and Certificate Image
        $profileImagePath = $row['profileImage']; // Default to the existing image path
        $certificateImagePath = $row['certificateImagePath']; // Default to the existing image path

        if (isset($_FILES["profileImg"]["name"]) && !empty($_FILES["profileImg"]["name"])) {
            $target_dir = "img/profileImg/";
            $target_file = $target_dir . uniqid() . "_" . basename($_FILES["profileImg"]["name"]);
            if (move_uploaded_file($_FILES["profileImg"]["tmp_name"], $target_file)) {
                $profileImagePath = $target_file;
            } else {
                echo "Student Image upload failed.";
                exit;
            }
        }

        if (isset($_FILES["certificateImageStudent"]["name"]) && !empty($_FILES["certificateImageStudent"]["name"])) {
            $target_dirTwo = "img/certificateImg/";
            $target_fileTwo = $target_dirTwo . uniqid() . "_" . basename($_FILES["certificateImageStudent"]["name"]);
            if (move_uploaded_file($_FILES["certificateImageStudent"]["tmp_name"], $target_fileTwo)) {
                $certificateImagePath = $target_fileTwo;
            } else {
                echo "Certificate Image upload failed.";
                exit;
            }
        }


        // Now, update the student data in the database
        $sqlUpdate = "UPDATE students SET
            student_name = '$student_name',
            trainer_name = '$trainer_name',
            institution_name = '$institution_name',
            course_title = '$course_title',
            course_details = '$course_details',
            course_duration = $course_duration,
            course_start_date = '$course_start_date',
            course_completion_date = '$course_completion_date',
            profileImage = '$profileImagePath',
            certificateImagePath = '$certificateImagePath'
            WHERE id = $student_id";

        if ($conn->query($sqlUpdate) === TRUE) {
            
            header("Location: adminPanel.php");?>
            <script>
                alert("Student information updated successfully.");
            </script>
            
            <?php
        } else {
            ?>
            <script>
                alert("Student information not updated.");
            </script>
            
            <?php
        }
    }
}
?>


<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <title>Edit Student Profile</title>
</head>
<body>
    <h1>Edit Student Profile</h1>
    <form method="post" action="" enctype="multipart/form-data">
        Student Image: <input type="file" name="profileImg" accept=".png, .jpg, .jpeg"><br>
        <img src="<?php echo $row['profileImage']; ?>" width="100" height="100"><br>
        Student ID: <input type="text" name="student_id" value="<?php echo $row['id']; ?>" readonly><br>
        Student Name: <input type="text" name="student_name" value="<?php echo $row['student_name']; ?>" required><br>
        Trainer Name: <input type="text" name="trainer_name" value="<?php echo $row['trainer_name']; ?>" required><br>
        Institution Name: <input type="text" name="institution_name" value="<?php echo $row['institution_name']; ?>" required><br>
        Course Title: <input type="text" name="course_title" value="<?php echo $row['course_title']; ?>" required><br>
        Course Details: <textarea name="course_details" required><?php echo $row['course_details']; ?></textarea><br>
        Course Duration (days): <input type="number" name="course_duration" value="<?php echo $row['course_duration']; ?>" required><br>
        Course Start Date: <input type="text" name="course_start_date" value="<?php echo $row['course_start_date']; ?>" required><br>
        Course Completion Date: <input type="text" name="course_completion_date" value="<?php echo $row['course_completion_date']; ?>" required><br>
        Certificate Image: <input type="file" name="certificateImageStudent" accept=".png, .jpg, .jpeg"><br>
        <img src="<?php echo $row['certificateImagePath']; ?>" width="100" height="100"><br>
        <input type="submit" name="save" value="Save">
    </form>
</body>
</html>
