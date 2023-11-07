<?php
session_start();

// Replace with your actual admin username and password
$adminUsername = "admin";
$adminPassword = "queeny2023#";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $enteredUsername = $_POST['username'];
    $enteredPassword = $_POST['password'];

    if ($enteredUsername === $adminUsername && $enteredPassword === $adminPassword) {
        // Authentication successful
        $_SESSION['admin'] = true;
        header('Location: adminPanel.php'); // Redirect to the admin panel
        exit();
    } else {
        // Authentication failed
        echo "Invalid username or password.";
    }
}
?>
