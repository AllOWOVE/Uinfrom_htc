<?php
include '../config/config.php';
include '../login/check_login.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];

    // Check if the username or email already exists
    $check_query = "SELECT * FROM user WHERE username = '$username' OR email = '$email'";
    $check_result = mysqli_query($conn, $check_query);

    if ($check_result) {
        $num_rows = mysqli_num_rows($check_result);

        if ($num_rows > 0) {
            $_SESSION['error'] = 'ชื่อ กับ อีเมล นี้มีการลงทะเบียนไปแล้ว!!!';
        } else {
            // Insert the user into the database
            $sql = "INSERT INTO user (username, password, name, email, tel) VALUES ('$username', '$password', '$name', '$email', '$tel')";

            if ($conn->query($sql) === TRUE) {
                $registration = 'ลงทะเบียนเสร็จสิ้น';
            } else {
                $_SESSION['error'] = 'Error: ' . mysqli_error($conn);
            }
        }
    } else {
        $_SESSION['error'] = 'Error: ' . mysqli_error($conn);
    }
}

include "../menu/menu_admin.php";
?>

<title>ตารางแผนก ระบบจองอุปกรณ์</title>
<div id="layoutSidenav_content">
    <main>
        <div class="card-body mt-3 ">
            <div class="row ">
                <div class="col-xl-5 ">
                    <div class="card mb-4 shadow">
                        <div class="card-header">
                            <i class="fas fa-chart-area me-1"></i>
                            สมัครสมาชิก
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <?php if (isset($_SESSION['error'])) { ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo $_SESSION['error'];
                                        unset($_SESSION['error']);
                                        ?>
                                    </div>
                                <?php } else if (isset($registration)) {
                                ?>
                                    <div class="alert alert-primary" role="alert">
                                        <?php echo $registration; ?>
                                    </div>
                                <?php } ?>

                                <div class="form-group mt-3">
                                    <label for="username">ชื่อผู้ใช้:</label>
                                    <input type="text" class="form-control" name="username" required>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="password">รหัสผ่าน:</label>
                                    <input type="password" class="form-control" name="password" required>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="name">ชื่อ-นานสกุล:</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="tel">เบอร์โทรศัพท์:</label>
                                    <input type="tel" class="form-control" name="tel" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="email">email:</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>

                                <button type="submit" class="btn btn-primary btn-block mt-3" name="register">เพิ่ม</button>
                            </form>
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