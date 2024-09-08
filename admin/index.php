<?php
include '../config/config.php';
include '../login/check_login.php';
include '../Dashboard/dashbord.php';

include "../menu/menu_admin.php";


?>
<title>ระบบจองอุปกรณ์</title>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-5">
            <div class="card-body px-5">
                <h1 class="mt-4">ระบบจองอุปกรณ์เรียน วิทยาลัยเทคนิคหาดใหญ่</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item ">
                        <div class="row g-3 em">
                            <div class="col-auto">
                                <div class="col-sm-1 text-end"></div>
                                <div class="col-auto text-end">
                                    <label>ประจำวัน :</label>
                                </div>
                            </div>
                            <div class="col-auto">
                                <script language="javascript" name="date" id="dateForm">
                                    now = new Date();
                                    var thday = new Array("อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัส", "ศุกร์", "เสาร์");
                                    var thmonth = new Array("มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน",
                                        "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
                                    var thaiDate = thday[now.getDay()] + " ที่ " + now.getDate() + " " +
                                        thmonth[now.getMonth()] + " " + (0 + now.getYear() + 2443);

                                    // Create a hidden input field to store the Thai date
                                    var hiddenInput = document.createElement("input");
                                    hiddenInput.type = "hidden";
                                    hiddenInput.name = "thaiDate";
                                    hiddenInput.value = thaiDate;

                                    // Append the hidden input to the form
                                    document.getElementById("dateForm").appendChild(hiddenInput);

                                    // Output the Thai date
                                    document.write(thaiDate);
                                </script>
                                </span>
                            </div>
                        </div>
                    </li>
                </ol>
                <div class="row mt-12 text-">
                    <div class="col-12">
                        <form action="../tcpdf/dashpdf.php?a=<?php echo $a ?>" method="post" target="_blank">
                            <button type="submit" class="btn btn-secondary"><i class="fas fa-print"></i> พิมพ์รายงาน</button>
                        </form>
                    </div>
                    <!-- สรุปเลขรวม -->
                    <div class="row mt-3">
                        <div class="col-xl-4 col-md-5">
                            <div class="card  mb-4 shadow" style="background-color: #F1D9F0;">
                                <div class="card-header">จำนวนรายการอุปกรณ์ทั้งหมด ที่มีการจอง
                                    <H2 class="text-center mt-3"><i class="fas fa-clipboard-list"></i> <?php echo $value_sum  ?></H2>
                                    <H5 class="text-end">รายการ</H5>
                                    <a class=" text-white stretched-link" href="tablec.php"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card  mb-4 shadow " style="background-color: #F1D9F0;">
                                <div class="card-header">จำนวนผู้จองทั้งหมด
                                    <H2 class="text-center mt-3"><i class="fas fa-user"></i> <?php echo $numc  ?></H2>
                                    <H5 class="text-end">คน</H5>
                                    <a class="small text-white stretched-link" href="tablec.php"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6">
                            <div class="card mb-4 shadow">
                                <div class="card-header">จำนวนผู้จองชั้น ปวช.
                                    <H2 class="text-center mt-3"><?php echo $numv  ?></H2>
                                    <H5 class="text-end">คน</H5>
                                    <a class="small text-white stretched-link" href="tablev.php"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6">
                            <div class="card  mb-4 shadow">
                                <div class="card-header">จำนวนผู้จองชั้น ปวส.
                                    <H2 class="text-center mt-3"><?php echo $numh  ?></H2>
                                    <H5 class="text-end">คน</H5>
                                    <a class="small text-white stretched-link" href="tablev.php"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card mb-4 shadow">
                                <div class="card-header">จำนวนเเผนก ปวช.
                                    <H2 class="text-center mt-3"><?php echo $_SESSION['countvoc']  ?></H2>
                                    <H5 class="text-end">แผนก</H5>
                                    <a class="small text-white stretched-link" href="tablev.php"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card  mb-4 shadow">
                                <div class="card-header">จำนวนเเผนก ปวส.
                                    <H2 class="text-center mt-3"><?php echo $_SESSION['counthvoc']  ?></H2>
                                    <H5 class="text-end">แผนก</H5>
                                    <a class="small text-white stretched-link" href="tablev.php"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card  mb-4 shadow">
                                <div class="card-header">ยอมคนที่รอชำระ
                                    <H2 class="text-center mt-3"><?php echo $_SESSION['sell']  ?></H2>
                                    <H5 class="text-end">คน</H5>
                                    <a class="small text-white stretched-link" href="tablec.php"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card  mb-4 shadow">
                                <div class="card-header">ยอมคนที่ชำระเเล้ว
                                    <H2 class="text-center mt-3"><?php echo $_SESSION['sell_paid'] ?></H2>
                                    <H5 class="text-end">คน</H5>
                                    <a class="small text-white stretched-link" href="tablec.php"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ตารางอุปกรณ์ -->
                    <div class="row mt-3">
                        <div class="col-7">
                            <?php
                            // Set items per page and get it from the query string
                            $itemsPerPageVoc = 5;

                            // Fetch data from the database
                            // Count total items
                            $sqlCount = "SELECT COUNT(*) AS total FROM customer cm INNER JOIN orders od ON cm.student_id = od.student_id";
                            $resultCount = $conn->query($sqlCount);
                            $row = $resultCount->fetch_assoc();
                            $totalItemsVoc = $row['total'];

                            // Calculate total pages
                            $totalPagesVoc = ceil($totalItemsVoc / $itemsPerPageVoc);

                            // Get current page from query string or default to 1
                            $currentPageVoc = isset($_GET['pageVoc']) ? $_GET['pageVoc'] : 1;

                            // Calculate offset
                            $offsetVoc = ($currentPageVoc - 1) * $itemsPerPageVoc;

                            // Fetch data for the current page
                            $sqlVoc = "SELECT * FROM customer cm INNER JOIN orders od ON cm.student_id = od.student_id LIMIT $offsetVoc, $itemsPerPageVoc";
                            $resultVoc = $conn->query($sqlVoc);
                            ?>
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table me-1"></i>
                                    รายชื่อผู้จองทั้งหมด
                                </div>
                                <div class="card-body">
                                    <table class="table">
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
                                            while ($rowVoc = $resultVoc->fetch_assoc()) {
                                                $ids = $rowVoc['student_id'];
                                                $sell_s = "SELECT * FROM orders WHERE student_id = $ids AND date_payment IS  NULL";
                                                $s = mysqli_query($conn, $sell_s);
                                                $cs = mysqli_num_rows($s);
                                            ?>

                                                <tr>
                                                    <td><?php echo $rowVoc['student_id'] ?></td>
                                                    <td><?php echo $rowVoc['t_name'] ?></td>
                                                    <td><?php echo $rowVoc['f_name'] . '  ' . $rowVoc['l_name'] ?></td>
                                                    <td><?php echo $rowVoc['tel'] ?></td>
                                                    <td class="text-center"><?php echo $rowVoc['group'] ?></td>
                                                    <td class="text-center">
                                                        <?php
                                                        
                                                        if ($cs == 1) { ?>
                                                            <a href="delete_list.php?p=<?php echo $rowVoc['student_id']; ?>" onclick="return confirm('คุณแน่ใจใช่ไหมว่าจะลบข้อมูล')" class="btn btn-outline-primary btn-sm">
                                                                ชำระเงิน
                                                            </a>
                                                        <?php } else { ?>
                                                            <label>ชำระแล้ว</label>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="tablec.php?a=<?php echo $rowVoc['student_id']; ?>" class="btn btn-outline-primary btn-sm">
                                                            <i class="fas fa-search me-1"></i>ดูเพิ่มเติม
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php
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
                        </div>

                        <!-- <div class="col-xl-7">
                        <div class="card">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                รายชื่อผู้จองทั้งหมด
                            </div>
                            <div class="card-body">

                                <style>
                                    /* Add your CSS styles here */
                                    .hidden1 {
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
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="input-group w-50">
                                            <input type="text" class="form-control search-input1" placeholder="ค้นหา...">
                                            <button class="btn btn-outline-secondary search-btn1" type="button">ค้นหา</button>
                                        </div>
                                        <div>
                                            <button class="btn btn-outline-secondary prev-page1 me-2" type="button"><i class="fas fa-chevron-left"></i></button>
                                            <span class="page-indicator1">หน้า 1</span>
                                            <button class="btn btn-outline-secondary next-page1 ms-2" type="button"><i class="fas fa-chevron-right"></i></button>
                                        </div>
                                    </div>

                                    <table class="table table-borderless mt-3" id="page-table">
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
                                        <tbody id="tbody">
                                            <?php
                                            // Output data of each row
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $ids = $row['student_id'];
                                                $sell_s = "SELECT * FROM orders WHERE student_id = $ids AND date_payment IS  NULL";
                                                $s = mysqli_query($conn, $sell_s);
                                                $cs = mysqli_num_rows($s);
                                            ?>
                                                <tr id="tr">
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
                                                            <label>ชำระแล้ว</label>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="tablec.php?a=<?php echo $row['student_id']; ?>" class="btn btn-outline-primary btn-sm">
                                                            <i class="fas fa-search me-1"></i>ดูเพิ่มเติม
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
                                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
                                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        const searchInput = document.querySelector('.search-input1');
                                        const searchBtn = document.querySelector('.search-btn1');
                                        const prevPageBtn = document.querySelector('.prev-page1');
                                        const nextPageBtn = document.querySelector('.next-page1');
                                        const pageIndicator = document.querySelector('.page-indicator1');
                                        const tableBody = document.querySelector('#equipment-table1 tbody');

                                        // Event listener for search button click
                                        searchBtn.addEventListener('click', function() {
                                            const searchText = searchInput.value.toLowerCase();
                                            filterTable(searchText);
                                        });

                                        // Event listener for previous page button click
                                        prevPageBtn.addEventListener('click', function() {
                                            navigatePages(-1);
                                        });

                                        // Event listener for next page button click
                                        nextPageBtn.addEventListener('click', function() {
                                            navigatePages(1);
                                        });

                                        function filterTable(searchText) {
                                            const rows = tableBody.querySelectorAll('tr');
                                            rows.forEach(row => {
                                                const cells = row.querySelectorAll('td');
                                                let found = false;
                                                cells.forEach(cell => {
                                                    if (cell.textContent.toLowerCase().includes(searchText)) {
                                                        found = true;
                                                    }
                                                });
                                                row.classList.toggle('hidden1', !found);
                                            });
                                        }

                                        function navigatePages(direction) {
                                            // Your pagination logic here
                                        }
                                    });
                                </script>

                            </div>
                        </div>
                    </div> -->
                        <div class="col-xl-5">
                            <div class="card " style="height:410px">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar me-1"></i>
                                    กราฟการชำระเงิน
                                </div>
                                <div class="card-body mt-3">
                                    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                                    <script>
                                        var a = <?php echo $_SESSION['sell_paid']; ?>;
                                        var b = <?php echo $_SESSION['sell']; ?>;
                                        const xValues = ["ชำระเเล้ว " + a + " คน", "รอชำระ " + b + " คน", ];
                                        const yValues = [a, b];


                                        const barColors = [
                                            "#00aba9",
                                            "#b91d47",
                                            "#2b5797",
                                            "#e8c3b9",
                                            "#1e7145"
                                        ];

                                        new Chart("myChart", {
                                            type: "pie",
                                            data: {
                                                labels: xValues,
                                                datasets: [{
                                                    backgroundColor: barColors,
                                                    data: yValues
                                                }]
                                            },
                                            options: {
                                                title: {

                                                }
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row mt-3">
                    <div class="col-xl-12">
                        <div class="card shadow">
                            <div class="card-header">
                                <i class="fas fa-chart-bar me-1"></i>
                                Bar Chart Example
                            </div>
                            <div class="card-body mt-3">

                                <canvas id="horizontalChart" style="width:100%;"></canvas>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                                <script>
                                    const xValue = ["Italy", "France", "Spain", "USA", "Argentina", "D", "France", "Spain", "USA", "Argentina", "D", "France", "Spain", "USA", "Argentina", "D"];
                                    const yValue = [55, 49, 44, 24, 15, 20, 49, 44, 24, 15, 20, 49, 44, 24, 15, 20];
                                    const barColor = ["blue"];

                                    new Chart("horizontalChart", {
                                        type: "bar",
                                        data: {
                                            labels: xValue,
                                            datasets: [{
                                                backgroundColor: barColor,
                                                data: yValue
                                            }]
                                        },
                                        options: {
                                            legend: {
                                                display: false
                                            },
                                            scales: {
                                                yAxes: [{
                                                    ticks: {
                                                        beginAtZero: true
                                                    }
                                                }],
                                            }
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div> -->
                    <div class="row  mt-3">
                        <div class="col-xl-12">
                            <div class="card mb-4 shadow">
                                <div class="card-header">
                                    <i class="fas fa-table me-1"></i>
                                    อุปกรณ์ทั้งหมด
                                </div>
                                <div id="" class="card-body">

                                    <style>
                                        /* Add your CSS styles here */
                                        .hidden {
                                            display: none;
                                        }
                                    </style>
                                    <?php

                                    // Perform database query
                                    $sql = "SELECT * FROM `equipment_list`";
                                    $result = mysqli_query($conn, $sql);

                                    // Check if there are any matching records
                                    if (mysqli_num_rows($result) > 0) {
                                    ?>
                                        <!-- Pagination controls -->
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <div class="input-group w-50">
                                                <input type="text" class="form-control search-input" placeholder="ค้นหา...">
                                                <button class="btn btn-outline-secondary search-btn" type="button">ค้นหา</button>
                                            </div>
                                            <div>
                                                <button class="btn btn-outline-secondary prev-page me-2" type="button"><i class="fas fa-chevron-left"></i></button>
                                                <span class="page-indicator">หน้า 1</span>
                                                <button class="btn btn-outline-secondary next-page ms-2" type="button"><i class="fas fa-chevron-right"></i></button>
                                            </div>
                                        </div>
                                        <table class="table table-borderless table-bordered mt-3" id="equipment-table">
                                            <thead>
                                                <tr class="table-active">
                                                    <th>ID</th>
                                                    <th>รายการ</th>
                                                    <th>ขนาด</th>
                                                    <th>ราคา</th>
                                                    <th>จำนวน</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                // Output data of each row
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $row['list_ID'] ?></td>
                                                        <td><?php echo $row['list']      ?></td>
                                                        <td><?php echo $row['list_size']  ?></td>
                                                        <td><?php echo $row['list_price']  ?></td>
                                                        <td><?php echo $row['quantity']  ?></td>
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