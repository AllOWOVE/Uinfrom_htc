<?php
include '../config/config.php';
session_start();
if (isset($_GET['number'])) {

    $add = $_GET['number'];
    $check_query = "SELECT * FROM $add";
    $result = mysqli_query($conn, $check_query);
}
?>
<title>ระบบจองอุปกรณ์</title>
<?php include "../menu/menu.php"; ?>
<br>
<div class="content">
    <div class="card">
        <div class="card-body row align-items-start">
            <div class="col">
                <h4 class="em"><a class="btn btn-success ">2</a> รายการจองอุปกรณ์การเรียนของนักศึกษา
                    <hr>
                </h4>
                <form action="check_insert_order.php?d=<?php echo $add ?>&t_name=<?php echo $_GET['name'] ?>" method="post">
                    <div class="card card-body" style="background-color: #f4f4f4;">
                        <div class="container-lg">
                            <div class="row align-items-start">
                                <div class="col text-center p-1">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                        ตัวอย่าง Size
                                    </button>
                                </div>
                                <h1 class="col-auto text-end"><a class="btn  ">ใบจอง</a>D</h1>
                                <!-- The Modal -->
                                <div class="modal fade" id="myModal">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Size</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <img src="../img/size.jpg" class="img-fluid" alt="Size">
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <div class="container-lg">

                                <!--date------------------------------------------------------------------------------>

                                <div class="row g-3 em">
                                    <div class="col-sm-1 text-end"></div>
                                    <div class="col-auto text-end">
                                        <label>วันที่ :</label>
                                    </div>
                                    <div class="col-auto">
                                        <script language="javascript" name="date" id="dateForm">
                                            now = new Date();
                                            var thday = new Array("อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัส", "ศุกร์", "เสาร์");
                                            var thmonth = new Array("มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน",
                                                "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
                                            var thaiDate = "วัน" + thday[now.getDay()] + " ที่ " + now.getDate() + " " +
                                                thmonth[now.getMonth()] + " " + (0 + now.getYear() + 2443);

                                            // Create a hidden input field to store the Thai date
                                            var hiddenInput = document.createElement("input");
                                            hiddenInput.type = "hidden";
                                            hiddenInput.name = "thaiDate";
                                            hiddenInput.value = thaiDate;

                                            // Append the hidden input to the form
                                            document.getElementById("dateForm").appendChild(hiddenInput);

                                            // Output the Thai date
                                            document.write(thaiDate);
                                        </script>
                                        </span>
                                    </div>
                                </div>
                                <?php if (isset($_SESSION['error1'])) { ?>
                                    <div class="row g-3 mt-2  text-center">
                                        <label style="color:brown">
                                            <?php echo $_SESSION['error1'];
                                            unset($_SESSION['error1']);
                                            ?>
                                        </label>
                                    </div>
                                <?php } ?>

                                <!--1----------------------------------------------------------->

                                <div class="row g-3 mt-2">
                                    <div class="col-sm-1 ">
                                    </div>
                                    <div class="col-auto text-end">
                                        <pre>           <label style="color:brown">* </label>1.เข็มขัดและหัวเข็มขัด :</pre>
                                    </div>
                                    <div class="col-auto">
                                        <!--<input type="text" class="form-control"
                                                                                    placeholder="ขนาด" required>-->
                                        <slabel>170 บาท/หน่วย</slabel>
                                    </div>
                                    <div class="col-auto">
                                        <label>จำนวน</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" class="form-control" placeholder="จำนวน" value="1" readonly>
                                    </div>
                                    <div class="col-auto">
                                        <label>เส้น</label>
                                    </div>
                                </div>

                                <!--3----------------------------------------------------------->

                                <div class="row g-3 mt-2">
                                    <div class="col-sm-1 ">
                                    </div>
                                    <div class="col-auto text-end">
                                        <pre>               <label style="color:brown">* </label>2.เน็คไทและเข็ม :</pre>
                                    </div>
                                    <div class="col-auto">
                                        <!--<input type="text" class="form-control"
                                                                                        placeholder="ขนาด" required>-->
                                        <label>150 บาท/หน่วย</label>
                                    </div>
                                    <div class="col-auto">
                                        <label>จำนวน</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" class="form-control" placeholder="จำนวน" value="1" readonly>
                                    </div>
                                    <div class="col-auto">
                                        <label>เส้น</label>
                                    </div>
                                </div>

                                <!--4----------------------------------------------------------->

                                <div class="row g-3 mt-2">
                                    <div class="col-sm-1 ">
                                    </div>
                                    <div class="col-auto text-end">
                                        <pre><label style="color:brown">* </label>3.กระเป๋าเป้วิทยาลัยเทคนิคหาดใหญ่ :</pre>
                                    </div>
                                    <div class="col-auto">
                                        <!--<input type="text" class="form-control"
                                                                                    placeholder="ขนาด" required>-->
                                        <label>290 บาท/หน่วย</label>
                                    </div>
                                    <div class="col-auto">
                                        <label>จำนวน</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" class="form-control" placeholder="จำนวน" value="1" readonly>
                                    </div>
                                    <div class="col-auto">
                                        <label>ใบ</label>
                                    </div>
                                </div>

                                <!--5----------------------------------------------------------->

                                <div class="row g-3 mt-2">
                                    <div class="col-sm-1 ">
                                    </div>
                                    <div class="col-auto text-end">
                                        <pre> <label style="color:brown">* </label>4.สมุดตราวิทยาลัยเทคนิคหาดใหญ่ :</pre>
                                    </div>
                                    <div class="col-auto">
                                        <!--<input type="text" class="form-control"
                                                                                    placeholder="ขนาด" required>-->
                                        <label>115 บาท/หน่วย</label>
                                    </div>
                                    <div class="col-auto">
                                        <label>จำนวน</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" class="form-control" placeholder="จำนวน" value="1" readonly>
                                    </div>
                                    <div class="col-auto">
                                        <label>โหล</label>
                                    </div>
                                </div>

                                <!--6----------------------------------------------------------->

                                <div class="row g-3 mt-2">
                                    <div class="col-sm-1 ">
                                    </div>
                                    <div class="col-auto text-end">
                                        <pre>         5.เสื้อนักเรียนสีขาวแขนยาว :</pre>
                                    </div>
                                    <div class="col-auto">
                                        <select class="form-select" id="size09" name="size09">
                                            <option value="0">ขนาด</option>
                                            <option value="9001">SS</option>
                                            <option value="9002">S</option>
                                            <option value="9003">M</option>
                                            <option value="9004">L</option>
                                            <option value="9005">XL</option>
                                            <option value="9006">2XL</option>
                                            <option value="9007">3XL</option>
                                            <option value="9008">4XL</option>
                                            <option value="9009">5XL</option>
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        <label>200 บาท/หน่วย</label>
                                    </div>
                                    <div class="col-auto">
                                        <select class="form-select" id="count09" name="count09">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        <label>ตัว</label>
                                        <!--<input type="text" class="form-control"
                                                                                    placeholder="ขนาด" required>
                                                                                    <input type="text" class="form-control"
                                                                                    placeholder="จำนวน" required>-->
                                    </div>
                                </div>

                                <!--7---------------------------------------------------------->

                                <div class="row g-3 mt-2">
                                    <div class="col-sm-1 ">
                                    </div>
                                    <div class="col-auto text-end">
                                        <pre>        6.กางเกงขายาว สีดำ เอว :</pre>
                                    </div>
                                    <div class="col-auto">
                                        <select class="form-select" id="size10" name="size10">
                                            <option selected>ขนาด</option>
                                            <option value="15001">SS</option>
                                            <option value="15002">S</option>
                                            <option value="15003">M</option>
                                            <option value="15004">L</option>
                                            <option value="15005">XL</option>
                                            <option value="15006">2XL</option>
                                            <option value="15007">3XL</option>
                                            <option value="15008">4XL</option>
                                            <option value="15009">5XL</option>
                                            <option value="15010">6XL</option>
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        <slabel>370 บาท/หน่วย</slabel>
                                    </div>
                                    <div class="col-auto">
                                        <select class="form-select" id="count10" name="count10">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        <label">ตัว</span>
                                            <!--<input type="text" class="form-control"
                                                                                    placeholder="ขนาด" required>
                                                                                    <input type="text" class="form-control"
                                                                                    placeholder="จำนวน" required>-->
                                    </div>
                                </div>

                                <!--8---------------------------------------------------------->

                                <div class="row g-3 mt-2">
                                    <div class="col-sm-1 ">
                                    </div>
                                    <div class="col-auto text-end">
                                        <pre>          7.รองเท้าผ้าใบสีดำ เบอร์ :</pre>
                                    </div>
                                    <div class="col-auto">
                                        <!--<input type="text" class="form-control"
                                                                                    placeholder="ขนาด" required>
                                                                                    <input type="text" class="form-control"
                                                                                    placeholder="จำนวน" required>-->
                                        <select class="form-select" id="size11" name="size11">
                                            <option selected>ขนาด</option>
                                            <option value="11001">36</option>
                                            <option value="11002">37</option>
                                            <option value="11003">38</option>
                                            <option value="11004">39</option>
                                            <option value="11005">40</option>
                                            <option value="11006">41</option>
                                            <option value="11007">42</option>
                                            <option value="11008">43</option>
                                            <option value="11008">44</option>
                                            <option value="11009">45</option>
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        <!--<input type="text" class="form-control"
                                                                                    placeholder="จำนวน" value="1" readonly>-->
                                        <label>350 บาท/หน่วย</label>
                                    </div>
                                    <div class="col-auto">
                                        <select class="form-select" id="count11" name="count11">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        <label>คู่</label>
                                    </div>
                                </div>

                                <!--9---------------------------------------------------------->

                                <div class="row g-3 mt-2">
                                    <div class="col-sm-1 ">
                                    </div>
                                    <div class="col-auto text-end">
                                        <pre>                  8.ถุงเท้า(5คู่) :</pre>
                                    </div>
                                    <div class="col-auto text-end">
                                        <!--<input type="text" class="form-control"
                                                                                    placeholder="ขนาด" required>-->
                                        <!--<input type="text" class="form-control"
                                                                                placeholder="จำนวน" value="1" readonly>-->
                                        <label>100 บาท/หน่วย</label>
                                    </div>
                                    <div class="col-auto">
                                        <label>จำนวน</label>
                                    </div>
                                    <div class="col-auto">
                                        <select class="form-select" id="count12" name="count12">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        <label>ชุด</label>
                                    </div>
                                </div>

                                <!-- ถ้าเป็นผู้หญิง -->
                                <?php if ($_GET['name'] == 'นาง' || $_GET['name'] == 'นางสาว' || $_GET['name'] == 'เด็กหญิง') {
                                ?>
                                    <div class="row g-3 mt-2">
                                        <div class="col-sm-1 ">
                                        </div>
                                        <div class="col-auto text-end">
                                            <pre>           14.กระโปรง สีดำ เอว :</pre>
                                        </div>
                                        <div class="col-auto">
                                            <select class="form-select" id="sizef" name="sizef">
                                                <option selected>ขนาด</option>
                                                <option value="14001">SS</option>
                                                <option value="14002">S</option>
                                                <option value="14003">M</option>
                                                <option value="14004">L</option>
                                                <option value="14005">XL</option>
                                                <option value="14006">2XL</option>
                                                <option value="14007">3XL</option>
                                            </select>
                                        </div>
                                        <div class="col-auto">
                                            <slabel>370 บาท/หน่วย</slabel>
                                        </div>
                                        <div class="col-auto">
                                            <select class="form-select" id="countf" name="countf">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="col-auto">
                                            <label">ตัว</span>
                                                <!--<input type="text" class="form-control"
                                                                                    placeholder="ขนาด" required>
                                                                                    <input type="text" class="form-control"
                                                                                    placeholder="จำนวน" required>-->
                                        </div>
                                    </div>

                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-success mt-5" name="number" value="<?php echo $add ?>" onclick="return confirm('คุณต้องการบันทึกการจองเลยหรือไม่')">ถัดไป</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>

</html>