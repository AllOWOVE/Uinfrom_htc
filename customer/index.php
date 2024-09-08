<?php
include '../config/config.php';

?>
<title>ระบบจองอุปกรณ์</title>
<?php include "../menu/menu.php"; ?>
<div class="content">
    <div class="card mt-3">
        <div class=card-body>
            <div class="container-sm">
                <h1 class="mt-3"><i class="fas fa-edit "></i>กรอกข้อมูลจองอุปกรณ์ของนักเรียน
                    นักศึกษา</h1><br>
                <h5 class="mt-3">เลือกระดับชั้น :</h5>
                <hr style="width:100%">
                <!-- <div class="card-header" style="background-color: #161416; color:beige;">
                    <div class="row align-items-start">
                        <div class="col">
                            <h4 class="text-center font-weight-light my-2">กรอกข้อมูลจองอุปกรณ์ของนักเรียน
                                นักศึกษา
                            </h4>
                        </div>
                    </div>
                </div> -->
                <form method="post" action="../book-print/validation.php">
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="row">
                                <div class=" col-sm-6">
                                    <div class="card  mt-4 shadow" style="height: 100%;">
                                        <div class="card-header shadow" style="background-color: #EC6EE4;"></div>
                                        <div class="card-body text-center">
                                            <label class="text-center mt-4">จองอุปกรณ์การเรียนนักเรียนนักศึกษาระดับชั้น ปวช.</label>
                                            <a class="small text-white stretched-link" href="customer.php?add=voc"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card  mt-4 shadow" style="height: 100%; ">
                                        <div class="card-header shadow" style="background-color: #F9BF30;"></div>
                                        <div class="card-body text-center">
                                            <label class="text-center mt-4">จองอุปกรณ์การเรียนนักเรียนนักศึกษาระดับชั้น ปวส.</label>
                                            <a class="small text-white stretched-link" href="customer.php?add=hvoc"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <br>
        <br>
        <br>
    </div>
    <div class="row mt-1">
        <div class=" col-sm-12">
            <div class="card  mt-1 px-5">
                <img src="../img/guide (3).png" alt="../img/guide (3).png" style=" top: 0; width: 90%;">
            </div>
        </div>
    </div>
</div>
</body>

</html>