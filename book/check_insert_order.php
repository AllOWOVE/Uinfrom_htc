<?php
include('../config/config.php');
session_start();
if (isset($_GET['a'])) {
    $num_id = $_GET['a'];
    $check_query = "SELECT * FROM orders WHERE student_id = '$num_id'";
    $check_result = mysqli_query($conn, $check_query);

    if ($check_result) {
        $num_rows = mysqli_num_rows($check_result);

        if ($num_rows > 0) {
            $_SESSION['error0'] = '*กรุณาตรวจสรวจใหม่อีกครั้ง*';
            $_SESSION['error2'] = '*หมายเลขนี้มีการทำรายการไปเเล้ว*';
            echo '<script>window.history.back(-1);</script>';
            exit; // Make sure to exit to prevent further execution
        } else {
            if (isset($num_id)) {
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $_GET['t_name'];
                    $date = $_POST['thaiDate'];
                    $size1 = $_POST['size01'];
                    $count1 = $_POST['count01'];
                    $size2 = $_POST['size02'];
                    $count2 = $_POST['count02'];
                    $size3 = $_POST['size03'];
                    $count3 = $_POST['count03'];
                    $size4 = $_POST['size04'];
                    $count4 = $_POST['count04'];
                    $size5 = 5001;
                    $count5 = 1;
                    $size6 = 6001;
                    $count6 = 1;
                    $size7 = 7001;
                    $count7 = 1;
                    $size8 = 8001;
                    $count8 = 1;
                    $count9 = $_POST['count09'];
                    $size9 = $_POST['size09'];
                    if (!$size9 == 0) {
                        if ($_GET['t_name'] == "นางสาว" or $_GET['t_name'] == "นาง" or $_GET['t_name'] == "เด็กหญิง") {
                            $size9 + 100;
                        }
                    }
                    $size10 = $_POST['size10'];
                    $count10 = $_POST['count10'];
                    $size11 = $_POST['size11'];
                    $count11 = $_POST['count11'];
                    $size12 = 12001;
                    $count12 = $_POST['count12'];
                    $size13 = 17001;
                    $count13 = $_POST['count13'];
                    $date_order = date('Y-m-d');
                    if ($size1 == 0 or $size2 == 0 or $size3 == 0 or $size4 == 0) {
                        $_SESSION['error1'] = '*กรุณาเลือกขนาดเครื่องเเบบ ที่จำเป็นต้องมีตามข้อ 1 , 2 , 3 , 4 *';
                        echo '<script>window.history.back(-1);</script>';
                        exit; // Make sure to exit to prevent further execution
                    } else {
                        $isql = "INSERT INTO orders
                            (student_id, date,date_order,
                            size1, quantity1,
                            size2, quantity2,
                            size3, quantity3,
                            size4, quantity4,
                            size5, quantity5,
                            size6, quantity6,
                            size7, quantity7,
                            size8, quantity8,
                            size9, quantity9,
                            size10, quantity10,
                            size11, quantity11,
                            size12, quantity12,
                            size13, quantity13)
                            VALUES ('$num_id',
                            '$date','$date_order',
                            '$size1', $count1,
                            '$size2', $count2,
                            '$size3', $count3,
                            '$size4', $count4,
                            '$size5', $count5,
                            '$size6', $count6,
                            '$size7', $count7,
                            '$size8', $count8,
                            '$size9', $count9,
                            '$size10', $count10,
                            '$size11', $count11,
                            '$size12', $count12,
                            '$size13', $count13)";
                    }
                }
                mysqli_query($conn, $isql);
                $num_rows = mysqli_affected_rows($conn);
                if ($num_rows > 0) {
                    if (isset($_POST['sizef'])) {

                        $sizef = $_POST['sizef'];
                        $countf = $_POST['countf'];

                        // Construct the SQL query for update
                        $isql = "UPDATE `orders` SET sizef='$sizef', quantityf='$countf' WHERE student_id=$num_id";
                        $result = mysqli_query($conn, $isql);
                    }
                    $check_query = "SELECT * FROM orders WHERE student_id = '$num_id'";
                    $result = mysqli_query($conn, $check_query);
                    $row = mysqli_fetch_assoc($result);
                    $a = $row['order_id'];
                    include 'confirm_list.php';
                    // header("location: ../book/confirm_order_A.php?a='$a'");
                    // exit(); // Ensure script stops after redirection
                } else {
                    // Error in query execution
                    echo "Error: " . $isql . "<br>" . $conn->error;
                    echo 'Error: ' . mysqli_error($conn);
                }
                // Attempt to execute the query
            }
            // Close the database connection
        }
    } else {
        $registration_error = 'Error: ' . mysqli_error($conn);
    }
}
if (isset($_GET['b'])) {
    $num_id = $_GET['b'];
    $check_query = "SELECT * FROM orders WHERE student_id = '$num_id'";
    $check_result = mysqli_query($conn, $check_query);

    if ($check_result) {
        $num_rows = mysqli_num_rows($check_result);

        if ($num_rows > 0) {
            $_SESSION['error0'] = '*กรุณาตรวจสรวจใหม่อีกครั้ง*';
            $_SESSION['error2'] = '*หมายเลขนี้มีการทำรายการไปเเล้ว*';
            echo '<script>window.history.back(-1);</script>';
            exit; // Make sure to exit to prevent further execution
        } else {
            if (isset($num_id)) {
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $_GET['t_name'];
                    $date = $_POST['thaiDate'];
                    $size1 = $_POST['size01'];
                    $count1 = $_POST['count01'];
                    $size3 = $_POST['size03'];
                    $count3 = $_POST['count03'];
                    $size4 = $_POST['size04'];
                    $count4 = $_POST['count04'];
                    $size5 = 5001;
                    $count5 = 1;
                    $size6 = 6001;
                    $count6 = 1;
                    $size7 = 7001;
                    $count7 = 1;
                    $size8 = 8001;
                    $count8 = 1;
                    $count9 = $_POST['count09'];
                    $size9 = $_POST['size09'];
                    if (!$size9 == 0) {
                        if ($_GET['t_name'] == "นางสาว" or $_GET['t_name'] == "นาง" or $_GET['t_name'] == "เด็กหญิง") {
                            $size9 + 100;
                        }
                    }
                    $size10 = $_POST['size10'];
                    $count10 = $_POST['count10'];
                    $size11 = $_POST['size11'];
                    $count11 = $_POST['count11'];
                    $size12 = 12001;
                    $count12 = $_POST['count12'];
                    $date_order = date('Y-m-d');
                    if ($size1 == 0  or $size3 == 0 or $size4 == 0) {
                        $_SESSION['error1'] = '*กรุณาเลือกขนาดเครื่องเเบบ ที่จำเป็นต้องมีตามข้อ 1 , 2 , 3 , 4 *';
                        echo '<script>window.history.back(-1);</script>';
                        exit; // Make sure to exit to prevent further execution
                    } else {
                        $isql = "INSERT INTO orders
                            (student_id, date,date_order,
                            size1, quantity1,
                            size3, quantity3,
                            size4, quantity4,
                            size5, quantity5,
                            size6, quantity6,
                            size7, quantity7,
                            size8, quantity8,
                            size9, quantity9,
                            size10, quantity10,
                            size11, quantity11,
                            size12, quantity12)
                            VALUES ('$num_id',
                            '$date','$date_order',
                            '$size1', $count1,
                            '$size3', $count3,
                            '$size4', $count4,
                            '$size5', $count5,
                            '$size6', $count6,
                            '$size7', $count7,
                            '$size8', $count8,
                            '$size9', $count9,
                            '$size10', $count10,
                            '$size11', $count11,
                            '$size12', $count12)";
                    }
                }
                mysqli_query($conn, $isql);
                $num_rows = mysqli_affected_rows($conn);
                if ($num_rows > 0) {
                    if (isset($_POST['sizef'])) {

                        $sizef = $_POST['sizef'];
                        $countf = $_POST['countf'];

                        // Construct the SQL query for update
                        $isql = "UPDATE `orders` SET sizef='$sizef', quantityf='$countf' WHERE student_id=$num_id";
                        $result = mysqli_query($conn, $isql);
                    }
                    $check_query = "SELECT * FROM orders WHERE student_id = '$num_id'";
                    $result = mysqli_query($conn, $check_query);
                    $row = mysqli_fetch_assoc($result);
                    $a = $row['order_id'];
                    include 'confirm_list.php'; // Ensure script stops after redirection
                } else {
                    // Error in query execution
                    echo "Error: " . $isql . "<br>" . $conn->error;
                    echo 'Error: ' . mysqli_error($conn);
                }
                // Attempt to execute the query
            }
            // Close the database connection
        }
    } else {
        $registration_error = 'Error: ' . mysqli_error($conn);
    }
}
if (isset($_GET['c'])) {
    $num_id = $_GET['c'];
    $check_query = "SELECT * FROM orders WHERE student_id = '$num_id'";
    $check_result = mysqli_query($conn, $check_query);

    if ($check_result) {
        $num_rows = mysqli_num_rows($check_result);

        if ($num_rows > 0) {
            $_SESSION['error0'] = '*กรุณาตรวจสรวจใหม่อีกครั้ง*';
            $_SESSION['error2'] = '*หมายเลขนี้มีการทำรายการไปเเล้ว*';
            echo '<script>window.history.back(-1);</script>';
            exit; // Make sure to exit to prevent further execution
        } else {
            if (isset($num_id)) {
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $_GET['t_name'];
                    $date = $_POST['thaiDate'];
                    $size1 = $_POST['size01'];
                    $count1 = $_POST['count01'];
                    $size5 = 5001;
                    $count5 = 1;
                    $size6 = 6001;
                    $count6 = 1;
                    $size7 = 7001;
                    $count7 = 1;
                    $size8 = 8001;
                    $count8 = 1;
                    $count9 = $_POST['count09'];
                    $size9 = $_POST['size09'];
                    if (!$size9 == 0) {
                        if ($_GET['t_name'] == "นางสาว" or $_GET['t_name'] == "นาง" or $_GET['t_name'] == "เด็กหญิง") {
                            $size9 + 100;
                        }
                    }
                    $size10 = $_POST['size10'];
                    $count10 = $_POST['count10'];
                    $size11 = $_POST['size11'];
                    $count11 = $_POST['count11'];
                    $size12 = 12001;
                    $count12 = $_POST['count12'];
                    $date_order = date('Y-m-d');
                    if ($size1 == 0) {
                        $_SESSION['error1'] = '*กรุณาเลือกขนาดเครื่องเเบบ ที่จำเป็นต้องมีตามข้อ 1 , 2 , 3 , 4 *';
                        echo '<script>window.history.back(-1);</script>';
                        exit; // Make sure to exit to prevent further execution
                    } else {
                        $isql = "INSERT INTO orders
                            (student_id, date,date_order,
                            size1, quantity1,
                            size5, quantity5,
                            size6, quantity6,
                            size7, quantity7,
                            size8, quantity8,
                            size9, quantity9,
                            size10, quantity10,
                            size11, quantity11,
                            size12, quantity12)
                            VALUES ('$num_id',
                            '$date','$date_order',
                            '$size1', $count1,
                            '$size5', $count5,
                            '$size6', $count6,
                            '$size7', $count7,
                            '$size8', $count8,
                            '$size9', $count9,
                            '$size10', $count10,
                            '$size11', $count11,
                            '$size12', $count12)";
                    }
                }
                mysqli_query($conn, $isql);
                $num_rows = mysqli_affected_rows($conn);
                if ($num_rows > 0) {
                    if (isset($_POST['sizef'])) {

                        $sizef = $_POST['sizef'];
                        $countf = $_POST['countf'];

                        // Construct the SQL query for update
                        $isql = "UPDATE `orders` SET sizef='$sizef', quantityf='$countf' WHERE student_id=$num_id";
                        $result = mysqli_query($conn, $isql);
                    }
                    $check_query = "SELECT * FROM orders WHERE student_id = '$num_id'";
                    $result = mysqli_query($conn, $check_query);
                    $row = mysqli_fetch_assoc($result);
                    $a = $row['order_id'];
                    include 'confirm_list.php'; // Ensure script stops after redirection
                } else {
                    // Error in query execution
                    echo "Error: " . $isql . "<br>" . $conn->error;
                    echo 'Error: ' . mysqli_error($conn);
                }
                // Attempt to execute the query
            }
            // Close the database connection
        }
    } else {
        $registration_error = 'Error: ' . mysqli_error($conn);
    }
}
if (isset($_GET['d'])) {
    $num_id = $_GET['d'];
    $check_query = "SELECT * FROM orders WHERE student_id = '$num_id'";
    $check_result = mysqli_query($conn, $check_query);

    if ($check_result) {
        $num_rows = mysqli_num_rows($check_result);

        if ($num_rows > 0) {
            $_SESSION['error0'] = '*กรุณาตรวจสรวจใหม่อีกครั้ง*';
            $_SESSION['error2'] = '*หมายเลขนี้มีการทำรายการไปเเล้ว*';
            echo '<script>window.history.back(-1);</script>';
            exit; // Make sure to exit to prevent further execution
        } else {
            if (isset($num_id)) {
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $_GET['t_name'];
                    $date = $_POST['thaiDate'];
                    $size5 = 5001;
                    $count5 = 1;
                    $size6 = 6001;
                    $count6 = 1;
                    $size7 = 7001;
                    $count7 = 1;
                    $size8 = 8001;
                    $count8 = 1;
                    $count9 = $_POST['count09'];
                    $size9 = $_POST['size09'];
                    if (!$size9 == 0) {
                        if ($_GET['t_name'] == "นางสาว" or $_GET['t_name'] == "นาง" or $_GET['t_name'] == "เด็กหญิง") {
                            $size9 + 100;
                        }
                    }
                    $size10 = $_POST['size10'];
                    $count10 = $_POST['count10'];
                    $size11 = $_POST['size11'];
                    $count11 = $_POST['count11'];
                    $size12 = 12001;
                    $count12 = $_POST['count12'];
                    $date_order = date('Y-m-d');
                }
                $isql = "INSERT INTO orders
                            (student_id, date,date_order,
                            size5, quantity5,
                            size6, quantity6,
                            size7, quantity7,
                            size8, quantity8,
                            size9, quantity9,
                            size10, quantity10,
                            size11, quantity11,
                            size12, quantity12)
                            VALUES ('$num_id',
                            '$date','$date_order',
                            '$size5', $count5,
                            '$size6', $count6,
                            '$size7', $count7,
                            '$size8', $count8,
                            '$size9', $count9,
                            '$size10', $count10,
                            '$size11', $count11,
                            '$size12', $count12)";
                mysqli_query($conn, $isql);
                $num_rows = mysqli_affected_rows($conn);
                if ($num_rows > 0) {
                    if (isset($_POST['sizef'])) {

                        $sizef = $_POST['sizef'];
                        $countf = $_POST['countf'];

                        // Construct the SQL query for update
                        $isql = "UPDATE `orders` SET sizef='$sizef', quantityf='$countf' WHERE student_id=$num_id";
                        $result = mysqli_query($conn, $isql);
                    }
                    $check_query = "SELECT * FROM orders WHERE student_id = '$num_id'";
                    $result = mysqli_query($conn, $check_query);
                    $row = mysqli_fetch_assoc($result);
                    $a = $row['order_id'];
                    include 'confirm_list.php'; // Ensure script stops after redirection
                } else {
                    // Error in query execution
                    echo "Error: " . $isql . "<br>" . $conn->error;
                    echo 'Error: ' . mysqli_error($conn);
                }
                // Attempt to execute the query
            }
            // Close the database connection
        }
    } else {
        $registration_error = 'Error: ' . mysqli_error($conn);
    }
}
$conn->close();
