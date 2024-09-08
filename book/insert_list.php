<?php
include '../config/config.php';

session_start();

 if(isset($_POST['submit'])){

    $sql = "INSERT INTO equipment_list(list_ID,list,list_size,list_price) VALUE()";
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายการอุปกรณ์</title>
</head>

<body>

    <div id="content">
        <!-- แบบฟอร์มเลือกจำนวนรายการที่แสดงต่อหน้า -->
        <label for="itemsPerPage">แสดงรายการต่อหน้า:</label>
        <a>เพิ่มอุปกรณ์</a>

        <form class="" action="add.php" method="post">
      <div class="row mt-3">
        <div class="col-md-12">
          <div class="form-group">
            <label for="exampleInputQuestion">รหัส</label>
            <input type="text" name="list_ID" required class="form-control" id="exampleInputQuestion">
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-12">
          <div class="form-group">
            <label for="exampleInputQuestion">ชื่อ รายการ</label>
            <input type="text" name="list" required class="form-control" id="exampleInputQuestion">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="exampleInputQuestion_A">ขนาด</label>
            <input type="text" name="list_size" required class="form-control" id="exampleInputQuestion_A">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="exampleInputQuestion_B">ราคา</label>
            <input type="text" name="list_price" required class="form-control" id="exampleInputQuestion_B">
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12" align="center">
          <button type="submit" name="submit" class="btn btn-success">เพิ่ม</button>
          <a href="index.php" class="btn btn-danger">ย้อนกลับ</a>
        </div>
      </div>
    </form>
    </div>
</body>

</html>

<?php
// ปิดการเชื่อมต่อฐานข้อมูล
$conn->close();
?>