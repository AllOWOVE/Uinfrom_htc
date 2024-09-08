<?php
include '../config/config.php';
include '../login/check_login.php';
include "../menu/menu_admin.php";
?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ตารางแผนก ระบบจองอุปกรณ์</title>
<div id="layoutSidenav_content">
    <main>
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
    </main>
</div>

<!-- เขียนเพิ่ม -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../js/me2.js"></script>
<!-------------->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="../js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="../assets/demo/chart-area-demo.js"></script>
<script src="../assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="../js/datatables-simple-demo.js"></script>
</body>

</html>
