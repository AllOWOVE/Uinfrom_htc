<?php
include '../config/config.php';
session_start();
if (isset($_POST['submit'])) {
    $print = $_POST['print'];
    $intel = "SELECT * FROM `customer` WHERE student_id = ?";

    // Use prepared statement
    $stmt = mysqli_prepare($conn, $intel);
    mysqli_stmt_bind_param($stmt, "s", $print);
    mysqli_stmt_execute($stmt);

    // Get the result
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $group_id = $row['group'];

        $intel1 = "SELECT * FROM `orders` WHERE student_id = ?";

        // Use prepared statement
        $stmt = mysqli_prepare($conn, $intel1);
        mysqli_stmt_bind_param($stmt, "s", $print);
        mysqli_stmt_execute($stmt);

        // Get the result
        $result = mysqli_stmt_get_result($stmt);
        $rows = mysqli_fetch_assoc($result);
        $order_id = $rows['order_id'];
        switch ($group_id) {
            case 'A':
                header("Location: print_A.php?a='$order_id'");
                exit();
            case 'B':
                header("Location: print_B.php?a='$order_id'");
                exit();
            case 'C':
                header("Location: print_C.php?a='$order_id'");
                exit();
            case 'D':
                header("Location: print_D.php?a='$order_id'");
                exit();
        }
    } else {
        // Handle the case where no row is found for the provided tel
        $error = "ไม่พบเจอหมายเลขนี้ในระบบ";
    }
}
?>
<title>ระบบจองอุปกรณ์</title>
<?php include "../menu/menu.php"; ?>
<br>
<div class="content">
    <div class="card">
        <div class="card-body row align-items-start">
            <div class="col">
                <h1 class="mt-5"><i class="fas fa-edit "></i>ตรวจสอบข้อมูลการจองอุปกรณ์ พิมพ์</h1>
                <hr>
                <div class="row justify-content-center">
                    <div class="col-md-6 ">
                        <div class="card mt-3">
                            <div class="card-header">ตรวจสอบข้อมูลการจองอุปกรณ์</div>
                            <div class="container-fluid px-4">
                                <br><br>
                                <form action="" method="post">
                                    <?php if (isset($error)) { ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?php echo $error;
                                            ?>
                                        </div>
                                    <?php } ?>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="fas fa-user "></i></div>
                                        <input type="text" class="form-control" id="autoSizingInputGroup" name="print" placeholder="เลขใบสมัครสอบ">
                                    </div>

                                    <center>
                                        <button class="btn btn-success mt-3" type="submit" name="submit">ค้นหา</button>
                                    </center>
                                    <br>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <br>
            </div>

            <br>
        </div>
    </div>
        <div class=" row mt-1">
            <div class=" col-sm-12">
                <div class="card  mt-1 px-5">
                    <div class="h2 mt-5">ขั้นตอนการสั่งพิมพ์</div>
                    <img src="../img/print.png" alt="img/print.png" style=" top: 0; width: 100%;">
                </div>
            </div>
        </div>
        </body>

        </html>