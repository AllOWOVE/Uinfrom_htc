<?php
if (isset($_GET['a'])) {
    $a = $_GET['a'];
    $sum = 0;
    $n = 0;
    $n1 = 0;
    $student = "SELECT * FROM customer cm INNER JOIN orders od ON cm.student_id = od.student_id WHERE order_id = $a";
    $result = mysqli_query($conn, $student);
    $row = mysqli_fetch_assoc($result);
    $student_id = $row["student_id"];
    $t_name = $row["t_name"];
    $f_name = $row["f_name"];
    $l_name = $row["l_name"];
    $tel = $row["tel"];
    $branch_name = $row["branch_name"];
    $date = $row['date'];
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

    if (isset($size1)) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size1");

        $rows = mysqli_fetch_assoc($result);
        $list1 = $rows['list'];
        $list_size1 = $rows['list_size'];
        $list_price1 = $rows['list_price'];
    }
    if (isset($size2)) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size2");

        $rows = mysqli_fetch_assoc($result);
        $list2 = $rows['list'];
        $list_size2 = $rows['list_size'];
        $list_price2 = $rows['list_price'];
    }
    if (isset($size3)) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size3");

        $rows = mysqli_fetch_assoc($result);
        $list3 = $rows['list'];
        $list_size3 = $rows['list_size'];
        $list_price3 = $rows['list_price'];
    }

    if (isset($size4)) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size4");

        $rows = mysqli_fetch_assoc($result);
        $list4 = $rows['list'];
        $list_size4 = $rows['list_size'];
        $list_price4 = $rows['list_price'];
    }

    if (isset($size5)) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size5");

        $rows = mysqli_fetch_assoc($result);
        $list5 = $rows['list'];
        $list_size5 = $rows['list_size'];
        $list_price5 = $rows['list_price'];
    }
    if (isset($size6)) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size6");

        $rows = mysqli_fetch_assoc($result);
        $list6 = $rows['list'];
        $list_size6 = $rows['list_size'];
        $list_price6 = $rows['list_price'];
    }
    if (isset($size7)) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size7");

        $rows = mysqli_fetch_assoc($result);
        $list7 = $rows['list'];
        $list_size7 = $rows['list_size'];
        $list_price7 = $rows['list_price'];
    }
    if (isset($size8)) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size8");

        $rows = mysqli_fetch_assoc($result);
        $list8 = $rows['list'];
        $list_size8 = $rows['list_size'];
        $list_price8 = $rows['list_price'];
    }
    if (isset($size9)) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size9");

        $rows = mysqli_fetch_assoc($result);
        $list9 = $rows['list'];
        $list_size9 = $rows['list_size'];
        $list_price9 = $rows['list_price'];
    }
    if (isset($size10)) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size10");

        $rows = mysqli_fetch_assoc($result);
        $list10 = $rows['list'];
        $list_size10 = $rows['list_size'];
        $list_price10 = $rows['list_price'];
    }
    if (isset($size11)) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size11");

        $rows = mysqli_fetch_assoc($result);
        $list11 = $rows['list'];
        $list_size11 = $rows['list_size'];
        $list_price11 = $rows['list_price'];
    }
    if (isset($size12)) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size12");

        $rows = mysqli_fetch_assoc($result);
        $list12 = $rows['list'];
        $list_size12 = $rows['list_size'];
        $list_price12 = $rows['list_price'];
    }
    if (isset($size13)) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $size13");

        $rows = mysqli_fetch_assoc($result);
        $list13 = $rows['list'];
        $list_size13 = $rows['list_size'];
        $list_price13 = $rows['list_price'];
    }
    if (isset($sizef)) {
        $result = mysqli_query($conn, "SELECT * FROM `equipment_list` WHERE list_ID = $sizef");

        $rows = mysqli_fetch_assoc($result);
        $listf = $rows['list'];
        $list_sizef = $rows['list_size'];
        $list_pricef = $rows['list_price'];
    }


} else {
    echo "Error: " . $student . "<br>" . $conn->error;
}
