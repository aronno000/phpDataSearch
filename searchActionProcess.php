
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search Student Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
<div class="container">

<div class="student-details">
    <div class="student-details-top">
        <div class="row">
              <div class="col"><h2>Student Details</h2></div>
              <div class="col" style="text-align: right;margin: 0px 10px 0px 0px;"><a class="searchbtn" href="index.php">Search Again</a></div>
        </div>
    </div>
    
    <table class="table table-bordered table-striped table-hover">
<?php
require './conn.php';

if (isset($_POST['search'])) {
    $search_student_id = $_POST['search_student_id'];
    $search_student_name = $_POST['search_student_name'];

    // Query the database to search for students with matching ID and Name
    $sql = "SELECT * FROM students WHERE student_id = '$search_student_id' AND student_name = '$search_student_name'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td><p><b>Student ID:</b> " . $row['student_id'] . "</p></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td><p><b> Student Name:</b> " . $row['student_name'] . "</p></td>";
            echo "</tr>";

            echo "<tr>";

            
            // Display profile image if it exists
            if (file_exists('admin/' . $row['profileImage'])) {
                echo "<td><p><b>Student Image:</b> <img src='admin/" . $row['profileImage'] . "' alt='Profile Image' width='100' height='100'></p></td>";
            } else {
                echo "<td><p><b>Student Image:</b> Profile Image Not Found</p></td>";
            }
            echo "</tr>";

            echo "<tr>";
            echo "<td><p><b> Trainer Name:</b> " . $row['trainer_name'] . "</p></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td><p><b> Institution Name:</b> " . $row['institution_name'] . "</p></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td><p><b> Course Name:</b> " . $row['course_title'] . "</p></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td><p><b>Course Details:</b> " . $row['course_details'] . "</p></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td><p><b> Course Duration:</b> " . $row['course_duration'] . "</p></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td> <p><b> Course Start Date:</b> " . $row['course_start_date'] . "</p></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td><p><b> Course Completion Date:</b> " . $row['course_completion_date'] . "</p></td>";
            echo "</tr>";

            echo "<tr>";
            if (file_exists('admin/' . $row['certificateImagePath'])) {
                $certificateImagePath = 'admin/' . $row['certificateImagePath'];
                echo "<td><p><b>Certificate Image:</b> <img src='admin/" . $row['certificateImagePath'] . "' alt='Certificate Image' width='100' height='100' onload='reduceImageResolution(this)'></p></td>";
            } else {
                echo "<td><p><b>Certificate Image:</b> Certificate Image Not Found</p></td>";
            }?>
            
            <!-- Add this script to change the resolution of Certificate Img file -->
<script>
    function reduceImageResolution(img) {
        const canvas = document.createElement('canvas');
        const ctx = canvas.getContext('2d');

        // Set the canvas size to reduce resolution
        const targetWidth = img.width * 0.8; // 80% of original width
        const targetHeight = img.height * 0.8; // 80% of original height

        canvas.width = targetWidth;
        canvas.height = targetHeight;

        // Draw the image on the canvas with reduced resolution
        ctx.drawImage(img, 0, 0, targetWidth, targetHeight);

        // Replace the original image with the reduced resolution image
        img.src = canvas.toDataURL('image/jpeg'); // change the format if needed
    }
</script>

            
            
            <?php
            echo "</tr>";
            

        }
    } else {
        echo '<div class="search-again">';
        echo "You entered the wrong Student ID or Student Name. Please input the correct information.";
        echo '<br />';
        echo "No matching student records found.";
        echo '<br />';
        echo '<a href="index.php">Search Again</a>';
        echo '</div>';
    }
}
$conn->close();
?>
</table>

</div>
</div>
  </body>
</html>
