<?php
include_once('./function.php');
$objCon = connectDB();
$strSQL = "SELECT * FROM contact";
$objQuery = mysqli_query($objCon, $strSQL);
$total_record = mysqli_num_rows($objQuery);
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Bootstrap core CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100;300&display=swap" rel="stylesheet">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./css/style.css" rel="stylesheet">
    <style type="text/css">
        body {
            font-family: 'Sarabun', sans-serif;
        }

        @media print {
            .no-print,
            .no-print * {
                display: none !important;
            }
        }
    </style>
</head>

<body>
<main class="flex-shrink-0">
        <div class="container">
        <div class="text-center" style="border: 1.5px solid #ccc; padding: 10px; border-radius: 10px; margin-top: 30px; border-color: #FD4394;">
    <div style="margin-top: 5px;" class="text-center fw-bold">รายงานข้อมูลการลงทะเบียนทั้งหมด</div>
    </div>
    <div class="mb-3 mt-4">
    จำนวนข้อมูลทั้งหมด <?php echo $total_record; ?> รายการ
    <span class="float-right">รายละเอียดดังนี้</span>
</div>


    <table class="table table-sm">
        <thead>
            <tr>
                <th>ลำดับ</th>
                <th class="text-center">ประเภทผู้ลงทะเบียน</th>
                <th class="text-center">ประเภทผลงานวิจัยที่นำเสนอ</th>
                <th class="text-center">สังกัด</th>
                <th class="text-center">ชื่อ - สกุล</th>
                <th class="text-center">เบอร์โทรศัพท์มือถือ</th>
                <th class="text-center">บทความ</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            while ($objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC)) {
                $i++;
            ?>
                <tr>
                    <td><?php echo $i; ?></td>
                            <td class="text-center"><?php echo $objResult['c_typereg']; ?></td>
                            <td class="text-center"><?php echo $objResult['c_typepre']; ?></td>
                            <td class="text-center"><?php echo $objResult['c_belong']; ?></td>
                            <td class="text-center"><?php echo $objResult['c_prefix'], $objResult['c_firstname'], ' ', $objResult['c_lastname']; ?></td>
                            <td class="text-center"><?php echo $objResult['c_mobile']; ?></td>
                            <td class="text-center"><?php echo $objResult['c_title']; ?></td>
                </tr>
            <?php
            } ?>
        </tbody>
    </table>

    <!-- ปุ่มพิมพ์ -->
    <div class="mt-4 text-center no-print">
        <a href="php-member/index.php" type="button" class="btn btn-danger">Cancel</a>
        <button type="button" class="btn btn-warning" onclick="return print();">Print</button>
    </div>

</body>

</html>