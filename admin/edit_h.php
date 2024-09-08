<?php
include '../config/config.php'; // Include your database connection file
include '../login/check_login.php';


if (isset($_GET['idh'])) {
    $idv = $_GET['idh'];

    // Fetch data for editing
    $sqlEdit = "SELECT * FROM hvoc WHERE id = $idv";
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
    $hvoc_id = mysqli_real_escape_string($conn, $_POST['hvoc_id']);
    $branch_name = mysqli_real_escape_string($conn, $_POST['branch_name']);
    $group = mysqli_real_escape_string($conn, $_POST['group']);

    // Update the record
    $sqlUpdate = "UPDATE hvoc SET hvoc_id = '$hvoc_id', branch_name = '$branch_name', `group` = '$group' WHERE id = $idv";

    if ($conn->query($sqlUpdate) === TRUE) {
        header('location:tablev.php');
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
            <h1 class="mt-4">เพิ่มเเผนก</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><button onclick='window.location.reload(true);'>Dashboard</button></li>
                </li>
                <li class="breadcrumb-item active">Tables</li>
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
                                        <input type="text" name="hvoc_id" value="<?php echo $rowEdit['hvoc_id']; ?>" required>
                                    </div>
                                    <div class="mt-2">
                                        <label for="branch_name">Branch Name:</label>
                                    </div>
                                    <div class="mt-2">
                                        <input type="text" name="branch_name" value="<?php echo $rowEdit['branch_name']; ?>" required>
                                    </div>

                                    <div class="mt-2">
                                        <label for="group">Group:</label>
                                    </div>
                                    <div class="mt-2">
                                        <input type="text" name="group" value="<?php echo $rowEdit['group']; ?>" required>
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