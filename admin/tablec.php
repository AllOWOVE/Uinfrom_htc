<?php
include '../config/config.php';
include '../login/check_login.php';
include '../admin/tc.php';
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

include "../menu/menu_admin.php";
?>
<title>ระบบจองอุปกรณ์</title>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4 mt-2">
            <div class="card-body">
                <div class="row">
                    <!-- <div class="col-xl-6">
                        <div class="card mb-4 shadow">
                            <div class="card-header">
                                <i class="fas fa-chart-area me-1"></i>
                                อุปกรณ์ทั้งหมด
                            </div>
                            <div class="card-body">
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                                <style>
                                    /* Add your CSS styles here */
                                    .hidden {
                                        display: none;
                                    }
                                </style>
                                <?php

                                $sql = "SELECT * FROM customer cm INNER JOIN orders od ON cm.student_id = od.student_id";
                                $result = mysqli_query($conn, $sql);

                                // Check if there are any matching records
                                if (mysqli_num_rows($result) > 0) {
                                ?>
                                    <button class="prev-page">Previous</button>
                                    <span class="page-indicator">Page 1</span>
                                    <button class="next-page">Next</button>

                                    <label for="rows-per-page">Rows per page:</label>
                                    <select id="rows-per-page">
                                        <option value="10">10</option>
                                        <option value="30">30</option>
                                        <option value="50">50</option>
                                    </select>


                                    <table class="table table-borderless mt-3" id="equipment-table">
                                        <thead>
                                            <tr class="table-active">
                                                <th>รหัสผู้สั่ง</th>
                                                <th>ชื่อผู้ใช้</th>
                                                <th>ชื่อ-สกุล</th>
                                                <th>เบอร์โทรศัพท์</th>
                                                <th class="text-center">กลุ่ม</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $t_name = $row['t_name'];
                                            ?>
                                                <tr>
                                                    <td><?php echo $row['student_id'] ?></td>
                                                    <td><?php echo $row['t_name'] ?></td>
                                                    <td><?php echo $row['f_name'] . '  ' . $row['l_name'] ?></td>
                                                    <td><?php echo $row['tel'] ?></td>
                                                    <td class="text-center"><?php echo $row['group'] ?></td>
                                                    <td class="text-center">
                                                        <a href="?a=<?php echo $row['student_id']; ?>" class="btn btn-outline-primary btn-sm">
                                                            <i class="fas fa-search me-1"></i>ดูเพิ่มเติม
                                                        </a>
                                                        <a href="delete_list.php?idc=<?php echo $row['student_id']; ?>" class="btn-outline-danger btn-sm" onclick="return confirm('คุณแน่ใจใช่ไหมว่าจะลบข้อมูล')">
                                                            <i class="fas fa-trash me-1"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                <?php
                                } else {
                                    // No matching records found
                                    echo '<p>No equipment records found.</p>';
                                }
                                ?>
    
                                <script>
                                    $(document).ready(function() {
                                        setupEquipmentTable(10); // Default rows per page

                                        function setupEquipmentTable(rowsPerPage) {
                                            var currentPage = 1;
                                            var $tableRows = $("#equipment-table tbody tr");
                                            var totalPages = Math.ceil($tableRows.length / rowsPerPage);

                                            // Initially show only the first page
                                            showPage(currentPage);

                                            // Event listener for next page button
                                            $(".next-page").click(function() {
                                                currentPage = currentPage < totalPages ? currentPage + 1 : currentPage;
                                                showPage(currentPage);
                                            });

                                            // Event listener for previous page button
                                            $(".prev-page").click(function() {
                                                currentPage = currentPage > 1 ? currentPage - 1 : currentPage;
                                                showPage(currentPage);
                                            });

                                            // Event listener for rows per page dropdown change
                                            $("#rows-per-page").change(function() {
                                                rowsPerPage = parseInt($(this).val());
                                                totalPages = Math.ceil($tableRows.length / rowsPerPage);
                                                showPage(currentPage);
                                            });

                                            // Function to show rows for the specified page
                                            function showPage(page) {
                                                var startIndex = (page - 1) * rowsPerPage;
                                                var endIndex = Math.min(startIndex + rowsPerPage, $tableRows.length);
                                                $tableRows.addClass("hidden").slice(startIndex, endIndex).removeClass("hidden");
                                                $(".page-indicator").text("Page " + page);
                                            }
                                        }


                                    });
                                </script>
                            </div>
                        </div>
                    </div> -->
                    <!-- ตารางอุปกรณ์ -->
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="card  mb-4 shadow">
                                    <div class="card-header">ยอมคนที่ชำระเเล้ว
                                        <H2 class="text-center mt-3"><?php echo $_SESSION['sell_paid'] ?></H2>
                                        <H5 class="text-end">คน</H5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="card  mb-4 shadow">
                                    <div class="card-header">ยอมคนที่รอชำระ
                                        <H2 class="text-center mt-3"><?php echo $_SESSION['sell']  ?></H2>
                                        <H5 class="text-end">คน</H5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4 shadow">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                รายชื่อผู้จองทั้งหมด
                            </div>
                            <div class="card-body">

                                <style>
                                    /* Add your CSS styles here */
                                    .hidden {
                                        display: none;
                                    }
                                </style>
                                <?php

                                // Perform database query
                                $sql = "SELECT * FROM customer cm INNER JOIN orders od ON cm.student_id = od.student_id";
                                $result = mysqli_query($conn, $sql);

                                // Check if there are any matching records
                                if (mysqli_num_rows($result) > 0) {
                                ?>
                                    <!-- Pagination controls -->
                                    <div>
                                        <button class="btn prev-page">
                                            <label>
                                                < </label>
                                        </button>
                                        <span class="page-indicator">หน้า 1</span>
                                        <button class="btn next-page"><label>></label></button>
                                        <!-- Search functionality -->
                                        <input type="text" class="search-input ">
                                        <button class="btn-sm search-btn btn-secondary">ค้นหา</button>
                                    </div>

                                    <table class="table table-borderless  mt-3" id="equipment-table">
                                        <thead>
                                            <tr class="table-active">
                                                <th>รหัสผู้สั่ง</th>
                                                <th>ชื่อผู้ใช้</th>
                                                <th>ชื่อ-สกุล</th>
                                                <th>เบอร์โทรศัพท์</th>
                                                <th class="text-center">กลุ่ม</th>
                                                <th class="text-center">สถานะ</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Output data of each row
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $ids = $row['student_id'];
                                                $sell_s = "SELECT * FROM orders WHERE student_id = $ids AND date_payment IS  NULL";
                                                $s = mysqli_query($conn, $sell_s);
                                                $cs = mysqli_num_rows($s);
                                            ?>
                                                <tr>
                                                    <td><?php echo $row['student_id'] ?></td>
                                                    <td><?php echo $row['t_name'] ?></td>
                                                    <td><?php echo $row['f_name'] . '  ' . $row['l_name'] ?></td>
                                                    <td><?php echo $row['tel'] ?></td>
                                                    <td class="text-center"><?php echo $row['group'] ?></td>
                                                    <td class="text-center">
                                                        <?php if ($cs == 1) { ?>
                                                            <a href="delete_list.php?p=<?php echo $row['student_id']; ?>" onclick="return confirm('คุณแน่ใจใช่ไหมว่าจะลบข้อมูล')" class="btn btn-outline-primary btn-sm">
                                                                ชำระเงิน
                                                            </a>
                                                        <?php } else { ?>
                                                            <label>ชำระเเล้ว</label>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="text-center">

                                                        <a href="?a=<?php echo $row['student_id']; ?>" class="btn btn-outline-primary btn-sm">
                                                            <i class="fas fa-search me-1"></i>ดูเพิ่มเติม
                                                        </a>
                                                        <a href="delete_list.php?idc=<?php echo $row['student_id']; ?>" class="btn-outline-danger btn-sm" onclick="return confirm('คุณแน่ใจใช่ไหมว่าจะลบข้อมูล')">
                                                            <i class="fas fa-trash me-1"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                <?php
                                } else {
                                    // No matching records found
                                    echo '<p>No equipment records found.</p>';
                                }
                                ?>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-6">
                        <!-- chart -->
                        <div class="card mb-4 shadow">
                            <script src="https://www.gstatic.com/charts/loader.js"></script>

                            <body>

                                <div id="myChart" style="width:100%; max-width:100%; height:135px;"></div>
                                <script>
                                    var tp = <?php echo $_SESSION['sell_paid']; ?>; // จำนวนการขายที่ชำระแล้ว
                                    var fp = <?php echo $_SESSION['sell']; ?>; // จำนวนการขายทั้งหมด
                                    google.charts.load('current', {
                                        'packages': ['corechart']
                                    });
                                    google.charts.setOnLoadCallback(drawChart);

                                    function drawChart() {

                                        // Set Data
                                        const data = google.visualization.arrayToDataTable([
                                            ['Contry', 'คน'],
                                            ['รวม', tp+fp],
                                            ['ชำระแล้ว', tp],
                                            ['รอชำระ', fp],
                                        ]);
                                        const barColors = ["orange"];

                                        // Set Options
                                        const options = {
                                            title: '',
                                            colors: barColors // กำหนดสีให้กับแถวแต่ละแถว
                                        };

                                        // Draw
                                        const chart = new google.visualization.BarChart(document.getElementById('myChart'));
                                        chart.draw(data, options);

                                    }
                                </script>
                            </body>
                        </div>
                        <div class="card mb-4 shadow">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                อุปกรณ์ทั้งหมด
                            </div>
                            <div class="card-body">
                                <div class="card-body">
                                    <?php if (isset($_GET['a'])) { ?>
                                        <table class="table-sm" style="border-color: #000000">
                                            <tr>
                                                <th class="text-center">ลำดับ</th>
                                                <th>รายการ</th>
                                                <th>ขนาด</th>
                                                <th>ราคา/หน่วย</th>
                                                <th>จำนวน</th>
                                                <th>ราคา</th>
                                            </tr>
                                            <?php if (isset($list_size1)) {
                                                $n += 1; ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $n; ?></td>
                                                    <td> เสื้อฝึกงาน (เสื้อช็อป)</td>
                                                    <td><?php echo $list_size1; ?></td>
                                                    <td><?php echo $list_price1; ?></td>
                                                    <td><?php echo $count1; ?></td>
                                                    <td><?php echo $_1 = $count1 * $list_price1;
                                                        $sum += $_1; ?></td>
                                                </tr>
                                            <?php } ?>
                                            <?php if (isset($list_size2)) {
                                                $n += 1; ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $n; ?></td>
                                                    <td>เสื้อยืดฝึกฝีมือ (คอกลม)</td>
                                                    <td><?php echo $list_size2; ?></td>
                                                    <td><?php echo $list_price2; ?></td>
                                                    <td><?php echo $count2 ?></td>
                                                    <td><?php echo $_2 = $count2 * $list_price2;
                                                        $sum += $_2; ?></td>
                                                </tr>
                                            <?php } ?>
                                            <?php if (isset($list_size3)) {
                                                $n += 1; ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $n; ?></td>
                                                    <td>เสื้อพละ</td>
                                                    <td><?php echo $list_size3; ?></td>
                                                    <td><?php echo $list_price3; ?></td>
                                                    <td><?php echo $count3 ?></td>
                                                    <td><?php echo $_3 = $count3 * $list_price3;
                                                        $sum += $_3; ?></td>
                                                </tr>
                                            <?php } ?>
                                            <?php if (isset($list_size4)) {
                                                $n += 1; ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $n; ?></td>
                                                    <td>กางเกงพละ</td>
                                                    <td><?php echo $list_size4; ?></td>
                                                    <td><?php echo $list_price4; ?></td>
                                                    <td><?php echo $count4 ?></td>
                                                    <td><?php echo $_4 = $count4 * $list_price4;
                                                        $sum += $_4; ?></td>
                                                </tr>
                                            <?php } ?>
                                            <?php if (isset($list_size5)) {
                                                $n += 1; ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $n; ?></td>
                                                    <td>เข็มขัดและหัวเข็มขัด</td>
                                                    <td class="table-active"></td>
                                                    <td><?php echo $list_price5; ?></td>
                                                    <td><?php echo $count5 ?></td>
                                                    <td><?php echo $_5 = $count5 * $list_price5;
                                                        $sum += $_5; ?></td>
                                                </tr>
                                            <?php } ?>
                                            <?php if (isset($list_size6)) {
                                                $n += 1; ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $n; ?></td>
                                                    <td>เน็คไทและเข็ม</td>
                                                    <td class="table-active"></td>
                                                    <td><?php echo $list_price6; ?></td>
                                                    <td><?php echo $count6 ?></td>
                                                    <td><?php echo $_6 = $count6 * $list_price6;
                                                        $sum += $_6; ?></td>
                                                </tr>
                                            <?php } ?>
                                            <?php if (isset($list_size7)) {
                                                $n += 1; ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $n; ?></td>
                                                    <td>กระเป๋าเป้วิทยาลัยเทคนิคหาดใหญ่</td>
                                                    <td class="table-active"></td>
                                                    <td><?php echo $list_price7; ?></td>
                                                    <td><?php echo $count7 ?></td>
                                                    <td><?php echo $_7 = $count7 * $list_price7;
                                                        $sum += $_7; ?></td>
                                                </tr>
                                            <?php } ?>
                                            <?php if (isset($list_size8)) {
                                                $n += 1; ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $n; ?></td>
                                                    <td>สมุดตราวิทยาลัยเทคนิคหาดใหญ่ (1โหล)</td>
                                                    <td class="table-active"></td>
                                                    <td><?php echo $list_price8; ?></td>
                                                    <td><?php echo $count8 ?></td>
                                                    <td><?php echo $_8 = $count8 * $list_price8;
                                                        $sum += $_8; ?></td>
                                                </tr>
                                            <?php } ?>
                                            <?php if (isset($list_size9)) {
                                                if (!$count9 == 0) {
                                                    $n += 1; ?>
                                                    <tr>
                                                        <td class="text-center"><?php echo $n; ?></td>
                                                        <?php if ($t_name == "นางสาว" or $t_name == "นาง" or $t_name == "เด็กหญิง") { ?>
                                                            <td>เสื้อนักเรียนสีขาว แขนสั้น(หญิง)</td>
                                                        <?php } else { ?>
                                                            <td>เสื้อนักเรียนสีขาว แขนสั้น(ชาย)</td>
                                                        <?php } ?>
                                                        <?php ?>
                                                        <td><?php echo $list_size9; ?></td>
                                                        <td>200</td>
                                                        <td><?php echo $count9 ?></td>
                                                        <td><?php echo $_9 = $count9 * $list_price9;
                                                            $sum += $_9; ?></td>
                                                    </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            <?php if (isset($list_size10)) { ?>
                                                <?php if (!$count10 == 0) {
                                                    $n += 1; ?>
                                                    <tr>
                                                        <td class="text-center"><?php echo $n; ?></td>
                                                        <td><?php echo $list10; ?></td>
                                                        <td><?php echo $list_size10; ?></td>
                                                        <td>370</td>
                                                        <td><?php echo $count10 ?></td>
                                                        <td><?php echo $_10 = $count10 * $list_price10;
                                                            $sum += $_10; ?></td>
                                                    </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            <?php if (isset($list_size11)) {
                                                if (!$count11 == 0) {
                                                    $n += 1; ?>
                                                    <tr>
                                                        <td class="text-center"><?php echo $n; ?></td>
                                                        <td>รองเท้าผ้าใบสีดำ (เบอร์)</td>
                                                        <td><?php echo $list_size11; ?></td>
                                                        <td><?php echo $list_price11; ?></td>
                                                        <td><?php echo $count11 ?></td>
                                                        <td><?php echo $_11 = $count11 * $list_price11;
                                                            $sum += $_11; ?></td>
                                                    </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            <?php if (isset($list_size12)) {
                                                if (!$count12 == 0) {
                                                    $n += 1; ?>
                                                    <tr>
                                                        <td class="text-center"><?php echo $n; ?></td>
                                                        <td>ถุงเท้า (5 คู่)</td>
                                                        <td class="table-active"></td>
                                                        <td>100</td>
                                                        <td><?php echo $count12 ?></td>
                                                        <td><?php echo $_12 = $count12 * $list_price12;
                                                            $sum += $_12; ?></td>
                                                    </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            <?php if (isset($list_size13)) {
                                                if (!$count13 == 0) {
                                                    $n += 1; ?>
                                                    <tr>
                                                        <td class="text-center"><?php echo $n; ?></td>
                                                        <td>ตะไบ</td>
                                                        <td class="table-active"></td>
                                                        <td>90</td>
                                                        <td><?php echo $count13 ?></td>
                                                        <td><?php echo $_13 = $count13 * $list_price13;
                                                            $sum += $_13; ?></td>
                                                    </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            <?php if (isset($sizef)) {
                                                $n += 1; ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $n; ?></td>
                                                    <td>กระโปรง สีดำ เอว </td>
                                                    <td class="table-active"></td>
                                                    <td>280</td>
                                                    <td><?php echo $countf ?></td>
                                                    <td><?php echo $_f = $countf * $list_pricef;
                                                        $sum += $_f; ?></td>
                                                </tr>
                                            <?php } ?>
                                            <tr>
                                                <td colspan="3" class="table-active"></td>
                                                <td colspan="2" class="table-active">รวม</td>
                                                <td class="table-active"><?php echo $sum; ?></td>
                                            </tr>
                                        </table>
                                    <?php  } ?>

                                </div>
                            </div>
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
<div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/me.js"></script>
    <script src="../js/me2.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../assets/demo/chart-area-demo.js"></script>
    <script src="../assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="../js/datatables-simple-demo.js"></script>
</div>
</body>

</html>