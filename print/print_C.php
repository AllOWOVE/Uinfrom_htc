<?php
include '../config/config.php';
include '../book/check_order.php';
session_start();
?>
<title>ระบบจองอุปกรณ์</title>
<?php include "../menu/menu.php"; ?>
<br>
<div class="content">
    <div class="card">
        <div class="container-lg">
            <div class="card-body text-start">
                <label>
                    <?php
                    $ids = $row['student_id'];
                    $sell_s = "SELECT * FROM orders WHERE student_id = $ids AND date_payment IS  NULL";
                    $s = mysqli_query($conn, $sell_s);
                    $cs = mysqli_num_rows($s);
                    if ($cs == 1) { ?>
                        <h4>รอชำระ</h4>
                    <?php } else { ?>
                        <h4>ทำการชำระเสร็จสิ้นเเล้ว</h4>
                        <p>สามารถติดตามข่าวสาร</p>
                        <p>ได้ที่ facebook: ประชาสัมพันธ์ เทคนิคหาดใหญ่ <a target="_blank" href="https://www.facebook.com/profile.php?id=100010759006539&locale=th_TH">https://www.facebook.com/profile.php?id=100010759006539&locale=th_TH</a></p>

                    <?php } ?>
                </label>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="container-lg">
            <div class="row justify-content-center">
                <div class="col">
                    <form action="../tcpdf/Cpdf.php?a=<?php echo $a ?>" method="post" target="_blank">
                        <div class="card-body">
                            <div class=" text-start py-9 mt-2 rounded ">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-print"></i> พิมพ์</button>
                            </div>
                            <h2 class="text-end mt-2"><?php echo $student_id; ?>&nbsp;<span class="badge bg-light text-dark border">C</span></h2>
                            <table class="table table-striped table-bordered" style="border-color: #000000">
                                <tr>
                                    <th>ชื่อ-สกุล</th>
                                    <td>
                                        <?php

                                        echo $t_name;
                                        echo $f_name . '&nbsp;' . $l_name;
                                        ?>
                                    </td>
                                    <th>เเผนก</th>
                                    <td>
                                        <?php
                                        echo $branch_name;
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>โทรศัพท์</th>
                                    <td>
                                        <?php
                                        echo $tel
                                        ?>
                                    </td>
                                    <th>วันที่</th>
                                    <td>
                                        <?php
                                        echo $date;
                                        ?>
                                    </td>
                                </tr>
                            </table>
                            <?php if (isset($_GET['a'])) { ?>
                                <table class="table  table-bordered" style="border-color: #000000">
                                    <tr>
                                        <th class="text-center">ลำดับ</th>
                                        <th>รายการ</th>
                                        <th>ขนาด</th>
                                        <th>ราคา/หน่วย</th>
                                        <th>จำนวน</th>
                                        <th>ราคา</th>
                                    </tr>
                                    <?php if (isset($list_size1)) {
                                        $n += 1; ?>
                                        <tr>
                                            <td class="text-center"><?php echo $n; ?></td>
                                            <td> เสื้อฝึกงาน (เสื้อช็อป)</td>
                                            <td><?php echo $list_size1; ?></td>
                                            <td><?php echo $list_price1; ?></td>
                                            <td><?php echo $count1; ?></td>
                                            <td><?php echo $_1 = $count1 * $list_price1;
                                                $sum += $_1; ?></td>
                                        </tr>
                                    <?php } ?>
                                    <?php if (isset($list_size2)) {
                                        $n += 1; ?>
                                        <tr>
                                            <td class="text-center"><?php echo $n; ?></td>
                                            <td>เสื้อยืดฝึกฝีมือ (คอกลม)</td>
                                            <td><?php echo $list_size2; ?></td>
                                            <td><?php echo $list_price2; ?></td>
                                            <td><?php echo $count2 ?></td>
                                            <td><?php echo $_2 = $count2 * $list_price2;
                                                $sum += $_2; ?></td>
                                        </tr>
                                    <?php } ?>
                                    <?php if (isset($list_size3)) {
                                        $n += 1; ?>
                                        <tr>
                                            <td class="text-center"><?php echo $n; ?></td>
                                            <td>เสื้อพละ</td>
                                            <td><?php echo $list_size3; ?></td>
                                            <td><?php echo $list_price3; ?></td>
                                            <td><?php echo $count3 ?></td>
                                            <td><?php echo $_3 = $count3 * $list_price3;
                                                $sum += $_3; ?></td>
                                        </tr>
                                    <?php } ?>
                                    <?php if (isset($list_size4)) {
                                        $n += 1; ?>
                                        <tr>
                                            <td class="text-center"><?php echo $n; ?></td>
                                            <td>กางเกงพละ</td>
                                            <td><?php echo $list_size4; ?></td>
                                            <td><?php echo $list_price4; ?></td>
                                            <td><?php echo $count4 ?></td>
                                            <td><?php echo $_4 = $count4 * $list_price4;
                                                $sum += $_4; ?></td>
                                        </tr>
                                    <?php } ?>
                                    <?php if (isset($list_size5)) {
                                        $n += 1; ?>
                                        <tr>
                                            <td class="text-center"><?php echo $n; ?></td>
                                            <td>เข็มขัดและหัวเข็มขัด</td>
                                            <td class="table-active"></td>
                                            <td><?php echo $list_price5; ?></td>
                                            <td><?php echo $count5 ?></td>
                                            <td><?php echo $_5 = $count5 * $list_price5;
                                                $sum += $_5; ?></td>
                                        </tr>
                                    <?php } ?>
                                    <?php if (isset($list_size6)) {
                                        $n += 1; ?>
                                        <tr>
                                            <td class="text-center"><?php echo $n; ?></td>
                                            <td>เน็คไทและเข็ม</td>
                                            <td class="table-active"></td>
                                            <td><?php echo $list_price6; ?></td>
                                            <td><?php echo $count6 ?></td>
                                            <td><?php echo $_6 = $count6 * $list_price6;
                                                $sum += $_6; ?></td>
                                        </tr>
                                    <?php } ?>
                                    <?php if (isset($list_size7)) {
                                        $n += 1; ?>
                                        <tr>
                                            <td class="text-center"><?php echo $n; ?></td>
                                            <td>กระเป๋าเป้วิทยาลัยเทคนิคหาดใหญ่</td>
                                            <td class="table-active"></td>
                                            <td><?php echo $list_price7; ?></td>
                                            <td><?php echo $count7 ?></td>
                                            <td><?php echo $_7 = $count7 * $list_price7;
                                                $sum += $_7; ?></td>
                                        </tr>
                                    <?php } ?>
                                    <?php if (isset($list_size8)) {
                                        $n += 1; ?>
                                        <tr>
                                            <td class="text-center"><?php echo $n; ?></td>
                                            <td>สมุดตราวิทยาลัยเทคนิคหาดใหญ่ (1โหล)</td>
                                            <td class="table-active"></td>
                                            <td><?php echo $list_price8; ?></td>
                                            <td><?php echo $count8 ?></td>
                                            <td><?php echo $_8 = $count8 * $list_price8;
                                                $sum += $_8; ?></td>
                                        </tr>
                                    <?php } ?>
                                    <?php if (isset($list_size9)) {
                                        $n += 1; ?>
                                        <tr>
                                            <td class="text-center"><?php echo $n; ?></td>
                                            <?php if ($t_name == "นางสาว" or $t_name == "นาง" or $t_name == "เด็กหญิง") { ?>
                                                <td>เสื้อนักเรียนสีขาว แขนยาว(หญิง)</td>
                                            <?php } else { ?>
                                                <td>เสื้อนักเรียนสีขาว แขนยาว(ชาย)</td>
                                            <?php } ?>
                                            <?php ?>
                                            <td><?php echo $list_size9; ?></td>
                                            <td>200</td>
                                            <td><?php echo $count9 ?></td>
                                            <td><?php echo $_9 = $count9 * $list_price9;
                                                $sum += $_9; ?></td>
                                        </tr>
                                    <?php } ?>
                                    <?php if (isset($list_size10)) {
                                        $n += 1; ?>
                                        <tr>
                                            <td class="text-center"><?php echo $n; ?></td>
                                            <td>กางเกงขายาว สีดำ (เอว)</td>
                                            <td><?php echo $list_size10; ?></td>
                                            <td>370</td>
                                            <td><?php echo $count10 ?></td>
                                            <td><?php echo $_10 = $count10 * $list_price10;
                                                $sum += $_10; ?></td>
                                        </tr>
                                    <?php } ?>
                                    <?php if (isset($list_size11)) {
                                        $n += 1; ?>
                                        <tr>
                                            <td class="text-center"><?php echo $n; ?></td>
                                            <td>รองเท้าผ้าใบสีดำ (เบอร์)</td>
                                            <td><?php echo $list_size11; ?></td>
                                            <td><?php echo $list_price11; ?></td>
                                            <td><?php echo $count11 ?></td>
                                            <td><?php echo $_11 = $count11 * $list_price11;
                                                $sum += $_11; ?></td>
                                        </tr>
                                    <?php } ?>
                                    <?php if (isset($list_size12)) {
                                        $n += 1; ?>
                                        <tr>
                                            <td class="text-center"><?php echo $n; ?></td>
                                            <td>ถุงเท้า (5 คู่)</td>
                                            <td class="table-active"></td>
                                            <td>100</td>
                                            <td><?php echo $count12 ?></td>
                                            <td><?php echo $_12 = $count12 * $list_price12;
                                                $sum += $_12; ?></td>
                                        </tr>
                                    <?php } ?>
                                    <?php if (isset($list_size13)) {
                                        $n += 1; ?>
                                        <tr>
                                            <td class="text-center"><?php echo $n; ?></td>
                                            <td>ตะไบ</td>
                                            <td class="table-active"></td>
                                            <td>90</td>
                                            <td><?php echo $count13 ?></td>
                                            <td><?php echo $_13 = $count13 * $list_price13;
                                                $sum += $_13; ?></td>
                                        </tr>
                                    <?php } ?>

                                    <?php if (isset($sizef)) {
                                        $n += 1; ?>
                                        <tr>
                                            <td class="text-center"><?php echo $n; ?></td>
                                            <td>กระโปรง สีดำ เอว </td>
                                            <td><?php echo $list_sizef; ?></td>
                                            <td>280</td>
                                            <td><?php echo $countf ?></td>
                                            <td><?php echo $_f = $countf * $list_pricef;
                                                $sum += $_f; ?></td>
                                        </tr>
                                    <?php } ?>
                                    <tr>
                                        <td colspan="3" class="table-active"></td>
                                        <td colspan="2" class="table-active">รวม</td>
                                        <td class="table-active"><?php echo $sum; ?></td>
                                    </tr>
                                </table>
                            <?php  } ?>
                            <div class=" text-end py-9 mt-5 rounded ">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-print"></i> พิมพ์</button>
                    </form>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
</div>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>