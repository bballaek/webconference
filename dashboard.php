<?php
session_start();
include_once('./function.php');
$objCon = connectDB();
$strSQL = "SELECT * FROM contact";
$objQuery = mysqli_query($objCon, $strSQL);
$total_record = mysqli_num_rows($objQuery);



$user = $_SESSION['user_login'] ?? null;
if (!$user || $user['level'] != 'administrator') {
    header("location: login.php");
    exit;
}

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$perpage = 10; // แสดง 10 รายการต่อหน้า
$start = ($page - 1) * $perpage;

$condition = "";
$search = $_GET['search'] ?? '';
if ($search) {
    $search = mysqli_real_escape_string($objCon, $search);
    $condition = " AND (c_firstname LIKE '%$search%' OR c_lastname LIKE '%$search%' OR c_idcard LIKE '%$search%' OR c_building LIKE '%$search%' 
    OR c_idroom LIKE '%$search%' OR c_mobile = '$search')";
}
//----------------------------------
$strSQL = "SELECT * FROM contact WHERE c_status = 1 LIMIT ".(($page-1)*$perpage).", $perpage";
$objQuery = mysqli_query($objCon, $strSQL);



// สร้าง SQL query ที่นับจำนวนผู้นำเสนอตามประเภทการนำเสนอ
$query = "SELECT c_typepre, COUNT(*) as total FROM contact GROUP BY c_typepre";
$result = mysqli_query($objCon, $query);

?>

<!DOCTYPE html>
<html lang="en">
<style>
        .container {
            margin-top: 20px;
        }
        .table-responsive {
            margin-top: 20px;
        }
    </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Dashboard</h1>
    <div class="row">
    <div class="col-md-6">
        <div class="card text-white bg-primary mb-3">
            <div class="card-header">จำนวนสมาชิกทั้งหมดที่กรอกข้อมูล</div>
            <div class="card-body">
                <h5 class="card-title"><?php echo $total_record ?> คน</h5>
                <p class="card-text">จำนวนสมาชิกที่กรอกข้อมูลลงในระบบ.</p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card text-white bg-success mb-3">
            <div class="card-header">จำนวนสมาชิกใหม่ในเดือนที่ผ่านมา</div>
            <div class="card-body">
                <h5 class="card-title"><?php echo $total_record ?> คน</h5>
                <p class="card-text">จำนวนสมาชิกใหม่ที่สมัครในช่วง 30 วันที่ผ่านมา.</p>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">

    
        <div class="card-body">
            <?php
            include_once('./function.php');
            $objCon = connectDB();
            $query = "SELECT c_typepre, COUNT(*) as total FROM contact GROUP BY c_typepre";
            $result = mysqli_query($objCon, $query);
            
            if(mysqli_num_rows($result) > 0) {
                echo '<div class="table-responsive">';
                echo '<table class="table">';
                echo '<thead class="thead-dark"><tr><th>Type of Presentation</th><th>Total</th></tr></thead>';
                echo '<tbody>';
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . htmlspecialchars($row['c_typepre']) . "</td><td>" . $row['total'] . "</td></tr>";
                }
                echo '</tbody>';
                echo '</table>';
                echo '</div>';
            } else {
                echo '<div class="alert alert-info">ไม่พบข้อมูล</div>';
            }
            mysqli_close($objCon);
            ?>
        </div>
    
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.7.12/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
