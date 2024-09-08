<?php
include '../config/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<style>
    body {
        padding-top: 20px;
        /* Adjust based on the height of your navbar */
        margin: 0 auto;
        /* Center the content */
        width: 70rem;
    }

    .scrollable-box {
        max-height: 300px;
        /* Adjust based on your needs */
        overflow-y: auto;
    }

    #navbar {
        padding-top: 20px;
        margin: 0 auto;
        width: 70rem;
    }

    .content {
        padding: 0px;
    }

    .sticky {
        position: fixed;
        top: 0;
        width: 100%;
    }

    .sticky+.content {
        padding-top: 60px;
    }
</style>

<body class="sb-nav-fixed" style="background-color: #f4f4f4;">
    <div class="card" style="  margin: 0 auto; ">
        <a><img src="../img/logo_htc.png" class="card-img-top" alt="img/logo_htc.png" style=" top: 0; width: 100px; height: 100px;">วิทยาลัยเทคนิคหาดใหญ่</a>
        <div class="card-body">
            <h2 class="card-title">ระบบจองอุปกรณ์การเรียนวิทยาลัยเทคนิคหาดใหญ่</h2>
            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            <br>
        </div>
    </div>
    <div class="card">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarText">  
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"></li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../customer/index.php">หน้าหลัก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../customer/index.php">จองอุปกรณ์</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../print/print.php">ตรวจสอบข้อมูลการจอง</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li> -->
                </ul>
            </div>
        </nav>
    </div>
    <!-- 
    <script>
        window.onscroll = function() {
            myFunction()
        };

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script> -->

</html>

</body>