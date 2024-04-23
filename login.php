<?php session_start(); // เปิดใช้งาน session ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;600&display=swap" rel="stylesheet">
    <title>PHP login</title>
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./css/style.css" rel="stylesheet">
    

</head>
<style>
        body {
        font-family: 'Kanit', sans-serif;
        }
        body {
            font-family: 'Kanit', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }
    </style>

<body class="text-center">

    <main class="form-signin">
        <form method="post" action="login_action.php">
            <h1 class="h3 mb-3 fw-normal">เข้าสู่ระบบ</h1>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" name="username" placeholder="Username">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">เข้าสู่ระบบ</button>
            <a href="register.php" class="w-100 btn btn-lg btn-secondary mt-3">สมัครสมาชิก</a>
            <a href="../index.php" class="w-100 btn btn-lg btn-secondary mt-3">หน้าหลัก</a>
        </form>
    </main>

</body>

</html>