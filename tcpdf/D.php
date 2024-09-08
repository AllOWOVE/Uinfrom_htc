
    <table style="width:100%; height:100%;">
        <tr>
            <td style="width:49%;">
                <table>
                    <tr>
                        <td style="width:80%;"></td>
                        <td style="width:10%; text-align: center;"><h2><?php echo $student_id; ?></h2></td>
                        <td style="width:10%;background-color:#D7D7D7;border: 1px solid black; text-align: center;"><h2>D</h2></td>
                    </tr>
                    <tr>
                        <td style="width:20%;"><img src="../img/logo_htc.jpg" alt="../img/logo_htc.jpg" style=" top: 0; width: 70px; height: 70px;"></td>
                        <td style=" width:60%; text-align: center;">
                        <h2>ร้านค้าสวัสดิการวิทยาลัยเทคนิคหาดใหญ่
                            <br>ปีการศึกษา 2567&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; โทร. 083-897-8671 (ผู้จัดการ)
                        </h2>
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td style=" width:101%; border: 1px solid black; text-align: center;"><h2>รายการจองอุปกรณ์การเรียนของนักศึกษา ปวส. <u>เฉพาะ</u> ปิโตรเลียม</h2></td>
                    </tr> 
                    <br>
                    <tr>
                        <td style=" width:11%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2>ชื่อ-สกุล</h2></td>
                        <td style=" width:33%; border: 1px solid black;"><h3>&nbsp;&nbsp;<?php
                            echo $t_name;
                            echo $f_name . '&nbsp;' . $l_name;
                            ?></h3>
                        </td>
                        <td style=" width:12%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2>เเผนก</h2></td>
                        <td style=" width:45%; border: 1px solid black;"><h3>&nbsp;&nbsp;<?php
                            echo $branch_name;
                            ?></h3>
                        </td>
                    </tr>                    
                    <tr>
                        <td style=" width:11%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2>โทรศัพท์</h2></td>
                        <td style=" width:33%; border: 1px solid black;"><h3>&nbsp;&nbsp;<?php
                            echo $tel;
                            ?></h3>
                        </td>
                        <td style=" width:12%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2>วันที่</h2></td>
                        <td style=" width:45%; border: 1px solid black;"><h3>&nbsp;&nbsp;<?php
                            echo $date;
                            ?></h3>
                        </td>
                    </tr>    
                    <tr>
                        <td style=" width:11%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2>ลำดับ</h2></td>
                        <td style=" width:45%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2>รายการ</h2></td>
                        <td style=" width:8%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2>ขนาด</h2></td>
                        <td style=" width:15%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2>ราคา/หน่วย</h2></td>
                        <td style=" width:9%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2>จำนวน</h2></td>
                        <td style=" width:13%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2>จำนวนเงิน</h2></td>
                    </tr> 
                    <?php if (isset($_GET['a'])) {
                    $n = 0;
                    $sum = 0; 
                        if (isset($list_size1)) {$n += 1; ?>
                            <tr>
                            <td style=" width:11%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2><?php echo $n; ?></h2></td>
                            <td style=" width:45%; border: 1px solid black; "><h2> เสื้อฝึกงาน (เสื้อช็อป)</h2></td>
                            <td style=" width:8%; border: 1px solid black; text-align: center; "><h2><?php echo $list_size1; ?></h2></td>
                            <td style=" width:15%; border: 1px solid black; text-align: center;"><h2><?php echo $list_price1; ?></h2></td>
                            <td style=" width:9%; border: 1px solid black; text-align: center; "><h2><?php echo $count1; ?></h2></td>
                            <td style=" width:13%; border: 1px solid black; text-align: center;"><h2><?php echo $_1 = $count1 * $list_price1;
                                    $sum += $_1; ?></h2></td>

                            </tr>
                        <?php }?>    
                        <?php 
                        if (isset($list_size2)) {$n += 1; ?>
                            <tr>
                            <td style=" width:11%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2><?php echo $n; ?></h2></td>
                            <td style=" width:45%; border: 1px solid black; "><h2> เสื้อยืดฝึกฝีมือ (คอกลม)</h2></td>
                            <td style=" width:8%; border: 1px solid black; text-align: center; "><h2><?php echo $list_size2; ?></h2></td>
                            <td style=" width:15%; border: 1px solid black; text-align: center;"><h2><?php echo $list_price2; ?></h2></td>
                            <td style=" width:9%; border: 1px solid black; text-align: center; "><h2><?php echo $count2; ?></h2></td>
                            <td style=" width:13%; border: 1px solid black; text-align: center;"><h2><?php echo $_2 = $count2 * $list_price2;
                                    $sum += $_2; ?></h2></td>

                            </tr>
                        <?php }?>    
                        <?php 
                        if (isset($list_size3)) {$n += 1; ?>
                            <tr>
                            <td style=" width:11%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2><?php echo $n; ?></h2></td>
                            <td style=" width:45%; border: 1px solid black; "><h2> เสื้อพละ</h2></td>
                            <td style=" width:8%; border: 1px solid black; text-align: center; "><h2><?php echo $list_size3; ?></h2></td>
                            <td style=" width:15%; border: 1px solid black; text-align: center;"><h2><?php echo $list_price3; ?></h2></td>
                            <td style=" width:9%; border: 1px solid black; text-align: center; "><h2><?php echo $count3; ?></h2></td>
                            <td style=" width:13%; border: 1px solid black; text-align: center;"><h2><?php echo $_3 = $count3 * $list_price3;
                                    $sum += $_3; ?></h2></td>

                            </tr>
                        <?php }?>    
                        <?php 
                        if (isset($list_size4)) {$n += 1; ?>
                            <tr>
                            <td style=" width:11%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2><?php echo $n; ?></h2></td>
                            <td style=" width:45%; border: 1px solid black; "><h2> กางเกงพละ</h2></td>
                            <td style=" width:8%; border: 1px solid black; text-align: center; "><h2><?php echo $list_size4; ?></h2></td>
                            <td style=" width:15%; border: 1px solid black; text-align: center;"><h2><?php echo $list_price4; ?></h2></td>
                            <td style=" width:9%; border: 1px solid black; text-align: center; "><h2><?php echo $count4; ?></h2></td>
                            <td style=" width:13%; border: 1px solid black; text-align: center;"><h2><?php echo $_4 = $count4 * $list_price4;
                                    $sum += $_4; ?></h2></td>

                            </tr>
                        <?php }?>    
                        <?php 
                        if (isset($list_size5)) {$n += 1; ?>
                            <tr>
                            <td style=" width:11%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2><?php echo $n; ?></h2></td>
                            <td style=" width:45%; border: 1px solid black; "><h2> เข็มขัดและหัวเข็มขัด</h2></td>
                            <td style=" width:8%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2></h2></td>
                            <td style=" width:15%; border: 1px solid black; text-align: center;"><h2><?php echo $list_price5; ?></h2></td>
                            <td style=" width:9%; border: 1px solid black; text-align: center; "><h2><?php echo $count5; ?></h2></td>
                            <td style=" width:13%; border: 1px solid black; text-align: center;"><h2><?php echo $_5 = $count5 * $list_price5;
                                    $sum += $_5; ?></h2></td>

                            </tr>
                        <?php }?>    
                        <?php 
                        if (isset($list_size6)) {$n += 1; ?>
                            <tr>
                            <td style=" width:11%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2><?php echo $n; ?></h2></td>
                            <td style=" width:45%; border: 1px solid black; "><h2> เน็คไทและเข็ม</h2></td>
                            <td style=" width:8%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2></h2></td>
                            <td style=" width:15%; border: 1px solid black; text-align: center;"><h2><?php echo $list_price6; ?></h2></td>
                            <td style=" width:9%; border: 1px solid black; text-align: center; "><h2><?php echo $count6; ?></h2></td>
                            <td style=" width:13%; border: 1px solid black; text-align: center;"><h2><?php echo $_6 = $count6 * $list_price6;
                                    $sum += $_6; ?></h2></td>

                            </tr>
                        <?php }?>    
                        <?php 
                        if (isset($list_size7)) {$n += 1; ?>
                            <tr>
                            <td style=" width:11%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2><?php echo $n; ?></h2></td>
                            <td style=" width:45%; border: 1px solid black; "><h2> กระเป๋าเป้วิทยาลัยเทคนิคหาดใหญ่</h2></td>
                            <td style=" width:8%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2></h2></td>
                            <td style=" width:15%; border: 1px solid black; text-align: center;"><h2><?php echo $list_price7; ?></h2></td>
                            <td style=" width:9%; border: 1px solid black; text-align: center; "><h2><?php echo $count7; ?></h2></td>
                            <td style=" width:13%; border: 1px solid black; text-align: center;"><h2><?php echo $_7 = $count7 * $list_price7;
                                    $sum += $_7; ?></h2></td>

                            </tr>
                        <?php }?>    
                        <?php 
                        if (isset($list_size8)) {$n += 1; ?>
                            <tr>
                            <td style=" width:11%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2><?php echo $n; ?></h2></td>
                            <td style=" width:45%; border: 1px solid black; "><h2> สมุดตราวิทยาลัยเทคนิคหาดใหญ่ (1โหล)</h2></td>
                            <td style=" width:8%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2></h2></td>
                            <td style=" width:15%; border: 1px solid black; text-align: center;"><h2><?php echo $list_price8; ?></h2></td>
                            <td style=" width:9%; border: 1px solid black; text-align: center; "><h2><?php echo $count8; ?></h2></td>
                            <td style=" width:13%; border: 1px solid black; text-align: center;"><h2><?php echo $_8 = $count8 * $list_price8;
                                    $sum += $_8; ?></h2></td>

                            </tr>
                        <?php }?>    
                        <?php 
                        if (isset($list_size9)) {$n += 1; ?>
                            <tr>
                                <td style=" width:11%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2><?php echo $n; ?></h2></td>
                                <td style=" width:45%; border: 1px solid black; "><h2><?php if ($t_name == "นางสาว" or $t_name == "นาง" or $t_name == "เด็กหญิง") { ?> เสื้อนักเรียนสีขาว แขนยาว(หญิง)
                                    <?php } else { ?> เสื้อนักเรียนสีขาว แขนยาว(ชาย)
                                <?php } ?>
                                <?php ?></h2></td>
                                <td style=" width:8%; border: 1px solid black; text-align: center;"><h2><?php echo $list_size9; ?></h2></td>
                            <td style=" width:15%; border: 1px solid black; text-align: center;"><h2><?php echo $list_price9; ?></h2></td>
                            <td style=" width:9%; border: 1px solid black; text-align: center; "><h2><?php echo $count9; ?></h2></td>
                            <td style=" width:13%; border: 1px solid black; text-align: center;"><h2><?php echo $_9 = $count9 * $list_price9;
                                    $sum += $_9; ?></h2></td>

                            </tr>
                        <?php }?>    
                        <?php 
                        if (isset($list_size10)) {$n += 1; ?>
                            <tr>
                            <td style=" width:11%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2><?php echo $n; ?></h2></td>
                            <td style=" width:45%; border: 1px solid black; "><h2> กางเกงขายาว สีกรม (เอว)</h2></td>
                            <td style=" width:8%; border: 1px solid black; text-align: center;"><h2><?php echo $list_size10; ?></h2></td>
                            <td style=" width:15%; border: 1px solid black; text-align: center;"><h2><?php echo $list_price10; ?></h2></td>
                            <td style=" width:9%; border: 1px solid black; text-align: center; "><h2><?php echo $count10; ?></h2></td>
                            <td style=" width:13%; border: 1px solid black; text-align: center;"><h2><?php echo $_10 = $count10 * $list_price10;
                                    $sum += $_10; ?></h2></td>

                            </tr>
                        <?php }?>    
                        <?php 
                        if (isset($list_size11)) {$n += 1; ?>
                            <tr>
                            <td style=" width:11%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2><?php echo $n; ?></h2></td>
                            <td style=" width:45%; border: 1px solid black; "><h2> รองเท้าผ้าใบสีดำ (เบอร์)</h2></td>
                            <td style=" width:8%; border: 1px solid black; text-align: center;"><h2><?php echo $list_size11; ?></h2></td>
                            <td style=" width:15%; border: 1px solid black; text-align: center;"><h2><?php echo $list_price11; ?></h2></td>
                            <td style=" width:9%; border: 1px solid black; text-align: center; "><h2><?php echo $count11; ?></h2></td>
                            <td style=" width:13%; border: 1px solid black; text-align: center;"><h2><?php echo $_11 = $count11 * $list_price11;
                                    $sum += $_11; ?></h2></td>

                            </tr>
                        <?php }?>    
                        <?php 
                        if (isset($list_size12)) {$n += 1; ?>
                            <tr>
                            <td style=" width:11%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2><?php echo $n; ?></h2></td>
                            <td style=" width:45%; border: 1px solid black; "><h2> ถุงเท้า (5 คู่)</h2></td>
                            <td style=" width:8%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2></h2></td>
                            <td style=" width:15%; border: 1px solid black; text-align: center;"><h2><?php echo $list_price12; ?></h2></td>
                            <td style=" width:9%; border: 1px solid black; text-align: center; "><h2><?php echo $count12; ?></h2></td>
                            <td style=" width:13%; border: 1px solid black; text-align: center;"><h2><?php echo $_12 = $count12 * $list_price12;
                                    $sum += $_12; ?></h2></td>

                            </tr>
                        <?php }?>    
                        <?php 
                        if (isset($list_size13)) {$n += 1; ?>
                            <tr>
                            <td style=" width:11%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2><?php echo $n; ?></h2></td>
                            <td style=" width:45%; border: 1px solid black; "><h2> ตะไบ</h2></td>
                            <td style=" width:8%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2></h2></td>
                            <td style=" width:15%; border: 1px solid black; text-align: center;"><h2><?php echo $list_price13; ?></h2></td>
                            <td style=" width:9%; border: 1px solid black; text-align: center; "><h2><?php echo $count13; ?></h2></td>
                            <td style=" width:13%; border: 1px solid black; text-align: center;"><h2><?php echo $_13 = $count13 * $list_price13;
                                    $sum += $_13; ?></h2></td>

                            </tr>
                        <?php }?>    
                        <?php 
                        if (isset($sizef)) {$n += 1; ?>
                            <tr>
                            <td style=" width:11%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2><?php echo $n; ?></h2></td>
                            <td style=" width:45%; border: 1px solid black; "><h2> <?php echo $listf ?></h2></td>
                            <td style=" width:8%; border: 1px solid black; text-align: center; "><h2><?php echo $list_sizef; ?></h2></td>
                            <td style=" width:15%; border: 1px solid black; text-align: center;"><h2><?php echo $list_pricef; ?></h2></td>
                            <td style=" width:9%; border: 1px solid black; text-align: center; "><h2><?php echo $countf; ?></h2></td>
                            <td style=" width:13%; border: 1px solid black; text-align: center;"><h2><?php echo $_f = $countf * $list_pricef;
                                    $sum += $_f; ?></h2></td>

                            </tr>
                        <?php }?>  
                        <tr>
                            <td style=" width:88%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2>รวม</h2></td>
                            <td style=" width:13%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2><?php echo $sum; ?></h2></td>
                        </tr>  
                        <?php }?>  
                        <br>
                        <tr>
                            <td style=" width:101%; text-align: center; "><h2>ผู้รับเงิน ......................................................</h2></td>
                        </tr> 
                        <tr>
                            <td style=" width:101%; "><h4>หมายเหตุ
                                <br>1.เมื่อชำระเงินเเล้วไม่สามารถเรียกคืนได้
                                <br>2.รับอุปกรณ์ที่สั่งจอง(ย้อนหลัง)ได้ที่ร้านค้าสวัสดิการ</h4></td>
                        </tr> 
                </table>
            </td>
            <td style="width:2%;">
            </td>
            <td style="width:49%;">
                <table>
                    <tr>
                        <td style="width:80%;"></td>
                        <td style="width:10%; text-align: center;"><h2><?php echo $student_id; ?></h2></td>
                        <td style="width:10%;background-color:#D7D7D7;border: 1px solid black; text-align: center;"><h2>D</h2></td>
                    </tr>
                    <tr>
                        <td style="width:20%;"><img src="../img/logo_htc.jpg" alt="../img/logo_htc.jpg" style=" top: 0; width: 70px; height: 70px;"></td>
                        <td style=" width:60%; text-align: center;">
                        <h2>ร้านค้าสวัสดิการวิทยาลัยเทคนิคหาดใหญ่
                            <br>ปีการศึกษา 2567&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; โทร. 083-897-8671 (ผู้จัดการ)
                        </h2>
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td style=" width:101%; border: 1px solid black; text-align: center;"><h2>รายการจองอุปกรณ์การเรียนของนักศึกษา ปวส. <u>เฉพาะ</u> ปิโตรเลียม</h2></td>
                    </tr> 
                    <br>
                    <tr>
                        <td style=" width:11%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2>ชื่อ-สกุล</h2></td>
                        <td style=" width:33%; border: 1px solid black;"><h3>&nbsp;&nbsp;<?php
                            echo $t_name;
                            echo $f_name . '&nbsp;' . $l_name;
                            ?></h3>
                        </td>
                        <td style=" width:12%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2>เเผนก</h2></td>
                        <td style=" width:45%; border: 1px solid black;"><h3>&nbsp;&nbsp;<?php
                            echo $branch_name;
                            ?></h3>
                        </td>
                    </tr>                    
                    <tr>
                        <td style=" width:11%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2>โทรศัพท์</h2></td>
                        <td style=" width:33%; border: 1px solid black;"><h3>&nbsp;&nbsp;<?php
                            echo $tel;
                            ?></h3>
                        </td>
                        <td style=" width:12%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2>วันที่</h2></td>
                        <td style=" width:45%; border: 1px solid black;"><h3>&nbsp;&nbsp;<?php
                            echo $date;
                            ?></h3>
                        </td>
                    </tr>    
                    <tr>
                        <td style=" width:11%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2>ลำดับ</h2></td>
                        <td style=" width:45%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2>รายการ</h2></td>
                        <td style=" width:8%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2>ขนาด</h2></td>
                        <td style=" width:15%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2>ราคา/หน่วย</h2></td>
                        <td style=" width:9%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2>จำนวน</h2></td>
                        <td style=" width:13%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2>จำนวนเงิน</h2></td>
                    </tr> 
                    <?php if (isset($_GET['a'])) {
                    $n = 0;
                    $sum = 0; 
                        if (isset($list_size1)) {$n += 1; ?>
                            <tr>
                            <td style=" width:11%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2><?php echo $n; ?></h2></td>
                            <td style=" width:45%; border: 1px solid black; "><h2> เสื้อฝึกงาน (เสื้อช็อป)</h2></td>
                            <td style=" width:8%; border: 1px solid black; text-align: center; "><h2><?php echo $list_size1; ?></h2></td>
                            <td style=" width:15%; border: 1px solid black; text-align: center;"><h2><?php echo $list_price1; ?></h2></td>
                            <td style=" width:9%; border: 1px solid black; text-align: center; "><h2><?php echo $count1; ?></h2></td>
                            <td style=" width:13%; border: 1px solid black; text-align: center;"><h2><?php echo $_1 = $count1 * $list_price1;
                                    $sum += $_1; ?></h2></td>

                            </tr>
                        <?php }?>    
                        <?php 
                        if (isset($list_size2)) {$n += 1; ?>
                            <tr>
                            <td style=" width:11%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2><?php echo $n; ?></h2></td>
                            <td style=" width:45%; border: 1px solid black; "><h2> เสื้อยืดฝึกฝีมือ (คอกลม)</h2></td>
                            <td style=" width:8%; border: 1px solid black; text-align: center; "><h2><?php echo $list_size2; ?></h2></td>
                            <td style=" width:15%; border: 1px solid black; text-align: center;"><h2><?php echo $list_price2; ?></h2></td>
                            <td style=" width:9%; border: 1px solid black; text-align: center; "><h2><?php echo $count2; ?></h2></td>
                            <td style=" width:13%; border: 1px solid black; text-align: center;"><h2><?php echo $_2 = $count2 * $list_price2;
                                    $sum += $_2; ?></h2></td>

                            </tr>
                        <?php }?>    
                        <?php 
                        if (isset($list_size3)) {$n += 1; ?>
                            <tr>
                            <td style=" width:11%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2><?php echo $n; ?></h2></td>
                            <td style=" width:45%; border: 1px solid black; "><h2> เสื้อพละ</h2></td>
                            <td style=" width:8%; border: 1px solid black; text-align: center; "><h2><?php echo $list_size3; ?></h2></td>
                            <td style=" width:15%; border: 1px solid black; text-align: center;"><h2><?php echo $list_price3; ?></h2></td>
                            <td style=" width:9%; border: 1px solid black; text-align: center; "><h2><?php echo $count3; ?></h2></td>
                            <td style=" width:13%; border: 1px solid black; text-align: center;"><h2><?php echo $_3 = $count3 * $list_price3;
                                    $sum += $_3; ?></h2></td>

                            </tr>
                        <?php }?>    
                        <?php 
                        if (isset($list_size4)) {$n += 1; ?>
                            <tr>
                            <td style=" width:11%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2><?php echo $n; ?></h2></td>
                            <td style=" width:45%; border: 1px solid black; "><h2> กางเกงพละ</h2></td>
                            <td style=" width:8%; border: 1px solid black; text-align: center; "><h2><?php echo $list_size4; ?></h2></td>
                            <td style=" width:15%; border: 1px solid black; text-align: center;"><h2><?php echo $list_price4; ?></h2></td>
                            <td style=" width:9%; border: 1px solid black; text-align: center; "><h2><?php echo $count4; ?></h2></td>
                            <td style=" width:13%; border: 1px solid black; text-align: center;"><h2><?php echo $_4 = $count4 * $list_price4;
                                    $sum += $_4; ?></h2></td>

                            </tr>
                        <?php }?>    
                        <?php 
                        if (isset($list_size5)) {$n += 1; ?>
                            <tr>
                            <td style=" width:11%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2><?php echo $n; ?></h2></td>
                            <td style=" width:45%; border: 1px solid black; "><h2> เข็มขัดและหัวเข็มขัด</h2></td>
                            <td style=" width:8%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2></h2></td>
                            <td style=" width:15%; border: 1px solid black; text-align: center;"><h2><?php echo $list_price5; ?></h2></td>
                            <td style=" width:9%; border: 1px solid black; text-align: center; "><h2><?php echo $count5; ?></h2></td>
                            <td style=" width:13%; border: 1px solid black; text-align: center;"><h2><?php echo $_5 = $count5 * $list_price5;
                                    $sum += $_5; ?></h2></td>

                            </tr>
                        <?php }?>    
                        <?php 
                        if (isset($list_size6)) {$n += 1; ?>
                            <tr>
                            <td style=" width:11%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2><?php echo $n; ?></h2></td>
                            <td style=" width:45%; border: 1px solid black; "><h2> เน็คไทและเข็ม</h2></td>
                            <td style=" width:8%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2></h2></td>
                            <td style=" width:15%; border: 1px solid black; text-align: center;"><h2><?php echo $list_price6; ?></h2></td>
                            <td style=" width:9%; border: 1px solid black; text-align: center; "><h2><?php echo $count6; ?></h2></td>
                            <td style=" width:13%; border: 1px solid black; text-align: center;"><h2><?php echo $_6 = $count6 * $list_price6;
                                    $sum += $_6; ?></h2></td>

                            </tr>
                        <?php }?>    
                        <?php 
                        if (isset($list_size7)) {$n += 1; ?>
                            <tr>
                            <td style=" width:11%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2><?php echo $n; ?></h2></td>
                            <td style=" width:45%; border: 1px solid black; "><h2> กระเป๋าเป้วิทยาลัยเทคนิคหาดใหญ่</h2></td>
                            <td style=" width:8%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2></h2></td>
                            <td style=" width:15%; border: 1px solid black; text-align: center;"><h2><?php echo $list_price7; ?></h2></td>
                            <td style=" width:9%; border: 1px solid black; text-align: center; "><h2><?php echo $count7; ?></h2></td>
                            <td style=" width:13%; border: 1px solid black; text-align: center;"><h2><?php echo $_7 = $count7 * $list_price7;
                                    $sum += $_7; ?></h2></td>

                            </tr>
                        <?php }?>    
                        <?php 
                        if (isset($list_size8)) {$n += 1; ?>
                            <tr>
                            <td style=" width:11%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2><?php echo $n; ?></h2></td>
                            <td style=" width:45%; border: 1px solid black; "><h2> สมุดตราวิทยาลัยเทคนิคหาดใหญ่ (1โหล)</h2></td>
                            <td style=" width:8%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2></h2></td>
                            <td style=" width:15%; border: 1px solid black; text-align: center;"><h2><?php echo $list_price8; ?></h2></td>
                            <td style=" width:9%; border: 1px solid black; text-align: center; "><h2><?php echo $count8; ?></h2></td>
                            <td style=" width:13%; border: 1px solid black; text-align: center;"><h2><?php echo $_8 = $count8 * $list_price8;
                                    $sum += $_8; ?></h2></td>

                            </tr>
                        <?php }?>    
                        <?php 
                        if (isset($list_size9)) {$n += 1; ?>
                            <tr>
                                <td style=" width:11%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2><?php echo $n; ?></h2></td>
                                <td style=" width:45%; border: 1px solid black; "><h2><?php if ($t_name == "นางสาว" or $t_name == "นาง" or $t_name == "เด็กหญิง") { ?> เสื้อนักเรียนสีขาว แขนยาว(หญิง)
                                    <?php } else { ?> เสื้อนักเรียนสีขาว แขนยาว(ชาย)
                                <?php } ?>
                                <?php ?></h2></td>
                                <td style=" width:8%; border: 1px solid black; text-align: center;"><h2><?php echo $list_size9; ?></h2></td>
                            <td style=" width:15%; border: 1px solid black; text-align: center;"><h2><?php echo $list_price9; ?></h2></td>
                            <td style=" width:9%; border: 1px solid black; text-align: center; "><h2><?php echo $count9; ?></h2></td>
                            <td style=" width:13%; border: 1px solid black; text-align: center;"><h2><?php echo $_9 = $count9 * $list_price9;
                                    $sum += $_9; ?></h2></td>

                            </tr>
                        <?php }?>    
                        <?php 
                        if (isset($list_size10)) {$n += 1; ?>
                            <tr>
                            <td style=" width:11%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2><?php echo $n; ?></h2></td>
                            <td style=" width:45%; border: 1px solid black; "><h2> กางเกงขายาว สีกรม (เอว)</h2></td>
                            <td style=" width:8%; border: 1px solid black; text-align: center;"><h2><?php echo $list_size10; ?></h2></td>
                            <td style=" width:15%; border: 1px solid black; text-align: center;"><h2><?php echo $list_price10; ?></h2></td>
                            <td style=" width:9%; border: 1px solid black; text-align: center; "><h2><?php echo $count10; ?></h2></td>
                            <td style=" width:13%; border: 1px solid black; text-align: center;"><h2><?php echo $_10 = $count10 * $list_price10;
                                    $sum += $_10; ?></h2></td>

                            </tr>
                        <?php }?>    
                        <?php 
                        if (isset($list_size11)) {$n += 1; ?>
                            <tr>
                            <td style=" width:11%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2><?php echo $n; ?></h2></td>
                            <td style=" width:45%; border: 1px solid black; "><h2> รองเท้าผ้าใบสีดำ (เบอร์)</h2></td>
                            <td style=" width:8%; border: 1px solid black; text-align: center;"><h2><?php echo $list_size11; ?></h2></td>
                            <td style=" width:15%; border: 1px solid black; text-align: center;"><h2><?php echo $list_price11; ?></h2></td>
                            <td style=" width:9%; border: 1px solid black; text-align: center; "><h2><?php echo $count11; ?></h2></td>
                            <td style=" width:13%; border: 1px solid black; text-align: center;"><h2><?php echo $_11 = $count11 * $list_price11;
                                    $sum += $_11; ?></h2></td>

                            </tr>
                        <?php }?>    
                        <?php 
                        if (isset($list_size12)) {$n += 1; ?>
                            <tr>
                            <td style=" width:11%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2><?php echo $n; ?></h2></td>
                            <td style=" width:45%; border: 1px solid black; "><h2> ถุงเท้า (5 คู่)</h2></td>
                            <td style=" width:8%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2></h2></td>
                            <td style=" width:15%; border: 1px solid black; text-align: center;"><h2><?php echo $list_price12; ?></h2></td>
                            <td style=" width:9%; border: 1px solid black; text-align: center; "><h2><?php echo $count12; ?></h2></td>
                            <td style=" width:13%; border: 1px solid black; text-align: center;"><h2><?php echo $_12 = $count12 * $list_price12;
                                    $sum += $_12; ?></h2></td>

                            </tr>
                        <?php }?>    
                        <?php 
                        if (isset($list_size13)) {$n += 1; ?>
                            <tr>
                            <td style=" width:11%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2><?php echo $n; ?></h2></td>
                            <td style=" width:45%; border: 1px solid black; "><h2> ตะไบ</h2></td>
                            <td style=" width:8%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2></h2></td>
                            <td style=" width:15%; border: 1px solid black; text-align: center;"><h2><?php echo $list_price13; ?></h2></td>
                            <td style=" width:9%; border: 1px solid black; text-align: center; "><h2><?php echo $count13; ?></h2></td>
                            <td style=" width:13%; border: 1px solid black; text-align: center;"><h2><?php echo $_13 = $count13 * $list_price13;
                                    $sum += $_13; ?></h2></td>

                            </tr>
                        <?php }?>    
                        <?php 
                        if (isset($sizef)) {$n += 1; ?>
                            <tr>
                            <td style=" width:11%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2><?php echo $n; ?></h2></td>
                            <td style=" width:45%; border: 1px solid black; "><h2> กระโปรง สีกรม เอว</h2></td>
                            <td style=" width:8%; border: 1px solid black; text-align: center; "><h2><?php echo $list_sizef; ?></h2></td>
                            <td style=" width:15%; border: 1px solid black; text-align: center;"><h2><?php echo $list_pricef; ?></h2></td>
                            <td style=" width:9%; border: 1px solid black; text-align: center; "><h2><?php echo $countf; ?></h2></td>
                            <td style=" width:13%; border: 1px solid black; text-align: center;"><h2><?php echo $_f = $countf * $list_pricef;
                                    $sum += $_f; ?></h2></td>

                            </tr>
                        <?php }?>  
                        <tr>
                            <td style=" width:88%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2>รวม</h2></td>
                            <td style=" width:13%; border: 1px solid black; text-align: center; background-color:#D7D7D7;"><h2><?php echo $sum; ?></h2></td>
                        </tr>  
                        <?php }?>  
                        <br>
                        <tr>
                            <td style=" width:101%; text-align: center; "><h2>ผู้รับเงิน ......................................................</h2></td>
                        </tr> 
                        <tr>
                            <td style=" width:101%; "><h4>หมายเหตุ
                                <br>1.เมื่อชำระเงินเเล้วไม่สามารถเรียกคืนได้
                                <br>2.รับอุปกรณ์ที่สั่งจอง(ย้อนหลัง)ได้ที่ร้านค้าสวัสดิการ</h4>
                            </td>
                        </tr> 
                </table>
            </td>
        </tr>
    </table>
    <!-- <table style="width:100%; height:100%;">
        <tr>
            <td style="width:49%">

                <table style="width:100%; height:100%;">
                    <tr>
                        <td style="width:80%">
                            <img src="../img/logo_htc.jpg" alt="../img/logo_htc.jpg" style=" top: 0; width: 75px; height: 75px;">
                        </td>
                        <td style="width:10%;">
                            <h2><?php echo $student_id; ?></h2>
                        </td>
                        <td style="width:10%; ">
                            <h2 style="background-color:#D7D7D7;">&nbsp;<b>B</b></h2>
                        </td>
                    </tr>
                </table>
                <table style="width:90%; height:100%;">
                    <tr>
                        <th style="width:10%; background-color:#D7D7D7;border: 1px solid black;">ชื่อ-สกุล</th>
                        <td style="width:40%; border: 1px solid black;">
                            <?php

                            echo $t_name;
                            echo $f_name . '&nbsp;' . $l_name;
                            ?>
                        </td>
                        <th style="width:10%; background-color:#D7D7D7; border: 1px solid black;">เเผนก</th>
                        <td style="width:40%; border: 1px solid black;">
                            <?php
                            echo $branch_name;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th style="width:10%; background-color:#D7D7D7;border: 1px solid black;">โทรศัพท์</th>
                        <td style="width:40%; border: 1px solid black;">
                            <?php
                            echo $tel
                            ?>
                        </td>
                        <th style="width:10%; background-color:#D7D7D7;border: 1px solid black;">วันที่</th>
                        <td style="width:40%; border: 1px solid black;">
                            <?php
                            echo $date;
                            ?>
                        </td>
                    </tr>
                <?php if (isset($_GET['a'])) {
                    $n = 0;
                    $sum = 0; ?>
                        <tr style=" background-color:#D7D7D7;">
                            <th style="width:10%; border: 1px solid black;">ลำดับ</th>
                            <th style="width:40%; border: 1px solid black;">รายการ</th>
                            <th style="width:10%; border: 1px solid black;">ขนาด</th>
                            <th style="width:15%; border: 1px solid black;">ราคา/หน่วย</th>
                            <th style="width:10%; border: 1px solid black;">จำนวน</th>
                            <th style="width:10%; border: 1px solid black;">ราคา</th>
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
                                <td style="background-color:#D7D7D7;"></td>
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
                                <td style="background-color:#D7D7D7;"></td>
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
                                <td style="background-color:#D7D7D7;"></td>
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
                                <td style="background-color:#D7D7D7;"></td>
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
                                    <td>เสื้อนักเรียนสีขาว แขนสั้น(หญิง)</td>
                                <?php } else { ?>
                                    <td>เสื้อนักเรียนสีขาว แขนสั้น(ชาย)</td>
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
                                <td>กางเกงขายาว สีกรม (เอว)</td>
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
                                <td style="background-color:#D7D7D7;"></td>
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
                                <td style="background-color:#D7D7D7;"></td>
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
                                <td><?php echo $listf ?></td>
                                <td class="table-active"></td>
                                <td>280</td>
                                <td><?php echo $countf ?></td>
                                <td><?php echo $_f = $countf * $list_pricef;
                                    $sum += $_f; ?></td>
                            </tr>
                        <?php } ?>
                        <tr style=" background-color:#D7D7D7;">
                            <td colspan="3"></td>
                            <td colspan="2" class="table-active">รวม</td>
                            <td class="table-active"><?php echo $sum; ?></td>
                        </tr>
                    </table>
                <?php  } ?>
            </td>
            <td style="width:2%">
            </td>
            <td style="width:49%">
                <table>
                    <tr>
                        <td style="width:80%">
                        </td>
                        <td style="width:10%">
                            <h2><?php echo $student_id; ?></h2>
                        </td>
                        <td style="width:10%; ">
                            <h2 style="background-color:#D7D7D7; ">&nbsp;<center><b>B</b></center>
                            </h2>
                        </td>
                    </tr>
                </table>
                <table style="width:100%">
                    <tr>
                        <th style="width:10%; background-color:#D7D7D7;">ชื่อ-สกุล</th>
                        <td style="width:40%">
                            <?php

                            echo $t_name;
                            echo $f_name . '&nbsp;' . $l_name;
                            ?>
                        </td>
                        <th style="width:10%; background-color:#D7D7D7;">เเผนก</th>
                        <td style="width:40%">
                            <?php
                            echo $branch_name;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th style="width:10%; background-color:#D7D7D7;">โทรศัพท์</th>
                        <td style="width:40%">
                            <?php
                            echo $tel
                            ?>
                        </td>
                        <th style="width:10%; background-color:#D7D7D7;">วันที่</th>
                        <td>
                            <?php
                            echo $date;
                            ?>
                        </td>
                    </tr>
                </table>
                <?php if (isset($_GET['a'])) {
                    $n = 0;
                    $sum = 0; ?>
                    <table style="border-color: #000000">
                        <tr style="background-color:#D7D7D7;">
                            <th style="width:10%">ลำดับ</th>
                            <th style="width:40%">รายการ</th>
                            <th style="width:10%">ขนาด</th>
                            <th style="width:15%">ราคา/หน่วย</th>
                            <th style="width:10%">จำนวน</th>
                            <th style="width:10%">ราคา</th>
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
                                <td style="background-color:#D7D7D7;"></td>
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
                                <td style="background-color:#D7D7D7;"></td>
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
                                <td style="background-color:#D7D7D7;"></td>
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
                                <td style="background-color:#D7D7D7;"></td>
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
                                    <td>เสื้อนักเรียนสีขาว แขนสั้น(หญิง)</td>
                                <?php } else { ?>
                                    <td>เสื้อนักเรียนสีขาว แขนสั้น(ชาย)</td>
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
                                <td>กางเกงขายาว สีกรม (เอว)</td>
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
                                <td style="background-color:#D7D7D7;"></td>
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
                                <td style="background-color:#D7D7D7;"></td>
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
                                <td><?php echo $listf ?></td>
                                <td class="table-active"></td>
                                <td>280</td>
                                <td><?php echo $countf ?></td>
                                <td><?php echo $_f = $countf * $list_pricef;
                                    $sum += $_f; ?></td>
                            </tr>
                        <?php } ?>
                        <tr style=" background-color:#D7D7D7;">
                            <td colspan="3"></td>
                            <td colspan="2" class="table-active">รวม</td>
                            <td class="table-active"><?php echo $sum; ?></td>
                        </tr>
                    </table>
                <?php  } ?>
            </td>
        </tr>
    </table> -->
