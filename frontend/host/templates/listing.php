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
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <link href="../vendor/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link href='https://fonts.googleapis.com/css?family=Heebo' rel='stylesheet'>
    <script src="vendor/assets/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/listing.css">
  </head>


<body>
  <!-- header -->
    <?php load_temp("header.php"); ?>

    <div class="container mt-4">
    <div class="row">
      <div class="col">
        <button id="addCardBtn" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inputModal">SPACE +</button>
      </div>
    </div>
    <div class="row mt-4" id="cardsContainer">
      <!-- Existing cards will be appended here dynamically -->
    </div>
    <div class="row mt-4">
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Details Summary</h5>
            <div id="detailsSummary"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal for input form -->
  <div class="modal fade " id="inputModal" tabindex="-1" aria-labelledby="inputModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="inputModalLabel">New Space</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form onsubmit="return onSubmitForm(this);">
            <div class="mb-2">
              <label for="spaceName" class="form-label">Name of your space</label>
              <input type="text" class="form-control" id="spaceName" required>
            </div>
            <div class="mb-2">
              <label for="spaceSize" class="form-label">Space Size in Sq meter</label>
              <input type="number" class="form-control" min="1" id="spaceSize" required>
            </div>
            <div class="mb-2">
              <label for="spaceAddress" class="form-label">Address</label>
              <input type="text" class="form-control" id="spaceAddress" required>
            </div>
            <div class="mb-2">
              <label for="spacePincode" class="form-label">Pin Code</label>
              <input type="number" class="form-control" min="100000" max="999999" id="spacePincode" required>
            </div>


            <div class="mb-2">
              <label for="mapLocation" class="form-label">Location</label>
              <input type="text" class="form-control mb-2" id="mapLocation" readonly>
              <button type="button" class="btn btn-secondary mb-2" data-bs-toggle="modal" data-bs-target="#mapModal">Get Location</button>

              <div class="modal fade" id="mapModal" tabindex="-1" aria-labelledby="mapModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-fullscreen">
                      <div class="modal-content">
                      <div class="modal-header">
                          <h1 class="modal-title fs-5" id="mapModalLabel">Payment</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <!-- <div id="map" style="height:50vh"></div>
                        <div id="coordinates-container">Coordinates: </div> -->
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat assumenda, neque possimus aliquid tempora, quisquam tenetur, laudantium deserunt minus ex reiciendis dolores aperiam commodi eos? Ipsam hic aut distinctio placeat!
                      </div>
                      <div class="modal-footer">
                          <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                          <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                      </div>
                      </div>
                  </div>
              </div>


            </div>
            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
    <?php load_temp("footer.php"); ?>
    <!-- Add the Bootstrap JS and jQuery scripts -->
    <script src="../js/listing.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    

</body>
