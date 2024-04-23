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

$perpage = 2; // You've set 2 records per page.
$page = $_GET['page'] ?? 1; // Default to the first page if no page number is provided.
$start = ($page - 1) * $perpage; // Calculate the starting index.


// SQL query to fetch data from both tables for pagination purposes
$strSQLPagination = "SELECT p.*, c.* FROM payment p 
                     JOIN contact c ON p.c_id = c.c_id 
                     $condition ORDER BY p.c_id DESC";
$objQueryPagination = mysqli_query($objCon, $strSQLPagination);
$total_records = mysqli_num_rows($objQueryPagination);
$total_pages = ceil($total_records / $perpage);

// SQL query to fetch specific page data
$strSQL = "SELECT p.*, c.* FROM payment p 
           JOIN contact c ON p.c_id = c.c_id 
           $condition ORDER BY p.c_id DESC LIMIT $start, $perpage";
$objQuery = mysqli_query($objCon, $strSQL);





// ตรวจสอบสถานะเข้าระบบ
$user = $_SESSION['user_login'] ?? null;
if (!$user || $user['level'] != 'user') {
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
          <h2>สวัสดี <?php echo $user['fullname']; ?></h2>
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
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">ลำดับ</th>
                        <th class="text-center">ประเภทการชำระ</th>
                        <th class="text-center">ประเภทผลงานวิจัยที่นำเสนอ</th>
                        <th class="text-center">สังกัด</th>
                        <th class="text-center">ชื่อ - สกุล</th>
                        <th class="text-center">เบอร์โทรศัพท์มือถือ</th>
                        <th class="text-center">สถานะการจ่ายเงิน</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php while ($objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC)) { ?>
                    <tr>
                        <td class="text-center"><?php echo $objResult['c_id']; ?></td>
                        <td class="text-center"><?php echo $objResult['c_amount']; ?></td>
                        <td class="text-center"><?php echo $objResult['c_typepre']; ?></td>
                        <td class="text-center"><?php echo $objResult['c_belong']; ?></td>
                        <td><?php echo $objResult['c_prefix'] . ' ' . $objResult['c_firstname'] . ' ' . $objResult['c_lastname']; ?></td>
                        <td class="text-center"><?php echo $objResult['c_mobile']; ?></td>
                        <td class="text-center"><?php echo $objResult['c_paymentStatus']; ?></td> 
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