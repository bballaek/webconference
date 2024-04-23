<?php
include_once('./function.php');
$objCon = connectDB();

$data = $_POST;
// print_r($data);
$c_amount = $data['c_amount'];
$c_bank = $data['c_bank'];
$c_transferDate = $data['c_transferDate'];
$c_transferTime = $data['c_transferTime'];
$c_image = 'noimg.png'; // default value

$output_dir = 'images/'; // folder
if (!is_array($_FILES["c_image"]["name"])) {
    $exts = explode('.', $_FILES["c_image"]["name"]);
    $ext = end($exts); // get ext image ex. jpeg, jpg, png
    $fileName = date("YmdHis") . '_' . randomString() . "." . $ext;
    if (file_exists($output_dir . $fileName)) {
        $fileName = date("YmdHis") . '_' . randomString() . "." . $ext;
    }
    $c_image = $fileName; // set image value
    @move_uploaded_file($_FILES["c_image"]["tmp_name"], $output_dir . $fileName);
}

$strSQL = "INSERT INTO payment (
    `c_amount`,
    `c_bank`,
    `c_transferDate`,
    `c_transferTime`,
    `c_proof`,
    `c_image`
) VALUES (
    '$c_amount', 
    '$c_bank', 
    '$c_transferDate', 
    '$c_transferTime',  
    '$c_image',  
    '$c_image' 
)";

$objQuery = mysqli_query($objCon, $strSQL) or die(mysqli_error($objCon));
if ($objQuery) {
    echo '<script>alert("เพิ่มข้อมูลแล้ว");window.location="php-member/index.php";</script>';
} else {
    echo '<script>alert("พบข้อผิดพลาด");window.location="../create.php";</script>';
}
?>
