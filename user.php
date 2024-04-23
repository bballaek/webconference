<?php
session_start();
include_once('./function.php');
$objCon = connectDB();

// Check if the user is logged in and has the right user level
$user = $_SESSION['user_login'] ?? null;
if (!$user || $user['level'] != 'administrator') {
    header("location: login.php");
    exit;
}

$perpage = 10; // Number of items per page
$page = $_GET['page'] ?? 1;
$start = ($page - 1) * $perpage;

// Fetch users from the database with pagination
$strSQL = "SELECT user_id, fullname, email, username FROM user WHERE c_status = 1 LIMIT $start, $perpage";
$objQuery = mysqli_query($objCon, $strSQL);

// Count total records for pagination
$countSQL = "SELECT COUNT(user_id) as total FROM user WHERE c_status = 1";
$countQuery = mysqli_query($objCon, $countSQL);
$countResult = mysqli_fetch_assoc($countQuery);
$total_records = $countResult['total'];
$total_pages = ceil($total_records / $perpage);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">
    <div class="container bg-light p-5 rounded mt-3">
        <h1>Admin Dashboard</h1>
        <div class="mt-5">
            <a href="index.php" class="btn btn-lg btn-success">Home</a>
            <a href="logout_action.php" class="btn btn-lg btn-danger">Logout</a>
        </div>
    </div>

    <div class="container mt-5">
        <h5>Total members: <?php echo $total_records; ?></h5>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Username</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC)) { ?>
                <tr>
                    <td class="text-center"><?php echo htmlspecialchars($objResult['fullname']); ?></td>
                    <td class="text-center"><?php echo htmlspecialchars($objResult['email']); ?></td>
                    <td class="text-center"><?php echo htmlspecialchars($objResult['username']); ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <nav>
            <ul class="pagination">
                <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
                <li class="page-item<?= ($page == $i) ? ' active' : ''; ?>">
                    <a class="page-link" href="?page=<?= $i; ?>"><?= $i; ?></a>
                </li>
                <?php } ?>
            </ul>
        </nav>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
