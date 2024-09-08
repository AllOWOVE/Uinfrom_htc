<?php
include '../config/config.php';
include '../login/check_login.php';
include "../menu/menu_admin.php";
?>

<title>ตารางแผนก ระบบจองอุปกรณ์</title>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="mt-5">
                <div class="row">
                    <div class="col-xl-1">
                        <pre> </pre>
                    </div>
                    <div class="col-xl-10">
                        <div class="card shadow">
                            <div class="card-header">
                                <i class="fas fa-chart-area me-1"></i>
                                รายชื่อสมาชิก
                            </div>

                            <div class="card-body">
                                <div class="text-end">
                                    <a type="submit" class="btn btn-warning " href="add.php">เพิ่มรายชื่อสมาชิก</a>
                                </div>
                                <style>
                                    /* Add your CSS styles here */
                                    .hidden {
                                        display: none;
                                    }
                                </style>
                                <div>
                                    <button class="btn prev-page">
                                        <label>
                                            < </label>
                                    </button>
                                    <span class="page-indicator">หน้า 1</span>
                                    <button class="btn next-page"><label>></label></button>
                                    <!-- Search functionality -->
                                    <input type="text" class="search-input ">
                                    <button class="btn search-btn btn-secondary">ค้นหา</button>
                                </div>
                                <?php

                                // Perform database query
                                $sql = "SELECT * FROM `user`";
                                $result = mysqli_query($conn, $sql);

                                // Check if there are any matching records
                                if (mysqli_num_rows($result) > 0) {
                                ?>
                                    <!-- Pagination controls -->

                                    <table class="table table-borderless  mt-3" id="equipment-table">
                                        <thead>
                                            <tr class="table-active">
                                                <th>ชื่อผู้ใช้</th>
                                                <th>ชื่อ-สกุล</th>
                                                <th>เบอร์โทรศัพท์</th>
                                                <th class="text-center">อีเมล</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Output data of each row
                                            while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $row['username'] ?></td>
                                                    <td><?php echo $row['name']      ?></td>
                                                    <td><?php echo $row['tel']  ?></td>
                                                    <td><?php echo $row['email']  ?></td>
                                                    <td class="text-center">
                                                        <a href="edit_user.php?user_id=<?php echo $row['user_id']; ?>" class="btn btn-outline-primary btn-sm">
                                                            <i class="fas fa-edit me-1"></i> แก้ไข
                                                        </a>

                                                        <a href="delete_user.php?user_id=<?php echo $row['user_id']; ?>" class="btn-outline-danger btn-sm" onclick="return confirm('คุณเเน่ใจใช่ไหมว่าจะลบข้อมูล')"><i class="fas fa-trash me-1"></i></a>
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
                </div>
            </div>
        </div>
    </main>
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