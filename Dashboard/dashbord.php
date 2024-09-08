<?php

//จำนวนทั้งหมดของปวช.
$sqlVoc = "SELECT * FROM voc";

$q = mysqli_query($conn, $sqlVoc);
$numvoc = mysqli_num_rows($q);
$_SESSION['countvoc'] = $numvoc - 1;


//จำนวนทั้งหมดของปวส.
$sqlHvoc = "SELECT * FROM hvoc";

$q = mysqli_query($conn, $sqlHvoc);
$numhvoc = mysqli_num_rows($q);
$_SESSION['counthvoc'] = $numhvoc - 1;

//จำนวนการจองทั้งหมด
$sumorder = "SELECT SUM(quantity) AS quantity_sum FROM equipment_list ";
$sumr = mysqli_query($conn, $sumorder);

if ($sumr) {
    $rows = mysqli_fetch_assoc($sumr);
    $value_sum = $rows['quantity_sum'];
} else {
    $value_sum = 0;
}

//จำนวนผู้จองทั้งหมด
$sqlc = "SELECT * FROM customer cm INNER JOIN orders od ON cm.student_id = od.student_id";
$cnum = mysqli_query($conn, $sqlc);
$numc = mysqli_num_rows($cnum);

//จำนวนผู้จองปวช.ชาย
$sqlvoc = "SELECT * FROM customer cm INNER JOIN orders od ON cm.student_id = od.student_id WHERE `group`= 'A' OR `group`= 'B'";
$vnum = mysqli_query($conn, $sqlvoc);
$numv = mysqli_num_rows($vnum);

//จำนวนผู้จองปวช.ชาย
$sqlhvoc = "SELECT * FROM customer cm INNER JOIN orders od ON cm.student_id = od.student_id WHERE `group`= 'C' OR `group`= 'D'";
$hnum = mysqli_query($conn, $sqlhvoc);
$numh = mysqli_num_rows($hnum);



//ตารางอุปกรณ์

//ชำระ
// สำหรับการขายที่ยังไม่ได้ชำระเงิน
$sell = "SELECT * FROM orders WHERE date_payment IS NULL";
$q_sell = mysqli_query($conn, $sell);
$count_sell = mysqli_num_rows($q_sell);
$_SESSION['sell'] = $count_sell;

// สำหรับการขายที่ชำระเงินแล้ว
$sell_paid = "SELECT * FROM orders WHERE date_payment IS NOT NULL";
$q_sell_paid = mysqli_query($conn, $sell_paid);
$count_sell_paid = mysqli_num_rows($q_sell_paid);
$_SESSION['sell_paid'] = $count_sell_paid;


