<?php
include "../libs/load.php";
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="generator" content="Hugo 0.112.5">
  <title>Your Page Title</title>
  <!-- Bootstrap CSS (CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!-- Bootstrap Icons (CDN) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Heebo' rel='stylesheet'>
  <!-- BaguetteBox CSS (CDN) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
  <!-- Your Custom CSS Files -->
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/reserve.css">
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <!-- Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
  <!-- Bootstrap JS (CDN) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <!-- BaguetteBox JS (CDN) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
</head>


<body> 
  <?php load_temp("header.php"); ?> 
  <div class="container mt-3">
    <div class="mb-4 rounded-3 jumbo-tron-container">
      <div class="container-fluid jumbo-tron">
        <div class="row align-items-center justify-content-between">
          <div class="col-md-8">
            <h1 class="fw-bold">RAM Parkings</h1>
            <!-- <a class="btn btn-primary btn-lg" href="listing.php">Listing</a> -->
            <div class="rating-info d-flex align-items-center">
              <div id="rating-container" class="align-items-center">
                <span id="star-container"></span>
                <span id="rating-count">(1307)</span>
              </div>
              <h6 class="mb-0 ms-2">Madurai, India</h6>
            </div>
          </div>
          <div class="col-md-4 text-end">
            <i class="bi bi-bookmark"></i>
          </div>
        </div>
        <div class="row gallery">
          <div class="col-sm-6 col-md-4 col-lg-4">
            <a href="../asset/pics/parko.png">
              <img class="img-fluid" src="../asset/pics/parko.png">
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4">
            <a href="../asset/pics/parko.png">
              <img class="img-fluid" src="../asset/pics/parko.png">
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4">
            <a href="../asset/pics/parko.png">
              <img class="img-fluid" src="../asset/pics/parko.png">
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4">
            <a href="../asset/pics/sample.png">
              <img class="img-fluid" src="../asset/pics/sample.png">
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4">
            <a href="../asset/pics/sample.png">
              <img class="img-fluid" src="../asset/pics/sample.png">
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4">
            <a href="../asset/pics/sample.png">
              <img class="img-fluid" src="../asset/pics/sample.png">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div> 

  <div class="container mt-1">
  <h2 class="mb-1">Host - RAM</h2>
  <hr>
  <a><span class="badge bg-primary">Private Residential</span> <span class="badge bg-info">Subscription</span> <span class="badge bg-success">Current</span></a>
  <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem consequatur culpa nesciunt tempore expedita quibusdam maiores, unde quidem.</p>
  <hr>

  
  <!-- Display text in a card with a border and shadow -->

  
  <h5>Amenities available</h5>
  <ul class="list-group">
    <li class="list-group-item"><img src="../asset/icons/cctv.png" style="height:25px;"> Security Camera</li>
    <li class="list-group-item"><img src="../asset/icons/dust.png" style="height:25px;"> Dust Free Zone</li>
    <li class="list-group-item"><img src="../asset/icons/air.png" style="height:25px;"> Free Air</li>
    <li class="list-group-item"><img src="../asset/icons/wash.png" style="height:25px;"> Vehicle Wash</li>
    <li class="list-group-item"><img src="../asset/icons/cover.png" style="height:25px;"> Four Wheeler Cover</li>
    <li class="list-group-item"><img src="../asset/icons/lock.png" style="height:25px;"> Two Wheeler Lock</li>
    <li class="list-group-item"><img src="../asset/icons/charger.png" style="height:25px;"> E-Vehicle Charge Point</li>
    <li class="list-group-item"><img src="../asset/icons/helmet.png" style="height:25px;"> Helmet Rack</li>
    <li class="list-group-item"><img src="../asset/icons/vault.png" style="height:25px;"> Locker Facility</li>
  </ul>
  <div class="card mb-2 mt-2">
    <div class="card-body">
      <h4>Address</h4>
      <p>644 A2/5 6th street,</p>
      <p>MAdurai City</p>
      <p>Madurai</p>
      <p>Pin : 628501</p>
    </div>
  </div>
  <div class="card mt-2 mb-2">
    <div class="card-body">
      <h4>Location</h4>
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
</div>
<div class="container checkout mb-3 mt-3">
<div class="fixed">
    <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#checkoutModal">Checkout</button>
  </div>
</div>




<div class="modal fade" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="checkoutModalLabel">Reservation Form</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="vehicleType" class="form-label">Select Vehicle Type:</label>
                        <select class="form-select" id="vehicleType" required>
                            <option value="heavy">Heavy Four Wheeler</option>
                            <option value="normal">Four Wheeler</option>
                            <option value="two-wheeler">Motor Two Wheeler</option>
                            <option value="bicycle">Bicycle</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="startDate" class="form-label">Start Date:</label>
                        <input type="date" class="form-control" id="startDate" min="<?= date('Y-m-d') ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="startTime" class="form-label">Start Time:</label>
                        <input type="time" class="form-control" id="startTime" min="<?= date('H:i', strtotime('+1 hour')) ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="endDate" class="form-label">End Date:</label>
                        <input type="date" class="form-control" id="endDate" min="<?= date('Y-m-d', strtotime('+1 day')) ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="endTime" class="form-label">End Time:</label>
                        <input type="time" class="form-control" id="endTime" min="<?= date('H:i', strtotime('+2 hours')) ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="cost" class="form-label">Cost:</label>
                        <input type="text" class="form-control" id="cost" readonly>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="calculateCost()">Calculate Cost</button>
                </form>
            </div>
            <div class="modal-footer">
                <!-- Footer content if needed... -->
            </div>
        </div>
    </div>
</div>





  <?php load_temp("footer.php"); ?> 
  <script src="../js/reserve.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>