<?php
include '../config/config.php';
include '../login/check_login.php';


$itemsPerPage = isset($_GET['itemsPerPage']) ? $_GET['itemsPerPage'] : 10;

// ดึงข้อมูลจากฐานข้อมูล

$sql = "SELECT * FROM equipment_list ";
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

include "../menu/menu_admin.php";
?>
<title>ระบบจองอุปกรณ์</title>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4 mt-2">
            <div class="card">
                <div class="card-body">


                    <!DOCTYPE html>
                    <html lang="en">

                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>รายการอุปกรณ์</title>
                    </head>

                    <body>

                        <div id="content">
                            <form action="" method="get">
                                <select name="itemsPerPage" id="itemsPerPage" onchange="this.form.submit()">
                                    <option value="10" <?php echo ($itemsPerPage == 10) ? 'selected' : ''; ?>>10</option>
                                    <option value="30" <?php echo ($itemsPerPage == 30) ? 'selected' : ''; ?>>30</option>
                                    <option value="50" <?php echo ($itemsPerPage == 50) ? 'selected' : ''; ?>>50</option>
                                </select>
                            </form>
                            <!-- ตารางแสดงข้อมูล -->
                            <table class="table">
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
                                    while ($row = $result->fetch_assoc()) { ?>
                                        <td><?php echo $row['list_ID'] ?></td>
                                        <td><?php echo $row['list'] ?></td>
                                        <td><?php echo $row['list_size'] ?></td>
                                        <td><?php echo $row['list_price'] ?></td>
                                        <td><?php echo $row['quantity'] ?></td>
                                        <td>
                                            <a href="edit_order.php?idorder=<?php echo $row['id']; ?>" class="btn btn-outline-primary btn-sm">เเก้ไข</a>
                                            <!-- <a href="delete_v.php?idorder=<?php echo $row['list_ID']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('คุณเเน่ใจใช่ไหมว่าจะลบข้อมูล')">ลบ</a> -->
                                        </td>
                                    <?php
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>

                            <!-- สร้างลิงก์หน้า -->
                            <div class="text-center">
                                <?php
                                for ($page = 1; $page <= $totalPages; $page++) {
                                    echo " <a style='background-color: #f4f4f4;' class='btn' type='submit' href=\"?page=$page&itemsPerPage=$itemsPerPage\">$page</a>";
                                }
                                ?>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Your Website 2022</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="../js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="../assets/demo/chart-area-demo.js"></script>
<script src="../assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="../js/datatables-simple-demo.js"></script>
</body>

</html>