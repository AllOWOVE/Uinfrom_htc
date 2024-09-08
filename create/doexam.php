<?php
include 'connect.php';
$sql = "SELECT * FROM question order by q_id asc";
$query = mysqli_query($conn,$sql);
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
  <div class="row mb-3">
    <div class="col-md-12">
      <h4>ระบบจัดการและทำข้อสอบ พัฒนาด้วยภาษา PHP HTML CSS JS  และ ฐานข้อมูล Mysql (ทำข้อสอบ)</h4>
    </div>
  </div>
  <?php if(mysqli_num_rows($query) > 0){ ?>
    <form class="" action="checkscore.php" method="post">
    <?php $i=1; while ($data = mysqli_fetch_array($query)) { ?>
        <div class="row mt-3">
          <div class="col-md-12">
            <h5><?php echo $i++.'. '.$data['q_name'] ?></h5>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" required value="A" name="choice[<?php echo $data['q_id'] ?>]">  <?php echo $data['choice_a'] ?>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" required value="B" name="choice[<?php echo $data['q_id'] ?>]">  <?php echo $data['choice_b'] ?>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" required value="C" name="choice[<?php echo $data['q_id'] ?>]">  <?php echo $data['choice_c'] ?>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" required value="D" name="choice[<?php echo $data['q_id'] ?>]">  <?php echo $data['choice_d'] ?>
              </label>
            </div>
          </div>
        </div>
    <?php } ?>
    <br>
    <div class="row">
      <div class="col-md-12" align="center">
        <button type="submit" name="button" onclick="return confirm('คุณต้องการส่งคำตอบหรือไม่');" class="btn btn-success">ส่งคำตอบ</button>
      </div>
    </div>
      </form>
  <?php }else{ ?>
    <div class="alert alert-danger" role="alert">
         ไม่มีข้อมูล
    </div>
  <?php } ?>
</div>

</body>
</html>
