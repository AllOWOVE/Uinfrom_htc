<?php
include 'connect.php';
$q_id = $_GET['q_id'];
$sql = "DELETE from question where q_id ='$q_id'";
$query = mysqli_query($conn,$sql);
echo "<script>
alert('ได้ทำการลบคำถามเรียบร้อยแล้ว');
window.location.href='index.php';
</script>";
 ?>
