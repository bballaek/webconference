<!doctype html>
<html lang="th" class="h-100">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AcadMeet</title>
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./css/style.css" rel="stylesheet">
    <!-- PHP Header Include -->

    <?php require_once("php/header.php"); ?>

    <style>
        .hero-section {
            background: linear-gradient(135deg, #6B73FF 10%, #000DFF 100%);
            padding: 120px 0;
            color: white;
            text-align: center;
        }
        .register-btn {
            padding: 10px 20px;
            background-color: #FFD200; /* Gold color for the button */
            color: #000; /* Black text color */
            border: none; /* No border */
            border-radius: 5px; /* Rounded corners */
            font-size: 1.2em; /* Larger font size */
            cursor: pointer; /* Cursor changes to indicate this is clickable */
        }
        .register-btn:hover {
            background-color: #cca200; /* Darker gold color on hover */
        }
        body, button, input {
            font-family: 'Kanit', sans-serif;
        }
    </style>
    </head>
        <body>
        <div class="hero-section">
      <h1>Emerging Technology for Educators 2024</h1>
      <h2>วันที่ 27 พฤษภาคม 2567 เวลา 9.00-16.00 น</h2>
      <h2>ณ คณะครุศาสตร์ จุฬาลงกรณ์มหาวิทยาลัย</h2>
      <a href="create.php" class="btn register-btn" role="button">ลงทะเบียน</a>
    </div>

    <style>

    .hero-section {
        /*background-image: url('path-to-your-background-image.jpg');
        background-size: cover;*/
        background: linear-gradient(to right, #6B73FF, #000DFF); /* Adjust the colors to fit your design */
        color: #ffffff;
        background-position: center;
        color: #ffffff;
        text-shadow: 0 2px 4px rgba(0,0,0,0.5);
        padding: 100px 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    @keyframes gradientAnimation {
    0% {background-position: 0% 50%;}
    50% {background-position: 100% 50%;}
    100% {background-position: 0% 50%;}
    }

    .hero-section {
    background: linear-gradient(270deg, #6B73FF, #000DFF, #6B73FF);
    background-size: 200% 200%;
    animation: gradientAnimation 30s ease infinite;
    }
    @keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
    }

    .hero-section h1, .hero-section h2, .hero-section a {
    animation: fadeInUp 1s ease-out;
    }

    .hero-section h1 { animation-delay: 0.3s; }
    .hero-section h2 { animation-delay: 0.6s; }
    .hero-section a { animation-delay: 0.9s; }


    .hero-section h1 {
    font-size: 3.5rem;
    margin-bottom: 0.5em;
    font-weight: bold;
    }

    .hero-section h2 {
    font-size: 2rem;
    margin-bottom: 0.5em;
    }

    .btn.register-btn {
    padding: 15px 30px;
    background-color: #28a745; /* Bright green */
    border: none;
    border-radius: 5px;
    color: white;
    font-size: 1.5rem;
    transition: background-color 0.3s ease;
    text-decoration: none;
    margin-top: 20px;
    }

    .btn.register-btn:hover, .btn.register-btn:focus {
    background-color: #218838; /* Darker green */
    color: #ffffff;
    text-decoration: none;
    }

    /* Responsive typography */
    @media (max-width: 768px) {
    .hero-section h1 {
        font-size: 2.5rem;
    }

    .hero-section h2 {
        font-size: 1.5rem;
    }
    
    }
    .indented-text {
            text-indent: 40px; /* ย่อหน้าบรรทัดแรก 40 พิกเซล */
        }
    </style>
    <div class="container mt-3">
    <p class="card-text">
            
            <h6 class="indented-text">
              การพัฒนาเทคโนโลยีในการศึกษาในปี 2024 มีผลสำคัญต่อการเรียนการสอนโดยเฉพาะ โดยการทำให้เกิดสภาพแวดล้อมการเรียนการสอนที่มีประสิทธิภาพและน่าสนใจมากขึ้น 
              หลักการสำคัญรวมถึงความเข้าใจในการเรียนของนักเรียนและผู้เรียนที่หลากหลายมากขึ้น ซึ่งเทคโนโลยีได้รับการพัฒนาเพื่อให้เหมาะสมกับความสามารถและสไตล์การเรียนของแต่ละบุคคล 
              การเตรียมความพร้อมในการใช้เทคโนโลยีของครูและผู้สอนเป็นสิ่งสำคัญอีกด้วยเพื่อให้การใช้เทคโนโลยีในการสอนมีประสิทธิภาพมากยิ่งขึ้น และการเชื่อมโยงกับการจัดการเรียนการสอนอย่างมีประสิทธิภาพ 
              เช่น ผ่านระบบการจัดการเรียนการสอนออนไลน์ นั่นเป็นเพียงส่วนหนึ่งของการใช้เทคโนโลยีในการศึกษาเพื่อเสริมสร้างประสบการณ์การเรียนการสอนที่ดีขึ้นในอนาคต.
              </h6>
            </p>
            
            </div>
            
    <?php require_once("registration.php"); ?>
    <div class="container mt-3">
            <h3 class="card-title" >กำหนดการเข้าร่วม</h3>
            <h5 class="card-subtitle mb-2 text-muted">สำหรับผู้สมัครเข้าร่วมประชุม และผู้นำเสนอผลงาน</h5>
            </div>
    <?php require_once("schedule.php"); ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

