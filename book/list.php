<?php
include '../config/config.php';

session_start();


$itemsPerPage = isset($_GET['itemsPerPage']) ? $_GET['itemsPerPage'] : 10;

// ดึงข้อมูลจากฐานข้อมูล
$sql = "SELECT * FROM equipment_list";
$result = $conn->query($sql);

// จำนวนรายการทั้งหมด
$totalItems = $result->num_rows;

// คำนวณจำนวนหน้าทั้งหมด
$totalPages = ceil($totalItems / $itemsPerPage);

// กำหนดหน้าปัจจุบัน
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

// คำนวณข้อมูลที่จะแสดงบนหน้านี้
$offset = ($currentPage - 1) * $itemsPerPage;
$sql = "SELECT * FROM equipment_list LIMIT $offset, $itemsPerPage";
$result = $conn->query($sql);


$sql1 = "SELECT SUM(payment) AS value_sum FROM order_voc where payment=2";
$result1 = mysqli_query($conn, $sql1);

if ($result1) {
    $rows = mysqli_fetch_assoc($result1);
    $value_sum2 = $rows['value_sum']/2;
} else {
    $value_sum2 = 0;
}
$sql2 = "SELECT SUM(payment) AS value_sum FROM order_voc where payment=1";
$result2 = mysqli_query($conn, $sql2);

if ($result2) {
    $rows = mysqli_fetch_assoc($result2);
    $value_sum1 = $rows['value_sum'];
} else {
    $value_sum1 = 0;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายการอุปกรณ์</title>
</head>

<body>

    <div id="content">

        
        <!-- แบบฟอร์มเลือกจำนวนรายการที่แสดงต่อหน้า -->
        <label for="itemsPerPage">แสดงรายการต่อหน้า:</label>
        <div class="col-sm-3">
            <h2>ยอมคนที่ชำระเเล้ว <?php echo $value_sum2; ?></h2>
        </div>
        <div class="col-sm-3">
            <h2>ยอมคนที่รอชำระ <?php echo $value_sum1; ?></h2>
        </div>
        <h3>รายการอุปกรณ์</h3>
         
        <button onclick="document.location='insert_list.php'">เพิ่มอุปกรณ์</button>

        <form action="" method="get">
            <select name="itemsPerPage" id="itemsPerPage" onchange="this.form.submit()">
                <option value="10" <?php echo ($itemsPerPage == 10) ? 'selected' : ''; ?>>10</option>
                <option value="30" <?php echo ($itemsPerPage == 30) ? 'selected' : ''; ?>>30</option>
                <option value="50" <?php echo ($itemsPerPage == 50) ? 'selected' : ''; ?>>50</option>
            </select>
        </form>
        <!-- ตารางแสดงข้อมูล -->
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ชื่อ</th>
                    <th>ขนาด</th>
                    <th>ราคา</th>
                    <th>จำนวน</th>
                    <!-- เพิ่มหัวข้อคอลัมน์ตามต้องการ -->
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['list_ID'] . "</td>";
                    echo "<td>" . $row['list'] . "</td>";
                    echo "<td>" . $row['list_size'] . "</td>";
                    echo "<td>" . $row['list_price'] . "</td>";
                    echo "<td>" . $row['quantity'] . "</td>";
                    // เพิ่มข้อมูลคอลัมน์ตามต้องการ
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <!-- สร้างลิงก์หน้า -->
        <div>
            <?php
            for ($page = 1; $page <= $totalPages; $page++) {
                echo "<a href=\"?page=$page&itemsPerPage=$itemsPerPage\">$page</a> ";
            }
            ?>
        </div>
    </div>

</body>

</html>

<?php
// ปิดการเชื่อมต่อฐานข้อมูล
$conn->close();
?>