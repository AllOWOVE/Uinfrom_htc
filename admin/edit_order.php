<?php
include '../config/config.php'; // Include your database connection file
include '../login/check_login.php';


if (isset($_GET['idorder'])) {
    $idorder = $_GET['idorder'];

    // Fetch data for editing
    $sqlEdit = "SELECT * FROM equipment_list WHERE id = $idorder";
    $resultEdit = $conn->query($sqlEdit);

    if ($resultEdit->num_rows > 0) {
        $rowEdit = $resultEdit->fetch_assoc();
    } else {
        echo "No record found!";
        exit;
    }
} else {
    echo "Invalid request!";
    exit;
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate form data (you may need to add more validation)
    $list_ID = mysqli_real_escape_string($conn, $_POST['list_ID']);
    $list = mysqli_real_escape_string($conn, $_POST['list']);
    $list_size = mysqli_real_escape_string($conn, $_POST['list_size']);
    $list_price = mysqli_real_escape_string($conn, $_POST['list_price']);
    $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);

    // Update the record
    $sqlUpdate = "UPDATE equipment_list SET list_ID = '$list_ID', list = '$list', list_size = '$list_size', list_price = '$list_price', quantity = '$quantity' WHERE id = $idorder";

    if ($conn->query($sqlUpdate) === TRUE) {
        header('location:tableorder.php');
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
include "../menu/menu_admin.php";
?>

<title>ตารางแผนก ระบบจองอุปกรณ์</title>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">เเก้ไขข้อมูลอุปกรณ์</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><button onclick='window.location.reload(true);'>Dashboard</button></li>
                </li>
            </ol>


            <div class="card mb-4">
                <div class="card-body">

                    <div class="row">

                        <div class="col-sm-5">
                            <div class="card-body">
                                <?php if (isset($error)) {
                                    echo $error;
                                } ?>
                                <form method="POST" action="">
                                    <!-- Display the form fields with the current data -->
                                    <div class="mt-2">
                                        <label for="branch_name">Branch Name:</label>
                                    </div>
                                    <div class="mt-2">
                                        <input type="text" name="list_ID" value="<?php echo $rowEdit['list_ID']; ?>" required>
                                    </div>
                                    <div class="mt-2">
                                        <label for="branch_name">Branch Name:</label>
                                    </div>
                                    <div class="mt-2">
                                        <input type="text" name="list" value="<?php echo $rowEdit['list']; ?>" required>
                                    </div>

                                    <div class="mt-2">
                                        <label for="group">Group:</label>
                                    </div>
                                    <div class="mt-2">
                                        <input type="text" name="list_size" value="<?php echo $rowEdit['list_size']; ?>" required>
                                    </div>
                                    <div class="mt-2">
                                        <label for="group">Group:</label>
                                    </div>
                                    <div class="mt-2">
                                        <input type="text" name="list_price" value="<?php echo $rowEdit['list_price']; ?>" required>
                                    </div>
                                    <div class="mt-2">
                                        <label for="group">Group:</label>
                                    </div>
                                    <div class="mt-2">
                                        <input type="text" name="quantity" value="<?php echo $rowEdit['quantity']; ?>" required>
                                    </div>
                                    <div class="mt-5">
                                        <button type="submit">Update Record</button>
                                    </div>
                                </form>

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