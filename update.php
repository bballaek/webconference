<?php
include_once('./function.php');
$objCon = connectDB();

$c_id = (int) $_GET['c_id'];
$strSQL = "SELECT * FROM contact WHERE c_status = 1 AND c_id = $c_id";
$objQuery = mysqli_query($objCon, $strSQL);
$objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
if ($objResult == null) {
    echo '<script>alert("ไม่พบข้อมูล!!");window.location="index.php";</script>';

    $c_conStatus = $_POST['c_conStatus'];
// SQL to update the database
$sql = "UPDATE contact SET c_conStatus = '$c_conStatus' WHERE c_id = $c_id";

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
            <h1 class="mt-5">แก้ไขข้อมูล</h1>
            <div class="mt-4">
                <a href="php-member/admin.php" class="btn btn-warning">รายการข้อมูล</a>
            </div>
            <!-- ฟอร์มเพิ่มข้อมูล -->
            <form action="action_update.php" id="form_update" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row mt-4">
                             <!-- แถวที่ 1 -->
                            <div class="col-md-6" >
                                <label for="c_typereg" class="form-label">ประเภทผู้ลงทะเบียน :</label>
                                <select id="c_typereg" name="c_typereg" class="form-control">
                                    <option value="-" <?php echo $objResult['c_typereg'] == '-' ? 'selected' : ''; ?>></option>
                                    <option value="ผู้เข้าร่วมการประชุม" <?php echo $objResult['c_typereg'] == 'ผู้เข้าร่วมการประชุม' ? 'selected' : ''; ?>>ผู้เข้าร่วมการประชุม</option>
                                    <option value="ผู้นำเสนอผลงานวิจัย" <?php echo $objResult['c_typereg'] == 'ผู้นำเสนอผลงานวิจัย' ? 'selected' : ''; ?>>ผู้นำเสนอผลงานวิจัย</option>
                                </select>
                            </div>
                            <div class="col-md-6" >
                                <label for="c_typepre" class="form-label">ประเภทผลงานวิจัยที่นำเสนอ :</label>
                                <select id="c_typepre" name="c_typepre" class="form-control">
                                    <option value="-" <?php echo $objResult['c_typepre'] == '-' ? 'selected' : ''; ?>></option>
                                    <option value="การนำเสนอด้วยวาจา" <?php echo $objResult['c_typepre'] == 'การนำเสนอด้วยวาจา' ? 'selected' : ''; ?>>การนำเสนอด้วยวาจา (Oral Presentation)</option>
                                    <option value="การนำเสนอด้วยโปสเตอร์" <?php echo $objResult['c_typepre'] == 'การนำเสนอด้วยโปสเตอร์' ? 'selected' : ''; ?>>การนำเสนอด้วยโปสเตอร์ (Poster Presentation)</option>
                                </select>
                            </div>

                            <!-- แถวที่ 1 -->
                            <div class="col-md-4 mt-3">
                            <label for="c_prefix" class="form-label">คำนำหน้าชื่อ</label>
                            <select id="c_prefix" name="c_prefix" class="form-control">
                                <option value="นาย" <?php echo ($objResult['c_prefix'] == 'นาย') ? 'selected' : ''; ?>>นาย</option>
                                <option value="นาง" <?php echo ($objResult['c_prefix'] == 'นาง') ? 'selected' : ''; ?>>นาง</option>
                                <option value="นางสาว" <?php echo ($objResult['c_prefix'] == 'นางสาว') ? 'selected' : ''; ?>>นางสาว</option>
                                <option value="ผู้ช่วยศาสตราจารย์" <?php echo ($objResult['c_prefix'] == 'ผู้ช่วยศาสตราจารย์') ? 'selected' : ''; ?>>ผู้ช่วยศาสตราจารย์</option>
                                <option value="รองศาสตราจารย์" <?php echo ($objResult['c_prefix'] == 'รองศาสตราจารย์') ? 'selected' : ''; ?>>รองศาสตราจารย์</option>
                                <option value="ศาสตราจารย์" <?php echo ($objResult['c_prefix'] == 'ศาสตราจารย์') ? 'selected' : ''; ?>>ศาสตราจารย์</option>
                                <option value="ผู้ช่วยศาสตราจารย์ ดร." <?php echo ($objResult['c_prefix'] == 'ผู้ช่วยศาสตราจารย์ ดร.') ? 'selected' : ''; ?>>ผู้ช่วยศาสตราจารย์ ดร.</option>
                                <option value="รองศาสตราจารย์ ดร." <?php echo ($objResult['c_prefix'] == 'รองศาสตราจารย์ ดร.') ? 'selected' : ''; ?>>รองศาสตราจารย์ ดร.</option>
                                <option value="ศาสตราจารย์ ดร." <?php echo ($objResult['c_prefix'] == 'ศาสตราจารย์ ดร.') ? 'selected' : ''; ?>>ศาสตราจารย์ ดร.</option>
                            </select>
                        </div>

                            <div class="col-md-4 mt-3">
                                <label for="c_firstname" class="form-label">ชื่อ</label>
                                <input type="text" id="c_firstname" name="c_firstname" class="form-control" value="<?php echo $objResult['c_firstname']; ?>">
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="c_lastname" class="form-label">สกุล</label>
                                <input type="text" id="c_lastname" name="c_lastname" class="form-control" value="<?php echo $objResult['c_lastname']; ?>">
                            </div>
                            <!-- แถวที่ 2 -->
                            <div class="col-md-4 mt-3">
                                <label for="c_belong" class="form-label">เลขบัตรประจำตัวประชาชน</label>
                                <input type="text" id="c_belong" name="c_belong" class="form-control" value="<?php echo $objResult['c_belong']; ?>">
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="c_birthdate" class="form-label">วัน/เดือน/ปี เกิด</label>
                                <input type="date" id="c_birthdate" name="c_birthdate" class="form-control" value="<?php echo $objResult['c_birthdate']; ?>">
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="c_mobile" class="form-label">โทรศัพท์</label>
                                <input type="text" id="c_mobile" name="c_mobile" class="form-control" value="<?php echo $objResult['c_mobile']; ?>">
                            </div>
                            <!-- แถวที่ 3 -->
                            <div class="col-md-12 mt-3">
                                <label for="c_title" class="form-label">รายละเอียด</label>
                                <textarea name="c_title" id="c_title" class="form-control" rows="4"><?php echo $objResult['c_title']; ?></textarea>
                                <input type="hidden" name="c_id" value="<?php echo $objResult['c_id']; ?>">
                            </div>
                            <!-- ปุ่มบันทึก -->
                            <div class="col-md-12 mt-3">
                                <button type="submit" class="btn btn-primary btn-lg">บันทึกการแก้ไข</button>
                                <button type="reset" class="btn btn-light btn-lg">ล้างค่า</button>
                            </div>
                        </div>
                    </div>
                    <duv class="col-md-3">
                        <!-- ข้อมูลรูปภาพ -->
                        <div class="row mt-4">
                            <div class="col-md-12 mt-3">
                                <label for="c_image" class="form-label">รูปภาพ</label>
                                <input class="form-control" id="c_image" name="c_image" type="file" onchange="loadFile(event)">
                            </div>
                            <div class="col-md-12 mt-3">
                                <?php if ($objResult['c_image'] != '') { ?>
                                    <img src="./images/<?php echo $objResult['c_image']; ?>" class="img-thumbnail" id="c_image_preview" />
                                <?php } else { ?>
                                    <img src="./images/noimg.png" class="img-thumbnail" id="c_image_preview" />
                                <?php } ?>
                            </div>
                            <div class="col-md-6" >
                            <select id="c_conStatus" name="c_conStatus" class="form-control">
                                <option value="-" <?php echo $objResult['c_conStatus'] == '-' ? 'selected' : ''; ?>></option>
                                <option value="รอตรวจสอบ" <?php echo $objResult['c_conStatus'] == 'รอตรวจสอบ' ? 'selected' : ''; ?>>รอตรวจสอบ</option>
                                <option value="ผ่าน" <?php echo $objResult['c_conStatus'] == 'ผ่าน' ? 'selected' : ''; ?>>ผ่าน</option>
                            </select>

                            </div>
                        </div>
                    </duv>
            </form>
        </div>
    </main>
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">&copy; 2021</span>
        </div>
    </footer>

    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/script.js"></script>
    <script>
        var loadFile = function(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('c_image_preview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</body>

</html>