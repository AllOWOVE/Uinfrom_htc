<?php
include('../config/config.php');
session_start();

// Check if the username parameter is set in the URL
if (isset($_GET['idv'])) {
    // Get the username from the URL
    $delete_v = mysqli_real_escape_string($conn, $_GET['idv']);

    // Delete the user from the database
    $delete_query = "DELETE FROM voc WHERE branch_id = '$delete_v'";
    $result = mysqli_query($conn, $delete_query);

    // Check if the delete was successful
    if ($result) {
        $_SESSION['delete'] = "ลบข้อมูลการจองเสร็จสิ้น";
        header('location:tablev.php');
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }
} else {
    echo "ลบข้อมูลไม่สำเร็จ";
}



if (isset($_GET['idh'])) {
    // Get the username from the URL
    $delete_v = mysqli_real_escape_string($conn, $_GET['idh']);

    // Delete the user from the database
    $delete_query = "DELETE FROM hvoc WHERE hvoc_id = '$delete_v'";
    $result = mysqli_query($conn, $delete_query);

    // Check if the delete was successful
    if ($result) {
        $_SESSION['delete'] = "ลบข้อมูลการจองเสร็จสิ้น";
        header('location:tablev.php');
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }
} else {
    echo "ลบข้อมูลไม่สำเร็จ";
}



// Close the database connection

if (isset($_GET['idc'])) {
    // Get the username from the URL
    $delete_v = $_GET['idc'];

    // Delete the user from the database
    $delete_query = "DELETE FROM customer WHERE student_id = '$delete_v'";
    $result = mysqli_query($conn, $delete_query);

    // Check if the delete was successful
    if ($result) {

        $delete = "DELETE FROM orders WHERE student_id = '$delete_v'";
        $result = mysqli_query($conn, $delete);
        
        if ($result) {
            $_SESSION['delete'] = "ลบข้อมูลการจองเสร็จสิ้น";
            header('location:tablec.php');
        } else {
            echo "Error deleting user: " . mysqli_error($conn);
        }
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }
} else {
    echo "ลบข้อมูลไม่สำเร็จ";
}


if (isset($_GET['idcos'])) {
    // Get the username from the URL
    $delete_v = $_GET['idcos'];

    // Delete the user from the database
    $delete_query = "DELETE FROM customer WHERE student_id = '$delete_v'";
    $result = mysqli_query($conn, $delete_query);

    // Check if the delete was successful
    if ($result) {

        $delete = "DELETE FROM orders WHERE student_id = '$delete_v'";
        $result = mysqli_query($conn, $delete);
        
        if ($result) {
            $_SESSION['delete'] = "ลบข้อมูลการจองเสร็จสิ้น";
            header('location:../book/where.php');
        } else {
            echo "Error deleting user: " . mysqli_error($conn);
        }
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }
} else {
    echo "ลบข้อมูลไม่สำเร็จ";
}


// Close the database connection
if (isset($_GET['idorder'])) {
    // Get the username from the URL
    $delete_v = mysqli_real_escape_string($conn, $_GET['idorder']);

    // Delete the user from the database
    $delete_query = "DELETE FROM orders WHERE list_ID = '$delete_v'";
    $result = mysqli_query($conn, $delete_query);


    // Check if the delete was successful
    if ($result) {
        $_SESSION['delete'] = "ลบข้อมูลการจองเสร็จสิ้น";
        header('location:tablev.php');
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }
} else {
    echo "ลบข้อมูลไม่สำเร็จ";
}
mysqli_close($conn);
