<?php
session_start();
if (!isset($_SESSION['user_login'])) { // ถ้าไม่ได้เข้าระบบอยู่
    header("location: php-member/login.php"); // redirect ไปยังหน้า login.php
    exit;
}

$user = $_SESSION['user_login'];
?>

<!doctype html>
<html lang="th" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>เพิ่มข้อมูล</title>
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./css/style.css" rel="stylesheet">
</head>
<style>
    body {
    font-family: 'Kanit', sans-serif;
    }
</style>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">ลงทะเบียน</h1>
            <div class="mt-4">
                <a href="php-member/index.php" class="btn btn-dark">Back</a> 
            </div>
            <!-- ฟอร์มเพิ่มข้อมูล -->
            <form action="action_create.php" id="form_create" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
                <div class="row">
                    <div class="col-md-9">
                        <!-- ข้อมูลเนื้อหา -->
                        <div class="row mt-4">
                            <!-- แถวที่ 1 -->
                            <div class="col-md-6 mt-3">
                                <label for="c_typereg" class="form-label">ประเภทผู้ลงทะเบียน <span class="text-danger">*</span></label>
                                <select type=text id="c_typereg" class="form-control"  name="c_typereg" required>
                                    <option value="-"></option>
                                    <option value="ผู้เข้าร่วมการประชุม">ผู้เข้าร่วมการประชุม 500 บาท</option>
                                    <option value="presenter">ผู้นำเสนอผลงานวิจัย 500 บาท</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="c_typepre" class="form-label">ประเภทผลงานวิจัยที่นำเสนอ <span class="text-danger"></span></label>
                                <span style="color: grey;">(สำหรับผู้นำเสนอเท่านั้น)</span>
                                <select type=text id="c_typepre" class="form-control" name="c_typepre" >
                                    <option value="attendee"></option>
                                    <option>การนำเสนอด้วยวาจา (Oral Presentation)</option>
                                    <option>การนำเสนอด้วยโปสเตอร์ (Poster Presentation)</option>
                                </select>
                            </div>

                            <!-- แถวที่ 2 -->
                            <div class="col-md-4 mt-3">
                                <label for="c_prefix" class="form-label">คำนำหน้าชื่อ <span class="text-danger">*</span></label>
                                <select type=text id="c_prefix" class="form-control" name="c_prefix" required>
                                    <option value="attendee"></option>
                                    <option>นาย</option>
                                    <option>นาง</option>
                                    <option>นางสาว</option>
                                    <option>ผู้ช่วยศาสตราจารย์</option>
                                    <option>รองศาสตราจารย์</option>
                                    <option>ศาสตราจารย์</option>
                                    <option>ผู้ช่วยศาสตราจารย์ ดร.</option>
                                    <option>รองศาสตราจารย์ ดร.</option>
                                    <option>ศาสตราจารย์ ดร.</option>
                                </select>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="c_firstname" class="form-label">ชื่อ <span class="text-danger">*</span></label>
                                <input type="text" id="c_firstname" name="c_firstname" class="form-control" required>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="c_lastname" class="form-label">สกุล <span class="text-danger">*</span></label>
                                <input type="text" id="c_lastname" name="c_lastname" class="form-control" required>
                            </div>

                            <!-- แถวที่ 3 -->
                            <div class="col-md-4 mt-3">
                                <label for="c_belong" class="form-label">สังกัด<span class="text-danger">*</span></label>
                                <input type="text" id="c_idcard" name="c_belong" class="form-control"  required>
                            </div>
                        
                            <div class="col-md-4 mt-3">
                                <label for="c_mobile" class="form-label">เบอร์โทรศัพท์มือถือ<span class="text-danger">*</span></label>
                                <input type="text" id="c_mobile" list="list_prefixfac" name="c_mobile" class="form-control" minlength="10" maxlength="10" required>

                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="c_birthdate" class="form-label">วัน/เดือน/ปี เกิด</label>
                                <input type="date" id="c_birthdate" name="c_birthdate" class="form-control" required>
                            </div>
                            
                            <!-- แถวที่ 4 -->
                            <div class="col-md-12 mt-3">
                                <label for="c_title" class="form-label">ชื่อเรื่องบทความ :<span class="text-danger"></span></label>
                                <input name="c_title" id="c_title" class="form-control" rows="4" ></input>
                            </div>
                            <div class="col-md-12 mt-3">
                            <label for="c_tax" class="form-label">ที่อยู่สำหรับออกใบกำกับภาษี:<span class="text-danger"></span>
                                <span style="color: grey;">(ถ้ามี)</span>
                            </label>
                            <textarea name="c_tax" id="c_tax" class="form-control" rows="4"></textarea>
                        </div>

                            <!-- ปุ่มบันทึก -->
                            <div class="col-md-12 mt-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="reset" class="btn btn-danger">Clear</button> 
                            </div>
                        </div>
                    </div>
                    <duv class="col-md-3">
                    
                    

                        <!-- ข้อมูลรูปภาพ -->
                        <div class="row mt-4">
                            <div class="col-md-12 mt-3">
                                <label for="c_image" class="form-label">ตัวอย่างผลงาน</label>
                                <input class="form-control" id="c_image" name="c_image" type="file" onchange="loadFile(event)">
                            </div>
                            <div class="col-md-12 mt-3">
                                <img src="./images/noimg.png" class="img-thumbnail" id="c_image_preview" />
                            </div>
                        </div>
                    </duv>
                </div>
            </form>
        </div>
    </main>
    

  
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