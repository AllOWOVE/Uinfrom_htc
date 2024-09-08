<?php
include 'connect.php';
$q_id = $_GET['q_id'];
$sql = "SELECT * FROM question where q_id = '$q_id'";
$query = mysqli_query($conn,$sql);
$data = mysqli_fetch_array($query);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Examination System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="index.php">Examination System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2" id="navbarsExampleDefault">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link" href="index.php">จัดการข้อสอบ</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="doexam.php">ทำข้อสอบ</a>
          </li>
      </ul>
    </div>
  </nav>
  <br><br><br><br><br>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3>ระบบจัดการและทำข้อสอบ พัฒนาด้วยภาษา PHP HTML CSS JS  และ ฐานข้อมูล Mysql</h3>
    </div>
  </div>
  <form class="" action="update.php?q_id=<?php echo $q_id; ?>" method="post">
  <div class="row mt-3">
    <div class="col-md-12">
      <div class="form-group">
        <label for="exampleInputQuestion">ชื่อคำถาม</label>
        <input type="text" name="q_name" value="<?php echo $data['q_name']; ?>" required class="form-control" id="exampleInputQuestion">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label for="exampleInputQuestion_A">ตัวเลือก A</label>
        <input type="text" name="choice_a" required value="<?php echo $data['choice_a']; ?>" class="form-control" id="exampleInputQuestion_A">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label for="exampleInputQuestion_B">ตัวเลือก B</label>
        <input type="text" name="choice_b" required value="<?php echo $data['choice_b']; ?>" class="form-control" id="exampleInputQuestion_B">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label for="exampleInputQuestion_C">ตัวเลือก C</label>
        <input type="text" name="choice_c" required value="<?php echo $data['choice_c']; ?>" class="form-control" id="exampleInputQuestion_C">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label for="exampleInputQuestion_D">ตัวเลือก D</label>
        <input type="text" name="choice_d" required value="<?php echo $data['choice_d']; ?>" class="form-control" id="exampleInputQuestion_D">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <label for="exampleInputQuestion_Ans">คำตอบ</label>
        <select class="form-control" required name="q_answer" id="exampleInputQuestion_Ans">
          <option <?php if($data['q_answer'] == 'A'){ echo "selected";} ?> value="A">ตัวเลือก A</option>
          <option <?php if($data['q_answer'] == 'B'){ echo "selected";} ?> value="B">ตัวเลือก B</option>
          <option <?php if($data['q_answer'] == 'C'){ echo "selected";} ?> value="C">ตัวเลือก C</option>
          <option <?php if($data['q_answer'] == 'D'){ echo "selected";} ?> value="D">ตัวเลือก D</option>
        </select>
      </div>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-12" align="center">
      <button type="submit" name="submit" class="btn btn-success">แก้ไขคำถาม</button>
      <a href="index.php" class="btn btn-danger">ย้อนกลับ</a>
    </div>
  </div>
    </form>
</div>

</body>
</html>
