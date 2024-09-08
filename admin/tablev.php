<?php
include '../config/config.php';
include '../login/check_login.php';
include "../menu/menu_admin.php";
?>

<title>ตารางแผนก ระบบจองอุปกรณ์</title>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tables</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><button onclick='window.location.reload(true);'>Dashboard</button></li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>
            <br>
            <?php
            $itemsPerPageVoc = isset($_GET['itemsPerPageVoc']) ? $_GET['itemsPerPageVoc'] : 10;

            // ดึงข้อมูลจากฐานข้อมูล
            $sqlVoc = "SELECT * FROM voc";

            //
            $resultVoc = $conn->query($sqlVoc);

            // จำนวนรายการทั้งหมด
            $totalItemsVoc = $resultVoc->num_rows;

            // คำนวณจำนวนหน้าทั้งหมด
            $totalPagesVoc = ceil($totalItemsVoc / $itemsPerPageVoc);

            // กำหนดหน้าปัจจุบัน
            $currentPageVoc = isset($_GET['pageVoc']) ? $_GET['pageVoc'] : 1;

            // คำนวณข้อมูลที่จะแสดงบนหน้านี้
            $offsetVoc = ($currentPageVoc - 1) * $itemsPerPageVoc;
            $sqlVoc = "SELECT * FROM voc LIMIT $offsetVoc, $itemsPerPageVoc";
            $resultVoc = $conn->query($sqlVoc);
            ?>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    ตารางชื่อแผนก ระดับชั้น ปวช.
                </div>
                <div class="card-body">
                    <form action="" method="get">
                        <a>กดเพื่อเลือกจำนวนข้อมูลที่จะแสดง</a>
                        <select style="background-color: #f4f4f4;" class='btn' name="itemsPerPageVoc" id="itemsPerPageVoc" onchange="this.form.submit()">
                            <option value="5" <?php echo ($itemsPerPageVoc == 5) ? 'selected' : ''; ?>>5</option>
                            <option value="10" <?php echo ($itemsPerPageVoc == 10) ? 'selected' : ''; ?>>10</option>
                            <option value="30" <?php echo ($itemsPerPageVoc == 30) ? 'selected' : ''; ?>>30</option>
                        </select>
                        <a type="submit" href="insertv.php?add=voc" class="end btn btn-success">เพิ่มข้อมูล</a>
                    </form>
                    <a> จำนวนทั้งหมด <?php echo  $_SESSION['countvoc']; ?> </a>
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>ชื่อ</th>
                                <th>กลุ่ม</th>
                                <th>#</th>
                                <!-- เพิ่มหัวข้อคอลัมน์ตามต้องการ -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($rowVoc = $resultVoc->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $rowVoc['branch_id'] . "</td>";
                                echo "<td>" . $rowVoc['branch_name'] . "</td>";
                                echo "<td>" . $rowVoc['group'] . "</td>";
                            ?>
                                <td>
                                    <a href="edit_v.php?idv=<?php echo $rowVoc ['id']; ?>" class="btn btn-outline-primary btn-sm">เเก้ไข</a>
                                    <a href="delete_v.php?idv=<?php echo $rowVoc['branch_id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('คุณเเน่ใจใช่ไหมว่าจะลบข้อมูล')">ลบ</a>
                                </td>
                            <?php
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="text-center">
                        <?php
                        for ($pageVoc = 1; $pageVoc <= $totalPagesVoc; $pageVoc++) {
                            echo " <a style='background-color: #f4f4f4;' class='btn' type='submit' href=\"?pageVoc=$pageVoc&itemsPerPageVoc=$itemsPerPageVoc\">$pageVoc</a>";
                        }
                        ?>
                    </div>
                </div>
            </div>

            <?php
            $itemsPerPageHvoc = isset($_GET['itemsPerPageHvoc']) ? $_GET['itemsPerPageHvoc'] : 10;

            // ดึงข้อมูลจากฐานข้อมูล
            $sqlHvoc = "SELECT * FROM hvoc";

            $resultHvoc = $conn->query($sqlHvoc);

            // จำนวนรายการทั้งหมด
            $totalItemsHvoc = $resultHvoc->num_rows;

            // คำนวณจำนวนหน้าทั้งหมด
            $totalPagesHvoc = ceil($totalItemsHvoc / $itemsPerPageHvoc);

            // กำหนดหน้าปัจจุบัน
            $currentPageHvoc = isset($_GET['pageHvoc']) ? $_GET['pageHvoc'] : 1;

            // คำนวณข้อมูลที่จะแสดงบนหน้านี้
            $offsetHvoc = ($currentPageHvoc - 1) * $itemsPerPageHvoc;
            $sqlHvoc = "SELECT * FROM hvoc LIMIT $offsetHvoc, $itemsPerPageHvoc";
            $resultHvoc = $conn->query($sqlHvoc);
            ?>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    ตารางชื่อแผนก ระดับชั้น ปวส.
                </div>
                <div class="card-body">
                    <form action="" method="get">
                        <a>กดเพื่อเลือกจำนวนข้อมูลที่จะแสดง</a>
                        <select style="background-color: #f4f4f4;" class='btn' name="itemsPerPageHvoc" id="itemsPerPageHvoc" onchange="this.form.submit()">
                            <option value="5" <?php echo ($itemsPerPageHvoc == 5) ? 'selected' : ''; ?>>5</option>
                            <option value="10" <?php echo ($itemsPerPageHvoc == 10) ? 'selected' : ''; ?>>10</option>
                            <option value="30" <?php echo ($itemsPerPageHvoc == 30) ? 'selected' : ''; ?>>30</option>
                        </select>
                        <a type="submit" href="insertv.php?add=hvoc" class="end btn btn-success">เพิ่มข้อมูล</a>
                    </form>
                    <a> จำนวนทั้งหมด <?php echo  $_SESSION['counthvoc']; ?> </a>
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>ชื่อ</th>
                                <th>กลุ่ม</th>
                                <th>#</th>  
                                <!-- เพิ่มหัวข้อคอลัมน์ตามต้องการ -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($rowHvoc = $resultHvoc->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $rowHvoc['hvoc_id'] . "</td>";
                                echo "<td>" . $rowHvoc['branch_name'] . "</td>";
                                echo "<td>" . $rowHvoc['group'] . "</td>";
                            ?>
                                <td>
                                    <a href="edit_h.php?idh=<?php echo $rowHvoc['id']; ?>" class="btn btn-outline-primary btn-sm">เเก้ไข</a>
                                    <a href="delete_v.php?idh=<?php echo $rowHvoc['hvoc_id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('คุณเเน่ใจใช่ไหมว่าจะลบข้อมูล')">ลบ</a>
                                </td>
                            <?php
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="text-center">
                        <?php
                        for ($pageHvoc = 1; $pageHvoc <= $totalPagesHvoc; $pageHvoc++) {
                            echo " <a style='background-color: #f4f4f4;' class='btn' type='submit' href=\"?pageHvoc=$pageHvoc&itemsPerPageHvoc=$itemsPerPageHvoc\">$pageHvoc</a>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

</div>
</main>
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