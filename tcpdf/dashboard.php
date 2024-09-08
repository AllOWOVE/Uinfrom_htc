<?php
$sql = "SELECT * FROM `equipment_list`";
$result = mysqli_query($conn, $sql);
?>
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
<link href="../css/styles.css" rel="stylesheet" />
<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

<body>
    <div style="text-align: center;">
        <br>
        <img src="../img/logo_htc.jpg" alt="../img/logo_htc.jpg" style="top: 0; width: 70px; height: 70px;"><br>
        รายงานการจองอุปกรณ์การเรียน วิทยาลยเทคนิคหาดใหญ่
        <br>ประจำปีการศึกษา 2567
        <br>
    </div>
    <div>1.จำนวนรายการอุปกรณ์ทั้งหมด</div>
    <br>
    <br>
    <table style="font-size: 15px;">
        <tr style="  width:90%; border: 1px solid black; text-align: center;">
            <td style="  width:15%;"></td>
            <td style=" height:25px; width:10%; border: 1px solid black; text-align: center; background-color:#D7D7D7;">ID</td>
            <td style=" width:30%; border: 1px solid black; text-align: center; background-color:#D7D7D7;">รายการ</td>
            <td style=" width:10%; border: 1px solid black; text-align: center; background-color:#D7D7D7;">ขนาด</td>
            <td style=" width:10%; border: 1px solid black; text-align: center; background-color:#D7D7D7;">ราคา</td>
            <td style=" width:10%; border: 1px solid black; text-align: center; background-color:#D7D7D7;">จำนวน</td>
         </tr>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <td></td>
                    <td style="height:30px;  border: 1px solid black; text-align: center;"> <?php echo $row['list_ID']; ?></td>
                    <td style="border: 1px solid black; "> <?php echo $row['list']; ?></td>
                    <td style="border: 1px solid black; text-align: center;"><?php echo $row['list_size']; ?></td>
                    <td style="border: 1px solid black;text-align: center;"> <?php echo $row['list_price']; ?></td>
                    <td style="border: 1px solid black;text-align: center;"> <?php echo $row['quantity']; ?></td>
                </tr>
        <?php
            }
        } else {
            // No matching records found
            echo '<tr><td colspan="5" class="text-center">ไม่พบข้อมูลในระบบ</td></tr>';
        }
        ?>
    </table>
</body>