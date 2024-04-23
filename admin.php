<?php
session_start();
include_once('./function.php');

$objCon = connectDB();

// กำหนดตัวแปรสำหรับการค้นหา ถ้ามี
$search = $_GET['search'] ?? '';
$condition = "";
if ($search) {
    $search = mysqli_real_escape_string($objCon, $search);
    $condition = " WHERE (c_firstname LIKE '%$search%' OR c_lastname LIKE '%$search%' OR c_idcard LIKE '%$search%' OR c_building LIKE '%$search%' 
    OR c_idroom LIKE '%$search%' OR c_mobile = '$search')";
}

$perpage = 10; // กำหนดจำนวนรายการต่อหน้า
$page = $_GET['page'] ?? 1;
$start = ($page - 1) * $perpage;

// คำสั่ง SQL สำหรับนับจำนวนข้อมูลทั้งหมด (เพื่อแบ่งหน้า)
$strSQLPagination = "SELECT * FROM contact $condition ORDER BY c_id DESC";
$objQueryPagination = mysqli_query($objCon, $strSQLPagination);
$total_records = mysqli_num_rows($objQueryPagination);
$total_pages = ceil($total_records / $perpage);

// คำสั่ง SQL ที่ใช้ดึงข้อมูลทั้งหมดจากตาราง contact ตามการแบ่งหน้าและเงื่อนไขการค้นหา
$strSQL = "SELECT * FROM contact $condition ORDER BY c_id DESC LIMIT $start, $perpage";
$objQuery = mysqli_query($objCon, $strSQL);

// ตรวจสอบสถานะเข้าระบบ
$user = $_SESSION['user_login'] ?? null;
if (!$user || $user['level'] != 'administrator') {
    header("location: login.php");
    exit;
}

// HTML and PHP mixed here
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP login</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">
    <!-- Content here -->
    <!-- Include scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<body class="d-flex flex-column h-100">
    <div class="container">
        <div class="bg-light p-5 rounded mt-3">
            <h1>หน้าสำหรับผู้ดูแลระบบ</h1>
            <div class="mt-5">
                <a href="index.php" class="btn btn-lg btn-success">กลับหน้าหลัก</a>
                <a href="logout_action.php" class="btn btn-lg btn-danger">ออกจากระบบ</a>
            </div>
        </div>
    </div>
    <!-- ตารางข้อมูล -->

    
    <div class="container">
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
                </style>
                </head>
                <body>
                <div class="container mt-5">
        </div>
        <div class="mt-3">
            <h5>จำนวนสมาชิกทั้งหมดที่กรอกข้อมูล: <?php echo $total_records; ?> รายการ</h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">ลำดับ</th>
                        <th class="text-center">ประเภทผู้ลงทะเบียน</th>
                        <th class="text-center">ประเภทผลงานวิจัยที่นำเสนอ</th>
                        <th class="text-center">สังกัด</th>
                        <th class="text-center">ชื่อ - สกุล</th>
                        <th class="text-center">เบอร์โทรศัพท์มือถือ</th>
                        <th class="text-center">การจัดการ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC)) { ?>
                    <tr>
                        <td class="text-center"><?php echo $objResult['c_id']; ?></td>
                        <td class="text-center"><?php echo $objResult['c_typereg']; ?></td>
                        <td><?php echo $objResult['c_typepre']; ?></td>
                        <td><?php echo $objResult['c_belong']; ?></td>
                        <td><?php echo $objResult['c_prefix'] . ' ' . $objResult['c_firstname'] . ' ' . $objResult['c_lastname']; ?></td>
                        <td><?php echo $objResult['c_mobile']; ?></td>
                        <td>


                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <a href="../infodata.php?c_id=<?php echo $objResult['c_id']; ?>" class="btn btn-primary btn-sm">Preview</a>
                            <a href="../update.php?c_id=<?php echo $objResult['c_id']; ?>" class="btn btn-warning btn-sm">Update</a>
                            <a href="../delete.php?c_id=<?php echo $objResult['c_id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');">Delete</a>
                        </div>
                            
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <!-- Pagination -->
            <nav>
                <ul class="pagination">
                    <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
                        <li class="page-item<?php if ($page == $i) echo ' active'; ?>">
                            <a class="page-link" href="admin.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </div>
    <script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>

</html>