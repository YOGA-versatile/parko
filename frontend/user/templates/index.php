<?php
include "../libs/load.php";
?>
  <!DOCTYPE html>
  <html lang="en" data-bs-theme="auto">
    <head>
      <script src="../vendor/assets/js/color-modes.js"></script>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="generator" content="Hugo 0.112.5">
		<link rel="shortcut icon" type="image/x-icon" href="../asset/icons/icon.ico" />
		<title>Parko</title>
		<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="Expires" content="0" />
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
      <link href="../vendor/assets/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
		<link href="https://fonts.googleapis.com/css?family=Albert+Sans" rel="stylesheet" />
      <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
      <script src="https://unpkg.com/@turf/turf@6.5.0"></script>
      <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
      </script>
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
      <link rel="stylesheet" href="../css/header.css">
      <link rel="stylesheet" href="../css/footer.css">
      <link rel="stylesheet" href="../css/index.css">
    </head>
    <body data-bs-scheme="light">
      <?php load_temp("header.php"); ?> 
      <div class="container search-space mt-4">
      <div class="row">
        <div class="col-8">
          <form class="d-flex">
          <label for="searchSpace" class="visually-hidden">Search</label>
<input type="text" class="form-control me-1 search-box" id="searchSpace" placeholder="Search a city.." list="datalistOptions">
<datalist id="datalistOptions">
    <option value="Madurai">
    <option value="Chennai">
    <option value="Kovilpatti">
</datalist>
            <button type="submit" class="btn btn-primary bi bi-search search-button"></button>
          </form>
        </div>
        <div class="col-4">
          <form class="d-flex">
            <button type="button" class="btn btn-primary bi bi-filter filter-button" data-bs-toggle="modal" data-bs-target="#filterModal"> Filters</button>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade filter-modal" id="filterModal" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="filterModalLabel">Filters</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="container mt-4">
                <div class="mb-2 custom-dropdown">
                  <label for="userType">Types of Parking:</label>
                  <select class="form-select" id="parkType" name="userType" required>
                    <option value="public">Public</option>
                    <option value="publicContracted">Public Contracted</option>
                    <option value="privateCommercial">Private Commercial</option>
                    <option value="privateNonCommercial">Private Non-Commercial</option>
                  </select>
                </div>
                <hr>
                <div class="mb-2 custom-dropdown">
                  <label for="userType">Types of Vehicle:</label>
                  <select class="form-select" id="vehicle" name="userType">
                    <option value="car">Car</option>
                    <option value="heavyVehicle">Heavy Vehicle</option>
                    <option value="motorWheeler">Motor Two Wheeler</option>
                    <option value="bicycle">Bicycle</option>
                  </select>
                </div>
                <hr>
                <div class="mb-3">
                  <label for="maxPrice" class="form-label">Max Price:</label>
                  <input type="number" class="form-control" id="maxPrice" name="maxPrice" min="2" max="100" step="2" value="100" placeholder="Enter maximum price">
                </div>
                <hr>
                <div class="container mt-4">
                  <div class="mb-2 custom-dropdown">
                    <label for="multipleOptions">Amenities :</label>
                    <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownAmenities" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Select Options </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="option1" value="option1">
                          <label class="form-check-label" for="option1">Security Camera</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="option2" value="option2">
                          <label class="form-check-label" for="option2">Dust Free Zone</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="option3" value="option3">
                          <label class="form-check-label" for="option3">Free Air</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="option4" value="option4">
                          <label class="form-check-label" for="option4">E-Vehicle Charge Point</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="option5" value="option5">
                          <label class="form-check-label" for="option5">Vehicle Wash</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="option6" value="option6">
                          <label class="form-check-label" for="option6">Puncture Works</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="option7" value="option7">
                          <label class="form-check-label" for="option7">Two Wheeler Lock</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="option8" value="option8">
                          <label class="form-check-label" for="option8">Four Wheeler Cover</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="option9" value="option9">
                          <label class="form-check-label" for="option9">Helmet Storage</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="option10" value="option10">
                          <label class="form-check-label" for="option10">Locker Facility</label>
                        </div>
                        < </div>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <button style="text-align:center;" type="submit" class="btn btn-primary filter-submit" data-bs-dismiss="modal">Apply</button>
                </div>
            </form>
          </div>
        </div>
        
      </div>
    </div>
    <div class="container mt-4 ">
      <div class="card list-container">
        <div class="card-header">
          <button type="button" class="btn btn-primary bi bi-list-task show-button" id="showList" data-target="content1"> Show List</button>
          <button type="button" class="btn btn-primary bi bi-map show-button" id="showMap" data-target="content2"> Show Map</button>
        </div>
        <div class="card-body">
          <div id="content1" class="content" style="display: none;">
            <div class="card mb-2 mt-1 book-card light custom-card">
              <div class="card-header"> RAM Parking </div>
              <div class="card-body">
                <p class="card-text">Private Commercial</p>
                <p class="card-text">₹5 per hour</p>
                <div id="rating-container" class="align-items-center">
                  <span id="star-container"></span>
                  <span id="rating-count">(1307)</span>
                </div>
                
                <a href="reserve.php" class="btn btn-info card-button">More</a>
                <a href="map.php?lat=9.9315573&lon=78.1022729" class="btn btn-primary card-button">Directions</a>
              </div>
            </div>

            <div class="card mb-2 mt-1 book-card light custom-card">
              <div class="card-header"> Yoga Parking </div>
              <div class="card-body">
                <p class="card-text">Private Residential</p>
                <p class="card-text">₹69 per hour</p>
                <div id="rating-container" class="align-items-center">
                  <span id="star-container"></span>
                  <span id="rating-count">(10907)</span>
                </div>
                <a href="reserve.php" class="btn btn-info card-button">More</a>
                <a href="map.php?lat=9.9315573&lon=78.1022729" class="btn btn-primary card-button">Directions</a>
              </div>
            </div>
            
          </div>
          <div id="content2" class="content">
            <div class="container-map">
              <div id="map" style="height:75vh"></div>
              <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
            </div>
          </div>
        </div>
      </div>
    </div> 
    <?php load_temp("footer.php"); ?>
    <!-- Add the Bootstrap JS and jQuery scripts -->
    <script src="../js/map.js"></script>
    <script src="../js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>

// $(document).ready(function() {
//     $('#searchSpace').on('input', function() {
//         var userInput = $(this).val();
//         var validValues = $('#datalistOptions option').map(function() {
//             return $(this).val();
//         }).get();

//         if (!validValues.includes(userInput)) {
//             $(this).val('');
//         }
//     });
// });
$(document).ready(function() {
    $('#searchSpace').on('input', function() {
        var userInput = $(this).val().toLowerCase();
        var validValues = $('#datalistOptions option').map(function() {
            return $(this).val().toLowerCase();
        }).get();

        if (!validValues.includes(userInput)) {
            $(this).val(userInput);
        }
    });
});




      
 const darkModeSwitch = document.getElementById('dark-mode-switch');
                const body = document.body;
                const moonIcon = document.getElementById('moon-icon');
                const sunIcon = document.getElementById('sun-icon');

                // Function to toggle dark mode styles
                function toggleDarkMode() {
                    if (darkModeSwitch.checked) {
                        body.setAttribute('data-bs-scheme', 'dark');
                        toggleElementsLightToDark();
                        moonIcon.style.display = 'none';
                        sunIcon.style.display = 'inline-block';
                    } else {
                        body.setAttribute('data-bs-scheme', 'light');
                        // Function to toggle elements from light to dark
        toggleElementsDarkToLight();
                        moonIcon.style.display = 'inline-block';
                        sunIcon.style.display = 'none';
                    }
                }

                // Toggle elements from dark to light
                function toggleElementsDarkToLight() {
                    const elements = document.querySelectorAll('.dark');
                    elements.forEach(element => {
                        element.classList.remove('dark');
                        element.classList.add('light');
                    });
                }

                // Toggle elements from light to dark
                function toggleElementsLightToDark() {
                    const elements = document.querySelectorAll('.light');
                    elements.forEach(element => {
                        element.classList.remove('light');
                        element.classList.add('dark');
                    });
                }

                // Call the function on page load
                toggleDarkMode();

                // Listen for dark mode switch changes
                darkModeSwitch.addEventListener('change', toggleDarkMode);





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
      const priceRangeInput = document.getElementById('priceRange');
      const minPriceInput = document.getElementById('minPrice');
      const maxPriceInput = document.getElementById('maxPrice');
      priceRangeInput.addEventListener('input', () => {
        const selectedPrice = priceRangeInput.value;
        minPriceInput.value = selectedPrice;
        maxPriceInput.value = selectedPrice === "1000000" ? "1000000+" : selectedPrice;
      });
      const button1 = document.getElementById('showList');
      const button2 = document.getElementById('showMap');
      const content1 = document.getElementById('content1');
      const content2 = document.getElementById('content2');
      button1.addEventListener('click', () => {
        content1.style.display = 'block';
        content2.style.display = 'none';
        button1.classList.add('active');
        button2.classList.remove('active');
      });
      button2.addEventListener('click', () => {
        content1.style.display = 'none';
        content2.style.display = 'block';
        button1.classList.remove('active');
        button2.classList.add('active');
      });
      var map = L.map('map').setView([9.939093, 78.121719], 10);
      if ("geolocation" in navigator) {
        navigator.geolocation.getCurrentPosition(function(position) {
          var x = position.coords.latitude;
          var y = position.coords.longitude;
          map.setView([x, y], 10);
          var userMarker = L.marker([x, y], {
            draggable: true
          }).addTo(map).bindPopup("Your Location");
          var userCoordinates = {
            lat: x,
            lng: y
          };
          var flag = 0;
          var geocoder = L.Control.geocoder({
            defaultMarkGeocode: false
          }).on('markgeocode', function(e) {
            map.eachLayer(function(layer) {
              if (layer instanceof L.Marker) {
                map.removeLayer(layer);
              }
            });
            var marker = L.marker(e.geocode.center, {
              draggable: true
            }).addTo(map);
            marker.bindPopup(e.geocode.name).openPopup();
            map.setView(e.geocode.center, 13);

            function updateCoordinates() {
              var coordinatesContainer = document.getElementById('coordinates-container');
              coordinatesContainer.textContent = marker.getLatLng().lat + ', ' + marker.getLatLng().lng;
              if (flag == 0) {
                coordinatesContainer.textContent = userMarker.getLatLng().lat + ', ' + userMarker.getLatLng().lng;
              }
            }
            marker.on('move', function(e) {
              flag = 1;
              if (flag == 1) {
                updateCoordinates();
              }
            });
            updateCoordinates();
          }).addTo(map);
        }, function(error) {
          console.error("Error getting user's location:", error.message);
        });
      } else {
        console.error("Geolocation is not supported in this browser.");
      }
      var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
      });
      googleStreets.addTo(map);


      



     
    </script>
    </body>

    