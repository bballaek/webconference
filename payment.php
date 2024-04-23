<?php
session_start();
include_once('./function.php');
$objCon = connectDB();

$perpage = 1;
if (isset($_GET['page']) && (int)$_GET['page'] > 0) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
?>
<!doctype html>
<html lang="th" class="h-100">
<style>
.container {
    max-width: 1080px;



}
.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    text-align: center; /* จัดตำแหน่งตรงกลาง */
  }
  </style>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ระบบบันทึกกิจกรรมหอใน</title>
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./css/style.css" rel="stylesheet">
    
    

</head>
<body class="d-flex flex-column h-100">

    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container">
            
        <div class="text-center" style="border: 1.5px solid #ccc; padding: 10px; border-radius: 10px; margin-top: 120px; border-color: #FD4394;">
    <h2 style="margin-top: 20px;">ตรวจสอบการชำระค่าลงทะเบียน</h2>
    <p style="margin-bottom: 40px;">Chulalongkorn University</p>

            <!-- ฟอร์มค้นหา -->
            <div class="mt-4 text-center"> <!-- เพิ่มคลาส text-center -->
                <form>
                    <div class="row justify-content-center"> <!-- เปลี่ยนคลาส justify-content-end เป็น justify-content-center -->
                    <!-- ชุด 1 -->
                        <div class="col-auto">
                            <label for="search" class="col-form-label">กรอก ชื่อ - นามสกุล</label>
                        </div>
                    <!-- ชุด 2 -->

                        <div class="col-auto">
                            <input type="text" id="search" name="search" value="<?php echo $search; ?>" class="form-control">
                        </div>
                        <div class="col-auto">
                            <div class= "btn-group">
                                <button type="submit" class="btn btn-primary">Search</button>
                                <a href="payment.php" class="btn btn-danger">ล้าง</a>
                            </div>
                        </div>
                    <!-- ชุด 4 -->
                    
                    <div class="col-md-6 mt-3">
                        <div class="button-center">
                            
                                <a style="margin-bottom: 20px;" href="create.php" type="button" class="btn btn-outline-dark">ลงทะเบียน</a>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            </div>




             <!-- ตารางข้อมูล -->
             <!DOCTYPE html>
                <html>
                <head>
                <style>
                table {
                
                width: 100%;
                }

                td, th {
                
                text-align: left;
                padding: 8px;
                }

                tr:nth-child(even) {
                background-color: #dddddd;
                }
                </>
                </head>
                <body>
     
            <table class="table mt-5" >
                <thead>
                    <tr>
                        <th class="text-center">ตึก</th>
                        <th class="text-center">เลขห้องพัก</th>
                        <th class="text-center">เลขประจำตัวนิสิต</th>
                        <th class="text-center">ชื่อ - สกุล</th>
                        <th class="text-center">คณะ</th>
                        <th class="text-center">Menu</th>
               
                    </tr>
                    </thead>
                <tbody>
                    <?php
                    while ($objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC)) {
                    ?>
                        <tr>
                            <td class="text-center"><?php echo $objResult['c_building']; ?></td>
                            <td class="text-center"><?php echo $objResult['c_idroom']; ?></td>
                            <td class="text-center"><?php echo $objResult['c_idcard']; ?></td>
                            <td class="text-center"><?php echo $objResult['c_prefix'], $objResult['c_firstname'], ' ', $objResult['c_lastname']; ?></td>
                            <td class="text-center"><?php echo $objResult['c_mobile']; ?></td>
                            <td class="text-center">
                                <div class= "btn-group">
                                    <a href="infodata.php?c_id=<?php echo $objResult['c_id']; ?>" class="btn btn-primary btn-sm" >Preview</a>
                                    <!--<a href="update.php?c_id=<?php echo $objResult['c_id']; ?>" class="btn btn-warning btn-sm" >Update</a>-->
                                </div>
                        
                            </div>    
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            <footer class="footer mt-auto py-3 bg-light text-center">
        <div class="container">
            <span class="text-muted">Copyright &copy; 2023 RCU Chula : Record student Activities  | All rights reserved.</span>
        </div>
    </footer>