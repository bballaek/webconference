<!doctype html>
<html lang="th" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About - AcadMeet</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;600&display=swap" rel="stylesheet">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <?php require_once("php/header.php"); ?>

    <style>
        body, button, input {
            font-family: 'Kanit', sans-serif;
        }
        .about-section {
            padding: 40px 0;
        }
        .team-member {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="about-section">
    <div class="container">
        <h1 class="text-center">About AcadMeet</h1>
        <p class="text-center">AcadMeet is a platform dedicated to connecting scholars and learners from around the globe. We specialize in curating educational events, conferences, and seminars.</p>
        
        <!-- Team Section -->
        <div class="team-section mt-5">
            <h2 class="text-center mb-4">Our Team</h2>
            <div class="row">
                <!-- Team Member 1 -->
                <div class="col-lg-4">
                    <div class="card team-member">
                        <img src="images/team-member-1.jpg" class="card-img-top" alt="Team Member">
                        <div class="card-body">
                            <h5 class="card-title">Aekkarat Wongchalee</h5>
                            <p class="card-text">Head Management</p>
                        </div>
                    </div>
                </div>
                <!-- Team Member 2 -->
                <div class="col-lg-4">
                    <div class="card team-member">
                        <img src="images/team-member-2.jpg" class="card-img-top" alt="Team Member">
                        <div class="card-body">
                            <h5 class="card-title">Tanawat Ratanatanachai</h5>
                            <p class="card-text">Position</p>
                        </div>
                    </div>
                </div>
                <!-- ... -->
                <!-- Team Member 3 -->
                <div class="col-lg-4">
                    <div class="card team-member">
                        <img src="images/team-member-3.jpg" class="card-img-top" alt="Team Member">
                        <div class="card-body">
                            <h5 class="card-title">Phatarada Radinghing</h5>
                            <p class="card-text">Position</p>
                        </div>
                    </div>
                </div>
                <!-- ... -->
            </div>
        </div>

        <!-- History Section -->
        <div class="history-section mt-5">
            <h2 class="text-center mb-4">Our History</h2>
            <p>We started AcadMeet with the vision of creating a centralized location where academics and industry professionals could connect and share knowledge. Since our founding in 2021, we have expanded our reach to include members from over 100 countries.</p>
            <!-- More about the company's history -->
        </div>

        <!-- Values Section -->
        <div class="values-section mt-5">
            <h2 class="text-center mb-4">Our Values</h2>
            <ul>
                <li>Innovation in education</li>
                <li>Community building</li>
                <li>Lifelong learning</li>
                <!-- More values -->
            </ul>
        </div>
    </div>
</div>

<?php require_once("php/footer.php"); ?>

<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>
