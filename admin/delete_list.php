<?php
include '../config/config.php';
session_start();
if (isset($_GET['idc'])) {
    $a = $_GET['idc'];
    $student = "SELECT * FROM orders WHERE student_id = $a";
    $result = mysqli_query($conn, $student);
    $row = mysqli_fetch_assoc($result);
    $size1 = $row["size1"];
    $size2 = $row["size2"];
    $size4 = $row["size4"];
    $size3 = $row["size3"];
    $size5 = $row["size5"];
    $size6 = $row["size6"];
    $size7 = $row["size7"];
    $size8 = $row["size8"];
    $size9 = $row["size9"];
    $size10 = $row["size10"];
    $size11 = $row["size11"];
    $size12 = $row["size12"];
    $size13 = $row["size13"];
    $sizef = $row["sizef"];
    $count1 = $row["quantity1"];
    $count2 = $row["quantity2"];
    $count3 = $row["quantity3"];
    $count4 = $row["quantity4"];
    $count5 = $row["quantity5"];
    $count6 = $row["quantity6"];
    $count7 = $row["quantity7"];
    $count8 = $row["quantity8"];
    $count9 = $row["quantity9"];
    $count10 = $row["quantity10"];
    $count11 = $row["quantity11"];
    $count12 = $row["quantity12"];
    $count13 = $row["quantity13"];
    $countf = $row["quantityf"];
    echo $a;

    $sell_s = "SELECT * FROM orders WHERE student_id = $a AND date_payment IS  NULL";
    $s = mysqli_query($conn, $sell_s);
    $cs = mysqli_num_rows($s);
    if ($cs == 1) {
        // Sum for size11
        if ($size1) {
            $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size1");

            $rows = mysqli_fetch_assoc($result);
            $quantity = $rows['quantity'];
            $sum = $quantity - $count1;
            $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size1";
            $result = mysqli_query($conn, $update_query);

            // Check if the update was successful
            if ($result) {
                $quantity1 = $rows['quantity'];
            }
        }
        if ($size2) {
            $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size2");

            $rows = mysqli_fetch_assoc($result);
            $quantity = $rows['quantity'];
            $sum = $quantity - $count2;
            $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size2";
            $result = mysqli_query($conn, $update_query);

            // Check if the update was successful
            if ($result) {
                $quantity2 = $rows['quantity'];
            }
        }
        if ($size3) {
            $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size3");

            $rows = mysqli_fetch_assoc($result);
            $quantity = $rows['quantity'];
            $sum = $quantity - $count3;
            $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size3";
            $result = mysqli_query($conn, $update_query);

            // Check if the update was successful
            if ($result) {
                $quantity3 = $rows['quantity'];
            }
        }
        if ($size4) {
            $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size4");

            $rows = mysqli_fetch_assoc($result);
            $quantity = $rows['quantity'];
            $sum = $quantity - $count4;
            $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size4";
            $result = mysqli_query($conn, $update_query);

            // Check if the update was successful
            if ($result) {
                $quantity4 = $rows['quantity'];
            }
        }
        if ($size5) {
            $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size5");

            $rows = mysqli_fetch_assoc($result);
            $quantity = $rows['quantity'];
            $sum = $quantity - $count5;
            $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size5";
            $result = mysqli_query($conn, $update_query);

            // Check if the update was successful
            if ($result) {
                $quantity5 = $rows['quantity'];
            }
        }
        if ($size6) {
            $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size6");

            $rows = mysqli_fetch_assoc($result);
            $quantity = $rows['quantity'];
            $sum = $quantity - $count6;
            $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size6";
            $result = mysqli_query($conn, $update_query);

            // Check if the update was successful
            if ($result) {
                $quantity6 = $rows['quantity'];
            }
        }
        if ($size7) {
            $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size7");

            $rows = mysqli_fetch_assoc($result);
            $quantity = $rows['quantity'];
            $sum = $quantity - $count7;
            $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size7";
            $result = mysqli_query($conn, $update_query);

            // Check if the update was successful
            if ($result) {
                $quantity7 = $rows['quantity'];
            }
        }
        if ($size8) {
            $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size8");

            $rows = mysqli_fetch_assoc($result);
            $quantity = $rows['quantity'];
            $sum = $quantity - $count8;
            $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size8";
            $result = mysqli_query($conn, $update_query);

            // Check if the update was successful
            if ($result) {
                $quantity8 = $rows['quantity'];
            }
        }
        if ($size9) {
            $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size9");

            $rows = mysqli_fetch_assoc($result);
            $quantity = $rows['quantity'];
            $sum = $quantity - $count9;
            $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size9";
            $result = mysqli_query($conn, $update_query);

            // Check if the update was successful
            if ($result) {
                $quantity9 = $rows['quantity'];
            }
        }
        if ($size10) {
            $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size10");

            $rows = mysqli_fetch_assoc($result);
            $quantity = $rows['quantity'];
            $sum = $quantity - $count10;
            $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size10";
            $result = mysqli_query($conn, $update_query);

            // Check if the update was successful
            if ($result) {
                $quantity10 = $rows['quantity'];
            }
        }
        if ($size11) {
            $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size11");

            $rows = mysqli_fetch_assoc($result);
            $quantity = $rows['quantity'];
            $sum = $quantity - $count11;
            $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size11";
            $result = mysqli_query($conn, $update_query);

            // Check if the update was successful
            if ($result) {
                $quantity11 = $rows['quantity'];
            }
        }
        if ($size12) {
            $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size12");

            $rows = mysqli_fetch_assoc($result);
            $quantity = $rows['quantity'];
            $sum = $quantity - $count12;
            $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size12";
            $result = mysqli_query($conn, $update_query);

            // Check if the update was successful
            if ($result) {
                $quantity12 = $rows['quantity'];
            }
        }
        if ($size13) {
            $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size13");

            $rows = mysqli_fetch_assoc($result);
            $quantity = $rows['quantity'];
            $sum = $quantity - $count13;
            $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size13";
            $result = mysqli_query($conn, $update_query);

            // Check if the update was successful
            if ($result) {
                $quantity13 = $rows['quantity'];
            }
        }
        if ($sizef) {
            $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $sizef");

            $rows = mysqli_fetch_assoc($result);
            $quantity = $rows['quantity'];
            $sum = $quantity - $countf;
            $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $sizef";
            $result = mysqli_query($conn, $update_query);

            // Check if the update was successful
            if ($result) {
                $quantityf = $rows['quantity'];
            }
        }
    }
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
}
if (isset($_GET['a'])) {
    $update_query = "UPDATE `equipment_list` SET`quantity`='0' ;";
    $result = mysqli_query($conn, $update_query);

    if ($result) {
        header('location: tablec.php');
        exit; // ให้เพิ่ม exit เพื่อหยุดการทำงานของสคริปต์หลังจาก redirect
    } else {
        echo "Error updating equipment quantity: " . mysqli_error($conn);
    }
}
if (isset($_GET['p'])) {
    $a = $_GET['p'];
    $student = "SELECT * FROM orders WHERE student_id = $a";
    $result = mysqli_query($conn, $student);
    $row = mysqli_fetch_assoc($result);
    $size1 = $row["size1"];
    $size2 = $row["size2"];
    $size4 = $row["size4"];
    $size3 = $row["size3"];
    $size5 = $row["size5"];
    $size6 = $row["size6"];
    $size7 = $row["size7"];
    $size8 = $row["size8"];
    $size9 = $row["size9"];
    $size10 = $row["size10"];
    $size11 = $row["size11"];
    $size12 = $row["size12"];
    $size13 = $row["size13"];
    $sizef = $row["sizef"];
    $count1 = $row["quantity1"];
    $count2 = $row["quantity2"];
    $count3 = $row["quantity3"];
    $count4 = $row["quantity4"];
    $count5 = $row["quantity5"];
    $count6 = $row["quantity6"];
    $count7 = $row["quantity7"];
    $count8 = $row["quantity8"];
    $count9 = $row["quantity9"];
    $count10 = $row["quantity10"];
    $count11 = $row["quantity11"];
    $count12 = $row["quantity12"];
    $count13 = $row["quantity13"];
    $countf = $row["quantityf"];
    echo $a;

    // Sum for size11
    if ($size1) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size1");

        $rows = mysqli_fetch_assoc($result);
        $quantity = $rows['quantity'];
        $sum = $quantity - $count1;
        $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size1";
        $result = mysqli_query($conn, $update_query);

        // Check if the update was successful
        if ($result) {
            $quantity1 = $rows['quantity'];
        }
    }
    if ($size2) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size2");

        $rows = mysqli_fetch_assoc($result);
        $quantity = $rows['quantity'];
        $sum = $quantity - $count2;
        $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size2";
        $result = mysqli_query($conn, $update_query);

        // Check if the update was successful
        if ($result) {
            $quantity2 = $rows['quantity'];
        }
    }
    if ($size3) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size3");

        $rows = mysqli_fetch_assoc($result);
        $quantity = $rows['quantity'];
        $sum = $quantity - $count3;
        $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size3";
        $result = mysqli_query($conn, $update_query);

        // Check if the update was successful
        if ($result) {
            $quantity3 = $rows['quantity'];
        }
    }
    if ($size4) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size4");

        $rows = mysqli_fetch_assoc($result);
        $quantity = $rows['quantity'];
        $sum = $quantity - $count4;
        $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size4";
        $result = mysqli_query($conn, $update_query);

        // Check if the update was successful
        if ($result) {
            $quantity4 = $rows['quantity'];
        }
    }
    if ($size5) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size5");

        $rows = mysqli_fetch_assoc($result);
        $quantity = $rows['quantity'];
        $sum = $quantity - $count5;
        $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size5";
        $result = mysqli_query($conn, $update_query);

        // Check if the update was successful
        if ($result) {
            $quantity5 = $rows['quantity'];
        }
    }
    if ($size6) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size6");

        $rows = mysqli_fetch_assoc($result);
        $quantity = $rows['quantity'];
        $sum = $quantity - $count6;
        $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size6";
        $result = mysqli_query($conn, $update_query);

        // Check if the update was successful
        if ($result) {
            $quantity6 = $rows['quantity'];
        }
    }
    if ($size7) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size7");

        $rows = mysqli_fetch_assoc($result);
        $quantity = $rows['quantity'];
        $sum = $quantity - $count7;
        $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size7";
        $result = mysqli_query($conn, $update_query);

        // Check if the update was successful
        if ($result) {
            $quantity7 = $rows['quantity'];
        }
    }
    if ($size8) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size8");

        $rows = mysqli_fetch_assoc($result);
        $quantity = $rows['quantity'];
        $sum = $quantity - $count8;
        $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size8";
        $result = mysqli_query($conn, $update_query);

        // Check if the update was successful
        if ($result) {
            $quantity8 = $rows['quantity'];
        }
    }
    if ($size9) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size9");

        $rows = mysqli_fetch_assoc($result);
        $quantity = $rows['quantity'];
        $sum = $quantity - $count9;
        $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size9";
        $result = mysqli_query($conn, $update_query);

        // Check if the update was successful
        if ($result) {
            $quantity9 = $rows['quantity'];
        }
    }
    if ($size10) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size10");

        $rows = mysqli_fetch_assoc($result);
        $quantity = $rows['quantity'];
        $sum = $quantity - $count10;
        $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size10";
        $result = mysqli_query($conn, $update_query);

        // Check if the update was successful
        if ($result) {
            $quantity10 = $rows['quantity'];
        }
    }
    if ($size11) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size11");

        $rows = mysqli_fetch_assoc($result);
        $quantity = $rows['quantity'];
        $sum = $quantity - $count11;
        $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size11";
        $result = mysqli_query($conn, $update_query);

        // Check if the update was successful
        if ($result) {
            $quantity11 = $rows['quantity'];
        }
    }
    if ($size12) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size12");

        $rows = mysqli_fetch_assoc($result);
        $quantity = $rows['quantity'];
        $sum = $quantity - $count12;
        $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size12";
        $result = mysqli_query($conn, $update_query);

        // Check if the update was successful
        if ($result) {
            $quantity12 = $rows['quantity'];
        }
    }
    if ($size13) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size13");

        $rows = mysqli_fetch_assoc($result);
        $quantity = $rows['quantity'];
        $sum = $quantity - $count13;
        $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size13";
        $result = mysqli_query($conn, $update_query);

        // Check if the update was successful
        if ($result) {
            $quantity13 = $rows['quantity'];
        }
    }
    if ($sizef) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $sizef");

        $rows = mysqli_fetch_assoc($result);
        $quantity = $rows['quantity'];
        $sum = $quantity - $countf;
        $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $sizef";
        $result = mysqli_query($conn, $update_query);

        // Check if the update was successful
        if ($result) {
            $quantityf = $rows['quantity'];
        }
    }
    $date_pay = date('Y-m-d');
    $update_pay = "UPDATE orders SET date_payment = '$date_pay' WHERE  student_id = $a";
    $result = mysqli_query($conn, $update_pay);
    echo '<script>window.history.back(-1);</script>';
    exit; // Make sure to exit to prevent further execution
} else {
    echo "ไม่พบพารามิเตอร์ที่เรียกใช้งาน";
}
