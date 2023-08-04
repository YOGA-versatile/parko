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
    <script src="vendor/assets/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/frontend/host/css/header.css">
    <link rel="stylesheet" href="/frontend/host/css/footer.css">
    <link rel="stylesheet" href="/frontend/host/css/index.css">
  </head>

<body>
  <!-- header -->
  {% include "header.php" %}

    <!-- jumbotron -->
    <div class="p-5 mb-4 rounded-3 jumbo-tron-container">
      <div class="container-fluid py-5 jumbo-tron">
        <h1 class="display-6 fw-bold">Hello Host</h1>
        <p class="col-md-8 fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, corporis enim, ex itaque temporibus laudantium sunt ab earum officiis eum laboriosam eius nam </p>
        <a class="btn btn-primary btn-lg" href="listing.php">Listing</a>
      </div>
    </div>

    <!-- control card -->
    <div class="container mt-4 custom-manage-card">
        <div class="card custom-manage-card">
            <div class="card-header">
                <!-- Button group 1 -->
                <!-- <div class="btn-group mr-2" role="group" id="buttonGroup1"> -->
                    <button type="button" class="btn btn-primary active" data-target="content1">present</button>
                    <button type="button" class="btn btn-primary" data-target="content2">upcoming</button>
                    <button type="button" class="btn btn-primary" data-target="content3">past</button>
                <!-- </div> -->

                <!-- Button group 2 -->
                <div class="btn-group mr-2" role="group" id="buttonGroup2">
                    <!-- Add more buttons here if needed -->
                </div>

                <!-- Button group 3 -->
                <div class="btn-group" role="group" id="buttonGroup3">
                    <!-- Add more buttons here if needed -->
                </div>
            </div>
            <div class="card-body">
                <div id="content1" class="content">
                    <div class="custom-card d-flex g-4">
                      <div class="row row-cols-3">

                        <div class="col">
                          <div class="card text-center mb-3 text-bg-success" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">Vehicle number</h5>
                              <h7 class="card-text">Vehicle type</h7><br>
                              <h7 class="card-text">Time</h7>
                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                          </div>
                        </div>

                        <div class="col">
                          <div class="card text-center mb-3 text-bg-success" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">Vehicle number</h5>
                              <h7 class="card-text">Vehicle type</h7><br>
                              <h7 class="card-text">Time</h7>
                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                          </div>
                        </div>

                        <div class="col">
                          <div class="card text-center mb-3 text-bg-success" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">Vehicle number</h5>
                              <h7 class="card-text">Vehicle type</h7><br>
                              <h7 class="card-text">Time</h7>
                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                </div>
                <div id="content2" class="content" style="display: none;">
                <div class="custom-card d-flex g-4">
                      <div class="row row-cols-3">

                        <div class="col">
                          <div class="card text-center mb-3 text-bg-info" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">Vehicle number</h5>
                              <h7 class="card-text">Vehicle type</h7><br>
                              <h7 class="card-text">Time</h7>
                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                          </div>
                        </div>

                        <div class="col">
                          <div class="card text-center mb-3 text-bg-info" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">Vehicle number</h5>
                              <h7 class="card-text">Vehicle type</h7><br>
                              <h7 class="card-text">Time</h7>
                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                          </div>
                        </div>

                        <div class="col">
                          <div class="card text-center mb-3 text-bg-info" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">Vehicle number</h5>
                              <h7 class="card-text">Vehicle type</h7><br>
                              <h7 class="card-text">Time</h7>
                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                <div id="content3" class="content" style="display: none;">
                <div class="custom-card d-flex g-4">
                      <div class="row row-cols-3">

                        <div class="col">
                          <div class="card text-center mb-3 text-bg-secondary" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">Vehicle number</h5>
                              <h7 class="card-text">Vehicle type</h7><br>
                              <h7 class="card-text">Time</h7>
                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                          </div>
                        </div>

                        <div class="col">
                          <div class="card text-center mb-3 text-bg-secondary" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">Vehicle number</h5>
                              <h7 class="card-text">Vehicle type</h7><br>
                              <h7 class="card-text">Time</h7>
                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                          </div>
                        </div>

                        <div class="col">
                          <div class="card text-center mb-3 text-bg-secondary" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">Vehicle number</h5>
                              <h7 class="card-text">Vehicle type</h7><br>
                              <h7 class="card-text">Time</h7>
                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {% include "footer.php" %}
    <!-- Add the Bootstrap JS and jQuery scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            // Handle button clicks to show the corresponding content
            $('.btn').on('click', function() {
                var targetContent = $(this).data('target');
                $('.content').hide();
                $('#' + targetContent).show();
                $('.btn').removeClass('active');
                $(this).addClass('active');
            });
        });

        
    </script>


</body>
