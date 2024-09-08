<?php
include 'connect.php';
$q_id = $_GET['q_id'];
$q_name = $_POST['q_name'];
$choice_a = $_POST['choice_a'];
$choice_b = $_POST['choice_b'];
$choice_c = $_POST['choice_c'];
$choice_d = $_POST['choice_d'];
$q_answer = $_POST['q_answer'];
$sql = "UPDATE question SET q_name = '$q_name',choice_a = '$choice_a',choice_b = '$choice_b' ,choice_c = '$choice_c',choice_d = '$choice_d',q_answer = '$q_answer' WHERE q_id='$q_id'";
$query = mysqli_query($conn,$sql);
echo "<script>
alert('ได้ทำการแก้ไขคำถามเรียบร้อยแล้ว');
window.location.href='index.php';
</script>";
 ?>
