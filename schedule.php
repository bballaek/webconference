<!doctype html>
<html lang="th" class="h-100">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Conference Schedule - AcadMeet</title>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;600&display=swap" rel="stylesheet">
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <link href="./css/style.css" rel="stylesheet">
  <?php require_once ("php/header.php"); ?>

  <style>
    body {
    font-family: 'Kanit', sans-serif;
    }
    .schedule {
      margin-top: 20px;
    }
    .time-slot {
      padding: 10px;
      border-left: 3px solid #008bff;
      margin-bottom: 10px;
      background-color: #E8E8EB;
      border-radius: 5px;
    }
    .time-slot h5 {
      color: #007bff;
      margin-top: 0;
    }
    .time-slot p {
      margin-bottom: 0;
    }
  </style>
</head>
<body>
  
  <div class="container schedule">
    <!-- <h2 class="text-center mt-4">Conference Schedule</h2>
    <h2 class="text-center mt-1">กำหนดหารประชุม</h2> -->
    
    <div class="time-slot">
      <h6>9.00 - 10.00 น</h6>
      <h5><p>Keynote Speaker</p></h5>
    </div>

    <div class="time-slot">
      <h6>10.00 - 12.00 น</h6>
      <h5><p>Presentation & Poster Presentation</p></h5>
    </div>

    <div class="time-slot">
      <h6>12.00 - 13.00 น</h6>
      <h5><p>Lunch</p></h5>
    </div>

    <div class="time-slot">
      <h6>13.00 - 14.00 น</h6>
      <h5><p>Keynote Speaker 2</p></h5>
    </div>

    <div class="time-slot">
      <h6>14.00 - 16.00 น</h6>
      <h5><p>Presentation & Poster Presentation</p></h5>
    </div>
  </div>


</body>
</html>
