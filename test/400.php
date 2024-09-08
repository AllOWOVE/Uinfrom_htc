<?php
include '../config/config.php';
include '../login/check_login.php';
if (isset($_GET['user_id'])) {
    $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
    $query = "SELECT * FROM user WHERE user_id = '$user_id'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "Error: " . mysqli_error($conn);
    }

    $user = mysqli_fetch_assoc($result);
} else {

}

mysqli_close($conn);

include "../menu/menu_admin.php";
?>

<title>ตารางแผนก ระบบจองอุปกรณ์</title>
<div id="layoutSidenav_content">
    <main>
        <div class="card-body mt-3">
            <div class="row">
                <div class="col-xl-5">
                    <div class="card mb-4 shadow">
                        <div class="card-header">
                            <i class="fas fa-chart-area me-1"></i>
                            อุปกรณ์ทั้งหมด
                        </div>
                        <div class="card-body">
                            <form action="update_user.php?user_id=<?php echo $_GET['user_id'] ?>" method="post">
                                <!-- Hidden input field to pass the username to the update_user.php page -->
                                <!--input type="hidden" name="username" value="<?php // echo $user['username']; 
                                                                                ?>"-->

                                <div class="form-group mt-2">
                                    <label for="username">ชื่อผู้ใช้ :</label>
                                    <input type="text" class="form-control" id="username" name="username" value="<?php echo $user['username']; ?>" required>
                                </div>

                                <div class="form-group mt-2">
                                    <label for="password">รหัสผ่าน:</label>
                                    <input type="text" class="form-control" id="password" name="password" value="<?php echo $user['password']; ?>" required>
                                </div>

                                <div class="form-group mt-2">
                                    <label for="name">ชื่อนามสกุล:</label>
                                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $user['name']; ?>" required>
                                </div>

                                <div class="form-group mt-2">
                                    <label for="tel">เบอร์โทรศัพท์ :</label>
                                    <input type="tel" class="form-control" id="tel" name="tel" value="<?php echo $user['tel']; ?>" required>
                                </div>

                                <div class="form-group mt-2">
                                    <label for="email">Email :</label>
                                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $user['email']; ?>" required>
                                </div>

                                <br>
                                <button type="submit" class="btn btn-primary" onclick="alert('เเก้ไขเสร็จสิ้น');">ยืนยัน</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
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

                            // Perform database query
                            $sql = "SELECT * FROM `equipment_list`";
                            $result = mysqli_query($conn, $sql);

                            // Check if there are any matching records
                            if (mysqli_num_rows($result) > 0) {
                                echo '<table id="equipment-table">';
                                echo '<thead><tr><th>ID</th><th>Name</th><th>Size</th><th>Price</th><th>Quantity</th></tr></thead>';
                                echo '<tbody>';
                                // Output data of each row
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<tr>';
                                    echo '<td>' . $row['list_ID'] . '</td>';
                                    echo '<td>' . $row['list'] . '</td>';
                                    echo '<td>' . $row['list_size'] . '</td>';
                                    echo '<td>' . $row['list_price'] . '</td>';
                                    echo '<td>' . $row['quantity'] . '</td>';
                                    echo '</tr>';
                                }
                                echo '</tbody>';
                                echo '</table>';
                            } else {
                                // No matching records found
                                echo '<p>No equipment records found.</p>';
                            }
                            ?>
                            <!-- Pagination controls -->
                            <button class="prev-page">Previous</button>
                            <span class="page-indicator">Page 1</span>
                            <button class="next-page">Next</button>
                            <!-- Rows per page dropdown -->
                            <label for="rows-per-page">Rows per page:</label>
                            <select id="rows-per-page">
                                <option value="10">10</option>
                                <option value="30">30</option>
                                <option value="50">50</option>
                            </select>
                            <!-- Search functionality -->
                            <input type="text" class="search-input">
                            <button class="search-btn">Search</button>
                            
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

                                    // Search functionality
                                    $(".search-btn").click(function() {
                                        var searchTerm = $(".search-input").val().toLowerCase();
                                        $("#equipment-table tbody tr").addClass("hidden").filter(function() {
                                            return $(this).text().toLowerCase().includes(searchTerm);
                                        }).removeClass("hidden");
                                        // Reset pagination to first page after search
                                        setupEquipmentTable(parseInt($("#rows-per-page").val()));
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
</div>
<div>

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