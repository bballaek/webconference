<?php
include_once('./function.php');
$objCon = connectDB();

$c_id = isset($_POST['c_id']) ? (int)$_POST['c_id'] : 0;
if (!$c_id) {
    echo '<script>alert("Invalid ID!!");window.location="../index.php";</script>';
    exit;
}

$data = $_POST;
// print_r($data);
$c_typereg = $data['c_typereg'];
$c_typepre = $data['c_typepre'];
$c_prefix = $data['c_prefix'];
$c_firstname = $data['c_firstname'];
$c_lastname = $data['c_lastname'];
$c_belong = $data['c_belong'];
$c_birthdate = $data['c_birthdate'];
$c_mobile = $data['c_mobile'];
$c_title = $data['c_title'];
$c_tax = $data['c_tax'];
$c_image = 'noimg.png'; // default value

$output_dir = 'images'; // folder
if (!is_array($_FILES["c_image"]["name"])) {
    $exts = explode('.', $_FILES["c_image"]["name"]);
    $ext = $exts[count($exts) - 1]; // get ext image ex. jpeg, jpg, png
    $fileName = date("YmdHis") . '_' . randomString() . "." . $ext;
    if (file_exists($output_dir . $fileName)) {
        $fileName = $fileName = date("YmdHis") . '_' . randomString() . "." . $ext;
    }
    $c_image = $fileName; // set image value
    move_uploaded_file($_FILES["c_image"]["tmp_name"], $output_dir . '/' . $fileName);

    $strSQL = "UPDATE contact SET   
        c_typereg = '$c_typereg',
        c_typepre = '$c_typepre',
        c_prefix = '$c_prefix',
        c_firstname = '$c_firstname',
        c_lastname = '$c_lastname',
        c_belong = '$c_belong',
        c_birthdate = '$c_birthdate',
        c_mobile = '$c_mobile',
        c_title = '$c_title',
        c_tax = '$c_tax',
        c_image = '$c_image'
    WHERE c_id = $c_id";
} else {
    $strSQL = "UPDATE contact SET 
        c_typereg = '$c_typereg',
        c_typepre = '$c_typereg',
        c_prefix = '$c_prefix',
        c_firstname = '$c_firstname',
        c_lastname = '$c_lastname',
        c_belong = '$c_belong',
        c_birthdate = '$c_birthdate',
        c_mobile = '$c_mobile',
        c_title = '$c_title',
        c_tax = '$c_tax'
    WHERE c_id = $c_id";
}

$objQuery = mysqli_query($objCon, $strSQL);
if ($objQuery) {
    echo '<script>alert("บันทึกการแก้ไขแล้ว");window.location="php-member/index.php";</script>';
} else {
    echo '<script>alert("พบข้อผิดพลาด!!");window.location="../update.php?c_id=' . $c_id . '";</script>';
}
