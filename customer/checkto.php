<?php
include '../config/config.php';
session_start();
if (isset($_GET['customer'])) {
    $dip = $_GET['dip'];
    $level = $_GET['level'];
    switch ($level) {
        case 'ปวส.':
            $w = 'hvoc_id';
            $v = 'hvoc';
            break;
        case 'ปวช.':
            $w = 'branch_id';
            $v = 'voc';
            break;
        default:
            // Handle unknown level or provide a default case
            break;
    }
    if ($dip == 0) {
        $_SESSION['error'] = "กรุณาเลือกสาขา";
        echo '<script>window.history.back(-1);</script>';
        exit();
    } else {

        $check_query = "SELECT * FROM $v WHERE $w = '$dip'";
        $result = mysqli_query($conn, $check_query);
        $row = mysqli_fetch_assoc($result);

        $group = $row['group'];
        $branch_name = $row['branch_name'];
        $student_id = $_GET['number'];
        $t_name = $_GET['t_name'];
        $f_name = $_GET['f_name'];
        $l_name = $_GET['l_name'];
        $tel = $_GET['tel'];

        $check_c = "SELECT * FROM customer WHERE student_id = '$student_id'";
        $result = mysqli_query($conn, $check_c);
        $rowc = mysqli_fetch_assoc($result);

        if ($rowc['student_id'] > 1) {
            $_SESSION['error1'] = "หมายเลขนี้มีการทำรายการไปเเล้ว";
            echo '<script>window.history.back(-1);</script>';
            exit();
        } else {
            $insert = "INSERT INTO customer (student_id, t_name, f_name, l_name, tel,branch_name, `group`) 
            VALUES ('$student_id','$t_name', '$f_name', '$l_name', '$tel','$branch_name', '$group')";


            mysqli_query($conn, $insert);
            $num_rows = mysqli_affected_rows($conn);

            if ($num_rows > 0) {

                switch ($group) {
                    case 'A': 
                        header("Location: ../book/book_A.php?number=$student_id&name=$t_name");
                        break;
                    case 'B':
                        header("Location: ../book/book_B.php?number=$student_id&name=$t_name");
                        break;
                    case 'C':
                        header("Location: ../book/book_C.php?number=$student_id&name=$t_name");
                        break;
                    case 'D':
                        header("Location: ../book/book_D.php?number=$student_id&name=$t_name");
                        break;
                }
            } else {
                echo "Error deleting record: " . mysqli_error($conn);
            }
        }
    }

    mysqli_close($conn);
}
