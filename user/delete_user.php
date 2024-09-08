<?php
include('../config/config.php');
session_start();

// Check if the username parameter is set in the URL
if (isset($_GET['user_id'])) {
    // Get the username from the URL
    $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);

    // Delete the user from the database
    $delete_query = "DELETE FROM user WHERE user_id = '$user_id'";
    $result = mysqli_query($conn, $delete_query);

    // Check if the delete was successful
    if ($result) {
        $_SESSION['delete']="ลบข้อมูลของ'$user_id'เสร็จสิ้น";
        header('location:table.php');
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }
} else {
    echo "Username parameter not set.";
}

// Close the database connection
mysqli_close($conn);
?>
