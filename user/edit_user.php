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
    header('location: user.php');
    exit();
}

mysqli_close($conn);

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