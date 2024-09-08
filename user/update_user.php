<?php
include('../config/config.php');
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize input
    $id = isset($_GET['user_id']) ? intval($_GET['user_id']) : 0;
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $tel = mysqli_real_escape_string($conn, $_POST['tel']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);

    // Update the user in the database
    $update_query = "UPDATE user SET email = '$email', password = '$password', tel = '$tel', name = '$name', username = '$username' WHERE user_id = $id";
    $result = mysqli_query($conn, $update_query);

    // Check if the update was successful
    if ($result) {
        header('location:table.php');
    } else {
        echo "Error updating user: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
