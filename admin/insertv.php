<?php
include '../config/config.php';
include '../login/check_login.php';



if (isset($_POST['add'])) {

    $add = $_POST['add'];
    switch ($add) {
        case 'hvoc':
            $w = 'hvoc_id';
            break;
        case 'voc':
            $w = 'branch_id';
            break;
    }
    if (isset($_POST['add_v'])) {
        $id_v = $_POST['id_v'];

        $group1 = $_POST['group1'];
        $branch_name = $_POST['branch_name'];
        $check_query = "SELECT * FROM $add WHERE $w = '$id_v'";
        $result = mysqli_query($conn, $check_query);

        if (mysqli_num_rows($result) > 0) {
        } else {
            $insert_query = "INSERT INTO $add ($w, branch_name, `group`) 
                            VALUES ('$id_v', '$branch_name', '$group1')";

            mysqli_query($conn, $insert_query);
            $num_rows = mysqli_affected_rows($conn);

            if ($num_rows > 0) {
                $t = "เพิ่มสำเร็จ";
            } else {
                echo 'Failed to insert data into the database.';
            }
        }
    } else {
        $error = "กรุณาตรวจสอบข้อมูลให้ครบ";
    }
    }

if (isset($_POST['add_v'])) {
    // SQL query to search for users
    $sql = "SELECT * FROM $add WHERE $w = '$id_v'";
    $result = mysqli_query($conn, $sql);
}

if (isset($_GET['idv']) || isset($_GET['idh'])) {
    // Determine the table and column based on the URL parameter
    $table = (isset($_GET['idv'])) ? 'voc' : 'hvoc';
    $column = (isset($_GET['idv'])) ? 'branch_id' : 'hvoc_id';

    // Get the ID from the URL
    $delete_id = mysqli_real_escape_string($conn, $_GET[$table === 'voc' ? 'idv' : 'idh']);

    // Delete the record from the database
    $delete_query = "DELETE FROM $table WHERE $column = '$delete_id'";
    $result = mysqli_query($conn, $delete_query);

    // Check if the delete was successful
    if ($result) {
        $_SESSION['delete'] = "ลบข้อมูลการจองเสร็จสิ้น";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}



// Close the database connection
mysqli_close($conn);

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

                        <div class="col-sm-3">
                            <div class="card-body">
                                <?php if (isset($error)) {
                                    echo $error;

                                } ?>
                                <form action="" method="post">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="add" id="inlineRadio1" value="hvoc">
                                        <label class="form-check-label" for="inlineRadio1">ปวส.</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="add" id="inlineRadio2" value="voc">
                                        <label class="form-check-label" for="inlineRadio2">ปวช.</label>
                                    </div>
                                    <br>
                                    <br>
                                    <label for="username">กลุ่ม :</label>
                                    <select class="form-select form-select-sm" id="group1" name="group1">
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                    </select>
                                    <p>
                                    <div class="form-group mt-1">
                                        <label for="username">รหัส :</label>
                                        <p>
                                            <input type="text" class="form-control form-control-sm" id="username" name="id_v" value="" required>
                                    </div>
                                    <div class="form-group mt-1">
                                        <label for="username mt-1">ชื่อสาขาวิชา/สาขางาน :</label>
                                        <input type="text" class="form-control form-control-sm" id="username" name="branch_name" value="" required>
                                    </div>
                                    <br>
                                    <center>
                                        <button type="submit" class="btn btn-secondary" name="add_v">ยืนยัน</button>
                                    </center>
                                </form>

                            </div>
                        </div>

                        <!-- ด้านขวา -->

                        <div class="col-sm-9">
                            <div class="card-body">
                                <?php if (isset($_SESSION['error'])) {
                                    echo $_SESSION['error'];

                                    unset($_SESSION['error']);
                                }
                                if (isset($num_rows)) {
                                    echo "เพิ่มสำเร็จ";
                                ?>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>ชื่อ</th>
                                                <th>กลุ่ม</th>
                                                <th class="text-center">#</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $row[$w]; ?></td>
                                                    <td><?php echo $row['branch_name']; ?></td>
                                                    <td><?php echo $row['group']; ?></td>
                                                    <td class="text-center">
                                                        <?php
                                                        if (isset($_GET['add'])) {
                                                            $v = '';
                                                            switch ($add) {
                                                                case 'hvoc':
                                                                    $v = 'idh';
                                                                    break;
                                                                case 'voc':
                                                                    $v = 'idv';
                                                                    break;
                                                            }
                                                        }

                                                        ?>
                                                        <a href="?<?php echo $v . '=' . $id_v; ?>" class="btn btn-danger btn-sm">ลบ</a>

                                                    </td>
                                                </tr>
                                            <?php
                                            } ?>
                                        </tbody>
                                    </table>

                                <?php
                                    $conn->close();
                                } else { ?>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>ชื่อ</th>
                                                <th>กลุ่ม</th>
                                                <th class="text-center">#</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <td colspan="4" class="text-center">ไม่พบข้อมูล</td>
                                        </tbody>
                                    </table>
                                <?php } ?>
                            </div>
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