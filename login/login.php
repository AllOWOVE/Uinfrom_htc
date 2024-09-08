<?php
include("../config/config.php");
session_start();

/* Login */
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        $_SESSION['username'] = $username;
        $_SESSION['lavel'] = $row['lavel']; // Assign user's level to the session variable

        header('location: ../admin/index.php');
    } else {
        $login_error = "ชื่อผู้ใช้ หรือ รหัสผ่าน ไม่ถูกต้อง";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background-color: #E5A0E0;">

    <div class="container mt-5">
        <div class="row justify-content-center">
            
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">เข้าสู่ระบบ</h2>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <?php if (isset($login_error)) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $login_error; ?>
                                </div>
                            <?php } ?>

                            <div class="form-group">
                                <label for="username">ชื่อผู้ใช้:</label>
                                <input type="text" class="form-control" name="username" required>
                            </div>

                            <div class="form-group">
                                <label for="password">รหัสผ่าน:</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block" name="login_user">ยืนยัน</button>
                        </form>
                    </div>
                </div>
                <br>
                ไม่ต้องการเข้าสู่ระบบ กลับสู่<a type="text" name="register" style="width: 10%;" href="../customer/index.php">หน้าหลัก</a>
            </div>
        </div>
    </div>

</body>

</html>