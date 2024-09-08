<?php
include '../config/config.php';
session_start();
if (isset($_GET['add'])) {

    $add = $_GET['add'];
    switch ($add) {
        case 'hvoc':
            $w = 'hvoc_id';
            $v = 'ปวส.';
            break;
        case 'voc':
            $v = 'ปวช.';
            $w = 'branch_id';
            break;
    }
    $check_query = "SELECT * FROM $add";
    $result = mysqli_query($conn, $check_query);
}
?>
<title>ระบบจองอุปกรณ์</title>
<?php include "../menu/menu.php"; ?>
<br>
<div class="content">
    <div class="card">
    <div class="card-body">
        
    </div>
    </div>
    <div class="card">
        <div class="card-body row align-items-start">
            <div class="col">
                <h4 class="mt-1"><a class="btn btn-success ">1</a> ข้อมูลทั่วไป
                    <hr>
                </h4>
                <form action="checkto.php" method="get">
                    <div class="card card-body" style="background-color: #f4f4f4;">
                        <div class="container-lg">
                            <div class="row g-3 mt-2">
                                <div class="col-sm-1 ">
                                </div>
                                <div class="col-auto text-end">
                                    <pre>     <label style="color:brown">* </label> ชื่อ-นามสกุล :</pre>
                                </div>
                                <div class="col-auto">
                                    <select class="form-select " id="t_name" name="t_name">
                                        <option>นาย</option>
                                        <option>นางสาว</option>
                                        <option>เด็กชาย</option>
                                        <option>เด็กหญิง</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" id="f_name" name="f_name" class="form-control" placeholder="ชื่อ" required>
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" id="l_name" name="l_name" class="form-control" placeholder="นามสกุล" required>
                                </div>
                            </div>

                            <div class="row g-3 mt-2">
                                <div class="col-sm-1 ">
                                </div>
                                <div class="col-auto text-end">
                                    <pre>        <label style="color:brown">* </label> ระดับชั้น :</pre>
                                </div>
                                <div class="col-auto">
                                    <input class="form-control" name="level" placeholder="<?php echo $v ?>" value='<?php echo $v ?>' readonly>
                                </div>
                            </div>

                            <div class="row g-3 mt-2">
                                <div class="col-sm-1 ">
                                </div>
                                <div class="col-auto text-end">
                                    <pre>    <label style="color:brown">* </label> เลขสมัครสอบ :</pre>
                                </div>
                                <div class="col-auto">
                                    <input type="text" class="form-control" name="number" placeholder="เลขสมัครสอบ" pattern="[0-9]{4}" title="กรุณาให้รหัสสอบ 4 ตัวเลข" required>
                                </div>
                                <div class="col-auto">
                                    <?php if (isset($_SESSION['error1'])) { ?>
                                        <div class="row g-3 em text-center">
                                            <label style="color:brown">*
                                                <?php echo $_SESSION['error1'];
                                                unset($_SESSION['error1']);
                                                ?>*
                                            </label>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="row g-3 mt-2">
                                <div class="col-sm-1 ">
                                </div>
                                <div class="col-auto text-end">
                                    <pre><label style="color:brown">* </label> สาขาวิชา/สาขางาน :</pre>
                                </div>
                                <div class="col-auto">

                                    <select class="form-select " name="dip">
                                        <?php while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                            <option value="<?php echo $row[$w] ?>"><?php echo $row['branch_name'] ?></option>

                                        <?php } ?>

                                    </select>
                                </div>
                                <div class="col-auto" style="color:brown">
                                    <?php if (isset($_SESSION['error'])) { ?>
                                        *<?php echo $_SESSION['error']; ?>*
                                    <?php unset($_SESSION['error']);
                                    } ?>
                                </div>
                            </div>

                            <div class="row g-3 mt-2">
                                <div class="col-sm-1 ">
                                </div>
                                <div class="col-auto text-end">
                                    <pre>    <label style="color:brown">* </label> เบอร์โทรศัพท์ :</pre>
                                </div>
                                <div class="col-auto">
                                    <input type="tel" class="form-control" name="tel" placeholder="เบอร์โทรศัพท์" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success mt-5" name="customer" value="<?php echo $add ?>">ถัดไป</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <br>
</div>
</body>

</html>