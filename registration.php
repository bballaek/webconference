<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pricing Table</title>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;600&display=swap" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<?php require_once ("php/header.php"); ?>
<style>
    body {
    font-family: 'Kanit', sans-serif;
    }
  .pricing-table {
    margin-top: 30px;
  }
  .pricing-card {
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 20px;
    margin: 10px;
    transition: transform 0.3s ease-in-out;
  }
  .pricing-card:hover {
    transform: scale(1.05);
  }
  .btn-select {
    border-color: #007bff;
    color: #007bff;
  }
  .btn-selected {
    background-color: #007bff;
    color: white;
  }
  .card-header {
    font-weight: bold;
    font-size: 1.5em;
    margin-bottom: 15px;
  }
  .card-price {
    font-weight: bold;
    color: #333;
    font-size: 2em;
    margin-bottom: 15px;
  }
  .pricing-table .row {
  display: flex;
}

.pricing-card {
  display: flex;
  flex-direction: column;
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 20px;
  margin: 5px;
  text-align: center;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.1);
  flex: 3; /* This will ensure that the flex child (pricing-card) takes up equal space */
}

.pricing-card .card-header {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 10px;
}

.pricing-card .card-price {
  font-size: 32px;
  margin-bottom: 10px;
}

.pricing-card ul {
  flex-grow: 1; /* This makes the unordered list grow to fill the space, pushing the button down */
}

.pricing-card .btn-select {
  margin-top: auto; /* This will push the button to the bottom */
}
html {
  height: 100%;
}

body {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  margin: 0;
}

.content {
  flex: 1;
}

.footer {
  width: 100%;
  /* Rest of your styles */
}

</style>

</head>
<body>
<div class="container mt-3">
            <h3 class="card-title" >อัตราค่าลงทะเบียน</h3>
            <h5 class="card-subtitle mb-2 text-muted">สำหรับผู้สมัครเข้าร่วมประชุม และผู้นำเสนอผลงาน</h5>
            </div>
<div class="container pricing-table">
  <div class="row d-flex">
    <!-- Basic Plan -->
    <div class="col-md-6 d-flex">
    <div class="pricing-card flex-fill" id="basicPlan">
        <div class="card-header">สำหรับผู้เข้าร่วม</div>
        <div class="card-price">฿500</div>
        <ul class="list-unstyled">
          <li>อาหารว่าง และอาหารกลางวัน</li>
          <li>ของที่ระลึกในงาน</li>
          
        </ul>
        <button class="btn btn-select" onclick="selectPlan('basic')">Select</button>
      </div>
    </div>

    <!-- Premium Plan -->
    <div class="col-md-6 d-flex">
        <div class="pricing-card flex-fill" id="premiumPlan">
        <div class="card-header">สำหรับผู้นำเสนอ</div>
        <div class="card-price">฿1000</div>
        <ul class="list-unstyled">
          <li>อาหารว่าง และอาหารกลางวัน</li>
          <li>ของที่ระลึกในงาน</li>
          <li>อุปกรณ์สำหรับนำเสนอ</li>
          <li>โซนสำหรับสำนำผู้นำเสนอ</li>
          <li>การโฆษณาสำหรับงานประชุม</li>
        </ul>
        <button class="btn btn-select" onclick="selectPlan('premium')">Select</button>
      </div>
    </div>
  </div>
</div>


<script>
  function selectPlan(plan) {
    const basicBtn = document.querySelector('#basicPlan .btn');
    const premiumBtn = document.querySelector('#premiumPlan .btn');
    
    if (plan === 'basic') {
      basicBtn.classList.add('btn-selected');
      basicBtn.textContent = 'Selected';
      premiumBtn.classList.remove('btn-selected');
      premiumBtn.textContent = 'Select';
      premiumBtn.classList.add('btn-select');
    } else if (plan === 'premium') {
      premiumBtn.classList.add('btn-selected');
      premiumBtn.textContent = 'Selected';
      basicBtn.classList.remove('btn-selected');
      basicBtn.textContent = 'Select';
      basicBtn.classList.add('btn-select');
    }
  }
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
