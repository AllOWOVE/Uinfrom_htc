<?php
include 'connect.php';
$choice = $_POST['choice'];
$sum_score = 0;
$sql_question = "SELECT * FROM question";
$query_question = mysqli_query($conn,$sql_question);
$count_question = mysqli_num_rows($query_question);
if (empty($choice)) {
  echo "<script>
  alert('คุณยังไม่ได้ทำข้อสอบ');
  window.location.href='index.php';
  </script>";
  exit();
}
foreach ($choice as $key => $value) {
  $sql = "SELECT * FROM question where q_id = '$key'";
  $query = mysqli_query($conn,$sql);
  $data = mysqli_fetch_array($query);
  if ($data['q_answer'] == $value) {
    $sum_score += 1;
  }else {
    $sum_score += 0;
  }
}
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
     <div class="col-md-12" align="center">
       <h3>ระบบจัดการและทำข้อสอบ พัฒนาด้วยภาษา PHP HTML CSS JS  และ ฐานข้อมูล Mysql</h3>
     </div>
   </div>
   <br><br><br><br><br>
   <div class="row">
     <div class="col-md-12" align="center">
       <p class="text-success h4">คะแนนของคุณคือ</p>
       <p class="text-primary h3"> <?php echo $sum_score ?> / <?php echo $count_question; ?></p>
       <br><br>
       <a href="doexam.php" class="btn btn-success">กลับไปทำข้อสอบ</a>
       <a href="index.php" class="btn btn-danger">กลับสู่หน้าหลัก</a>
     </div>
   </div>
 </div>

 </body>
 </html>
