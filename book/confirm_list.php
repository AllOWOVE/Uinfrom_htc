<?php
include '../config/config.php';
if ($row) {
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
    if (!$size1==null) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size1");

        $rows = mysqli_fetch_assoc($result);
        $quantity = $rows['quantity'];
        $sum = $quantity + $count1;
        $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size1";
        $result = mysqli_query($conn, $update_query);

    }
    if (!$size2==null) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size2");

        $rows = mysqli_fetch_assoc($result);
        $quantity = $rows['quantity'];
        $sum = $quantity + $count2;
        $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size2";
        $result = mysqli_query($conn, $update_query);

    }
    if (!$size3==null) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size3");

        $rows = mysqli_fetch_assoc($result);
        $quantity = $rows['quantity'];
        $sum = $quantity + $count3;
        $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size3";
        $result = mysqli_query($conn, $update_query);


    }
    if (!$size4==null) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size4");

        $rows = mysqli_fetch_assoc($result);
        $quantity = $rows['quantity'];
        $sum = $quantity + $count4;
        $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size4";
        $result = mysqli_query($conn, $update_query);

    }
    if ($size5) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size5");

        $rows = mysqli_fetch_assoc($result);
        $quantity = $rows['quantity'];
        $sum = $quantity + $count5;
        $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size5";
        $result = mysqli_query($conn, $update_query);

    }
    if ($size6) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size6");

        $rows = mysqli_fetch_assoc($result);
        $quantity = $rows['quantity'];
        $sum = $quantity + $count6;
        $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size6";
        $result = mysqli_query($conn, $update_query);

    }
    if ($size7) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size7");

        $rows = mysqli_fetch_assoc($result);
        $quantity = $rows['quantity'];
        $sum = $quantity + $count7;
        $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size7";
        $result = mysqli_query($conn, $update_query);

    }
    if ($size8) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size8");

        $rows = mysqli_fetch_assoc($result);
        $quantity = $rows['quantity'];
        $sum = $quantity + $count8;
        $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size8";
        $result = mysqli_query($conn, $update_query);

    }
    if ($size9) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size9");

        $rows = mysqli_fetch_assoc($result);
        $quantity = $rows['quantity'];
        $sum = $quantity + $count9;
        $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size9";
        $result = mysqli_query($conn, $update_query);
    }
    if ($size10) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size10");

        $rows = mysqli_fetch_assoc($result);
        $quantity = $rows['quantity'];
        $sum = $quantity + $count10;
        $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size10";
        $result = mysqli_query($conn, $update_query);
    }
    if ($size11) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size11");

        $rows = mysqli_fetch_assoc($result);
        $quantity = $rows['quantity'];
        $sum = $quantity + $count11;
        $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size11";
        $result = mysqli_query($conn, $update_query);


    }
    if ($size12) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size12");

        $rows = mysqli_fetch_assoc($result);
        $quantity = $rows['quantity'];
        $sum = $quantity + $count12;
        $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size12";
        $result = mysqli_query($conn, $update_query);
    }
    if ($size13) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size13");

        $rows = mysqli_fetch_assoc($result);
        $quantity = $rows['quantity'];
        $sum = $quantity + $count13;
        $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $size13";
        $result = mysqli_query($conn, $update_query);


    }
    if ($sizef) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $sizef");

        $rows = mysqli_fetch_assoc($result);
        $quantity = $rows['quantity'];
        $sum = $quantity + $countf;
        $update_query = "UPDATE equipment_list SET quantity = '$sum' WHERE  list_ID = $sizef";
        $result = mysqli_query($conn, $update_query);


    }
    if(isset($_GET['a'])){
        header("location:confirm_order_A.php?a='$a'");
        exit();
       }
       else if(isset($_GET['b'])){
        header("location:confirm_order_B.php?a='$a'");
        exit();
       }
       else if(isset($_GET['c'])){
        header("location:confirm_order_C.php?a='$a'");
        exit();
       }
       else if(isset($_GET['d'])){
        header("location:confirm_order_D.php?a='$a'");
        exit();
       }
    
}
// INSERT INTO `equipment_list` (`list_ID`, `list`, `list_size`, `list_price`, `quantity`) 
// VALUES
// ( '14001', 'กระโปรง สีดำ (เอว)', 'SS', '280', '0'),
// ( '14002', 'กระโปรง สีดำ (เอว)', 'S', '280', '0'),
// ( '14003', 'กระโปรง สีดำ (เอว)', 'M', '280', '0'),
// ( '14004', 'กระโปรง สีดำ (เอว)', 'L', '280', '0'), 
// ('14005', 'กระโปรง สีดำ (เอว)', 'XL', '280', '0'),
// ('14006', 'กระโปรง สีดำ (เอว)', '2XL', '280', '0'),
// ('14007', 'กระโปรง สีดำ (เอว)', '3XL', '280', '0'),
// ('14008', 'กระโปรง สีดำ (เอว)', '4XL', '280', '0'),
// ('14009', 'กระโปรง สีดำ (เอว)', '5XL', '280', '0'),
// ('14010', 'กระโปรง สีดำ (เอว)', '6XL', '280', '0'),

// ( '15001', 'กางเกงขายาว สีดำ (เอว)', 'SS', '280', '0'),
// ( '15002', 'กางเกงขายาว สีดำ (เอว)', 'S', '280', '0'),
// ( '15003', 'กางเกงขายาว สีดำ (เอว)', 'M', '280', '0'),
// ( '15004', 'กางเกงขายาว สีดำ (เอว)', 'L', '280', '0'), 
// ('15005', 'กางเกงขายาว สีดำ (เอว)', 'XL', '280', '0'),
// ('15006', 'กางเกงขายาว สีดำ (เอว)', '2XL', '280', '0'),
// ('15007', 'กางเกงขายาว สีดำ (เอว)', '3XL', '280', '0'),
// ('15008', 'กางเกงขายาว สีดำ (เอว)', '4XL', '280', '0'),
// ('15009', 'กางเกงขายาว สีดำ (เอว)', '5XL', '280', '0'),
// ('15010', 'กางเกงขายาว สีดำ (เอว)', '5XL', '280', '0');

