<!doctype html>
<html lang="th">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FAQ - AcadMeet</title>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;600&display=swap" rel="stylesheet">
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <link href="./css/style.css" rel="stylesheet">
  <?php require_once ("php/header.php"); ?>
  <!doctype html>
<html lang="th" class="h-100">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Help Center - AcadMeet</title>
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
    font-family: 'Kanit', sans-serif;
    }
    .sidebar {
      border-right: 1px solid #dee2e6;
    }
    .sidebar-link {
      display: block;
      padding: 0.5rem 1rem;
      color: #495057;
      text-decoration: none;
    }
    .sidebar-link:hover {
      text-decoration: none;
      background-color: #f8f9fa;
    }
    .sidebar-link.active {
      font-weight: bold;
      background-color: #e9ecef;
    }
    .faq-section-title {
      padding-top: 1rem;
    }
    .accordion-button {
      background-color: white;
      color: #212529;
    }
    .accordion-button:not(.collapsed) {
      color: #495057;
      background-color: #e9ecef;
      box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .125);
    }
    html {
    scroll-behavior: smooth;
    }

  </style>
    </head>
    <body>
    <div class="container mt-4">
    <h1 class="mb-4">Help Center</h1>
    <div class="row">
        <div class="col-md-3 sidebar">
            <a href="#Help-section" class="sidebar-link">User Help</a>
            <a href="#advertising-section" class="sidebar-link">Advertising Help</a>
            <a href="contact.php">ติดต่อ</a>
        </div>

    <div class="col-md-9">
    <div id="Help-section">
    <h2 class="faq-section-title">FAQ for Users</h2>
    </div>
      
    <!-- FAQ Section -->
<div class="accordion" id="faqAccordion">

<!-- FAQ Item 1 -->
<div class="accordion-item">
  <h2 class="accordion-header" id="headingOne">
    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
    หากต้องการยกเลิกสามารถขอเงินคืนได้ไหม ?
    </button>
  </h2>
  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
    <div class="accordion-body">
    ไม่สามารถยกเลิกได้ แต่สามารถโอนสิทธิ์การเข้าร่วมงานประชุมให้ผู้อื่นแทนได้ โดยใช้สำเนาบัตรประชาชนผู้โอนสิทธิ์แสดงหน้างาน
    </div>
  </div>
</div>

<!-- FAQ Item 2 -->
<div class="accordion-item">
  <h2 class="accordion-header" id="headingTwo">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
    ฉันจะได้รับประโยชน์อะไรจากการเข้าร่วมประชุมนี้ ?
    </button>
  </h2>
  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
    <div class="accordion-body">
    การใช้เทคโนโลยีเพื่อเสริมสร้างประสบการณ์การเรียนการสอน ที่ดียิ่งขึ้นสำหรับทุกคนในระบบการศึกษา
    </div>
  </div>
</div>

</div>

      
      <h2 class="faq-section-title">FAQ for Advertisers</h2>
      <div class="accordion" id="advertiserFaqAccordion">
            <!-- FAQ Section -->
<div class="accordion" id="faqAccordion">

<!-- FAQ Item 1 -->
<div class="accordion-item">
  <h2 class="accordion-header" id="headingOne">
    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
    หากเอกสารการวิจัยไม่ได้รับการอนุมัติจะได้รับเงินคืนหรือไม่ ?
    </button>
  </h2>
  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
    <div class="accordion-body">
    ไม่ได้ โอนแล้วโอนเลย โอกาสหน้ามาใหม่จ้า
    </div>
  </div>
</div>

<!-- FAQ Item 2 -->
<div class="accordion-item">
  <h2 class="accordion-header" id="headingTwo">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
    เอกสารนำเสนอทางหน่วยงานจะจัดเตรียมให้หรือไม่ ?
    </button>
  </h2>
  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
    <div class="accordion-body">
    หน่วยงานจะจัดเตรียมเอกสารการนำเสนอให้ ตามที่ผู้สมัครได้ส่งมา
    </div>
  </div>
</div>


</div>

    </id=>
  </div>
</div>
<?php require_once("php/footer.php"); ?>
<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>
