<?php
include "../libs/load.php";
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <script src="../vendor/assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="generator" content="Hugo 0.112.5">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <link href="../vendor/assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href='https://fonts.googleapis.com/css?family=Heebo' rel='stylesheet'>
  <script src="../vendor/assets/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/profile.css">
</head>

<body>
  <?php load_temp("header.php"); ?>
  <main>
    <div class="container jumbo-tron">
      <img height="100px" src="../asset/pics/profile.png">
      <h1 class="display-6 fw-bold">Hello Host</h1>
      <div id="rating-container" class="align-items-center">
        <span id="star-container"></span>
        <span id="rating-count">(1307)</span>
      </div>
    </div>
    <div class="container mt-5 prof-monetize">
    <div class="row mt-2">
      <div class="col-md-6">
        <div class="mb-3">
          <label for="selectMonth" class="form-label">Select Month:</label>
          <select id="selectMonth" class="form-select">
            <!-- Options for months will be generated dynamically -->
          </select>
        </div>
      </div>
      <div class="col-md-6">
        <div class="mb-3">
          <label for="selectYear" class="form-label">Select Year:</label>
          <select id="selectYear" class="form-select">
            <!-- Options for years will be generated dynamically -->
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
      <h4 class="mt-3">Parkings</h4>
        <p id="number1" class="bg-light p-2">Four-wheelers : 102</p>
        <p id="number1" class="bg-light p-2">Two-wheelers : 737</p>
        <p id="number1" class="bg-light p-2">Bicycle : 321</p>
      </div>
      <div class="col-md-6">
      <h4 class="mt-3">Earnings</h4>
        <p id="number2" class="bg-light p-2">Service Charge : - ₹2586</p>
        <p id="number2" class="bg-light p-2">GST : - ₹1760.22</p>
        <p id="number2" class="bg-light p-2">Net Earnings : ₹8018.78</p>
      </div>
    </div>
  </div>
  <div class="container mt-3 prof-monetize">
      <h3 style="text-align:center;" class="mt-1 mb-1">COMMENTS</h3>
      <hr>
    <div class="row row-cols-1 mb-2">
      <div class="col-12 mb-2 mt-2">
        <div class="container comment-container">
          <h5 class="bg-1 mt-1">Ram</h5>
          <p class="bg-2 p-2">Easy to park</p>
        </div>
      </div>
    </div>
    <div class="row row-cols-1">
      <div class="col-12 mb-2 mt-2">
        <div class="container comment-container">
          <h5 class="bg-1 mt-1">Yoga</h5>
          <p class="bg-2 p-2">Safe parking </p>
        </div>
      </div>
    </div>
  </div>
  </main>
  <?php load_temp("footer.php"); ?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="../js/profile.js"></script>
</body>

