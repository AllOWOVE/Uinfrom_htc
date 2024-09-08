<?php
include 'connect.php';
$q_name = $_POST['q_name'];
$choice_a = $_POST['choice_a'];
$choice_b = $_POST['choice_b'];
$choice_c = $_POST['choice_c'];
$choice_d = $_POST['choice_d'];
$q_answer = $_POST['q_answer'];
$sql = "INSERT INTO question (q_name,choice_a,choice_b,choice_c,choice_d,q_answer) VALUES ('$q_name','$choice_a','$choice_b','$choice_c','$choice_d','$q_answer')";
$query = mysqli_query($conn,$sql);
echo "<script>
alert('ได้ทำการเพิ่มคำถามเรียบร้อยแล้ว');
window.location.href='index.php';
</script>";
 ?>
