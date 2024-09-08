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
  <div class="row">
    <div class="col-md-12">
      <h3>ระบบจัดการและทำข้อสอบ พัฒนาด้วยภาษา PHP HTML CSS JS  และ ฐานข้อมูล Mysql</h3>
      <p></p>
    </div>
    <div class="col-md-12" align="right">
      <a href="create.php" class="btn btn-success">เพิ่มคำถาม</a>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-md-12">
    <?php if(mysqli_num_rows($query) > 0){ ?>
      <div class="table-responsive">
        <table class="table table table-condensed">
          <tr>
            <th>ลำดับ</th>
            <th>ชื่อคำถาม</th>
            <th>เครื่องมือ</th>
          </tr>
          <?php $i=1; while ($data = mysqli_fetch_array($query)) { ?>
          <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $data['q_name'] ?></td>
            <td>
              <a href="edit.php?q_id=<?php echo $data['q_id']; ?>" class="btn btn-warning">แก้ไข</a>
              <a onclick="return confirm('คุณต้องการลบคำถามหรือไม่');" href="delete.php?q_id=<?php echo $data['q_id']; ?>" c class="btn btn-danger">ลบ</a>
            </td>
          </tr>
        <?php } ?>
        </table>
      </div>
    <?php }else{ ?>
      <div class="alert alert-danger" role="alert">
           ไม่มีข้อมูล
      </div>
    <?php } ?>
    </div>
  </div>
</div>

</body>
</html>
