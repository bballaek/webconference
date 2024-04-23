<?php
include_once('./function.php');
$objCon = connectDB();


$c_id = (int) $_GET['c_id'];
$strSQL = "SELECT * FROM contact WHERE c_status = 1 AND c_id = $c_id";
$objQuery = mysqli_query($objCon, $strSQL);
$objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
if ($objResult == null) {
    echo '<script>alert("ไม่พบข้อมูล!!");window.location="index.php";</script>';
}

?>
<!doctype html>
<html lang="th" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>แก้ไขข้อมูล</title>
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./css/style.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <div class="container">
            <div class="bg-light p-4 rounded mt-5 text-center">
                <h2>Record student Activities</h2>
                <h2>สวัสดี <?php echo $objResult['c_prefix'], $objResult['c_firstname'], ' ', $objResult['c_lastname']; ?></td>
                <div class="mt-3">
                    <a href="php-member/index.php" class="btn btn-dark">Back</a>
            </div>
        </div>

        <body class="d-flex flex-column h-100">
            <main class="flex-shrink-0">
                <div class="container container-center" >
                


            <!-- ฟอร์มเพิ่มข้อมูล -->
            <form action="action_update.php" id="form_update" method="post" enctype="multipart/form-data">
                <div class="row">
                 
                    <div class="col-md-9">
                    <span class="border-0">
                        <div class="row mt-4">
                        
                            <!-- แถวที่ 1 -->
                            <div class="col-md-6" >
                            <label for="c_typereg" class="form-label" > ประเภทผู้ลงทะเบียน :</label>
                                <div style="border: 1px solid #ccc; padding: 5px; border-radius: 5px; margin-right: 10px;"><?php echo $objResult['c_typereg']; ?></div>
                            </div>

                            <div class="col-md-6 ">
                            <label for="c_typepre" class="form-label">ประเภทผลงานวิจัยที่นำเสนอ :</label>
                                <div style="border: 1px solid #ccc; padding: 5px; border-radius: 5px; margin-right: 10px;"><?php echo $objResult['c_typepre']; ?></div>
                            </div>

                            <!-- แถวที่ 2 -->
                            <div class="col-md-12 mt-3">
                                <label for="c_prefix" class="form-label">ชื่อ-นามสกุล :</label>
                                <div style="border: 1px solid #ccc; padding: 5px; border-radius: 5px; margin-right: 10px;"><?php echo $objResult['c_prefix'], $objResult['c_firstname'], '   ', $objResult['c_lastname']; ?></div>
                            </div>

                            <!-- แถวที่ 3 -->
                            <div class="col-md-4 mt-4">
                                <label for="c_belong" class="form-label">สังกัด:</label>
                                <div style="border: 1px solid #ccc; padding: 5px; border-radius: 5px; margin-right: 10px;"><?php echo $objResult['c_belong']; ?></div>
                            </div>

                            <div class="col-md-4 mt-4">
                                <label for="c_mobile" class="form-label">เบอร์โทรศัพท์</label>
                                <div style="border: 1px solid #ccc; padding: 5px; border-radius: 5px; margin-right: 10px;"><?php echo $objResult['c_mobile']; ?></div>
                            </div>

                            <div class="col-md-4 mt-4">
                                <label for="c_birthdate" class="form-label">วัน/เดือน/ปี</label>
                                <div style="border: 1px solid #ccc; padding: 5px; border-radius: 5px; margin-right: 10px;"><?php echo $objResult['c_birthdate']; ?></div>
                            </div>

                            <!-- แถวที่ 4 -->
                            <div class="col-md-12 mt-3">
                                <label for="c_title" class="form-label">ชื่อเรื่องบทความ</label>
                                <div style="border: 1px solid #ccc; padding: 5px; border-radius: 5px; margin-right: 10px;"><?php echo $objResult['c_title']; ?></div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <label for="c_tax" class="form-label">ที่อยู่สำหรับออกใบกำกับภาษี:</label>
                                <div style="border: 1px solid #ccc; padding: 5px; border-radius: 5px; margin-right: 10px;"><?php echo $objResult['c_tax']; ?></div>
                            </div>
                            
                            </div>

                        </div>
                    </span>
                <duv class="col-md-3">
                        <!-- ข้อมูลรูปภาพ -->
                        <div class="row mt-3">
    <div class="col-md-12 mt-3">
        <label for="c_image" class="form-label">รูปภาพกิจกรรม</label>
    </div>
    <div class="col-md-12 mt-3">
        <?php if ($objResult['c_image'] != '') { ?>
            <div style="width: 250px; height: 250px; display: flex; justify-content: center; align-items: center; overflow: hidden;">
                <div style="position: relative; width: 100%; height: 100%;">
                    <img src="./images/<?php echo $objResult['c_image']; ?>" class="img-thumbnail" id="c_image_preview" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); max-width: 100%; max-height: 100%;" />
                </div>
            </div>
        <?php } else { ?>
            <div style="width: 250px; height: 250px; display: flex; justify-content: center; align-items: center;">
                <img src="./images/noimg.png" class="img-thumbnail" id="c_image_preview" style="max-width: 100%; max-height: 100%;" />
            </div>
        <?php } ?>
        <div class="col-md-12 mt-4">
                <label for="c_tax" class="form-label">สถานะเอกสาร</label>
                <div style="border: 1px solid #ccc; padding: 5px; border-radius: 5px; margin-right: 10px;"><?php echo $objResult['c_conStatus']; ?></div>
        </div>
    </div>
</div>
                        <!--<div class="col-md-12 mt-2" id="list-example" class="list-group">
                            <a class="list-group-item list-group-item-action" href="update.php?c_id=<?php echo $objResult['c_id']; ?>">แก้ไขข้อมูล</a>
                            <a class="list-group-item list-group-item-action" href="action_delete.php?c_id=<?php echo $objResult['c_id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('ยืนยัน');">ลบข้อมูล</a>
                        </div>-->
                        
                       
                    </div>
                </duv>
            </form>
        </div>
    </main>
    </div>
        </div>

        <footer class="footer mt-auto py-3 bg-light text-center">
        <div class="container">
            <span class="text-muted">Copyright &copy; 2023 RCU Chula : Record student Activities  | All rights reserved.</span>
        </div>
    </footer>


    
</body>

</html>