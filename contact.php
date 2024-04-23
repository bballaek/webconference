<!doctype html>
<html lang="th" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AcadMeet</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;600&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./css/style.css" rel="stylesheet">
    <?php require_once ("php/header.php"); ?>
    <style>
    body {
    font-family: 'Kanit', sans-serif;
    }
    .main-content {
        text-align: center;
        padding: 20px;
    }
    .main-content h2, .main-content h3 {
        margin-bottom: 20px;
    }
    .contact-info {
        display: flex;
        justify-content: space-around;
        gap: 50px; /* Adjust the space between email and phone info as needed */
        margin-bottom: 20px;
    }
    /* This ensures that the boxes have equal width and height */
    .email-box, .phone-box {
        flex: 1; /* Flex grow equally */
        padding: 15px;
        border: 1px solid #000; /* This creates the border around the box */
        border-radius: 8px; /* Optional: if you want rounded corners */
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    /* If you want to explicitly set a fixed size, you can uncomment the following lines */
    /*
    .email-box, .phone-box {
        width: 300px; /* Fixed width */
        height: 150px; /* Fixed height */
    }
    */
    .dev-team p {
        margin: 5px 0;
    }
    </style>



    <!-- Page Content -->
<main class="main-content">
    <div class="container">
        <h2>Get in Touch</h2>
        <div class="contact-info">
            <div class="email-box">
                <strong>Email</strong>
                <p>acadmeet@gmail.com</p>
            </div>
            <div class="phone-box">
                <strong>Phone</strong>
                <p>0933963175</p>
            </div>
        </div>

        <div class="dev-team">
            <h3>Dev Team</h3>
            <p>Aekkarat Wongchalee, Tanawat Ratanatanachai,</p>
            <p>Advisor Asst.Prof.PORNSOOK TANTRARUNGRUJ, Ph.D.</p>
            <p>Faculty of Education</p>
            <p>Educational technology and communication</p>
            <p>Chulalongkorn University</p>
        </div>
    </div>
</main>

    

    <?php require_once("php/footer.php"); ?>

    <!-- Bootstrap JS -->
    <script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>
