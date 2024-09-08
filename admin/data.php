<?php
include '../config/config.php';

$query = "SELECT COUNT(*) AS order_count 
FROM orders 
INNER JOIN customer ON orders.student_id = customer.student_id 
WHERE date_order >= '2024-02-18' AND date_order <= CURDATE() AND date_payment IS NOT NULL";

$result = mysqli_query($conn, $query);

// Fetch result
$row = mysqli_fetch_assoc($result);

// Return JSON response
echo json_encode($row);
?>
