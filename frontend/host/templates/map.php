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
    <link rel="stylesheet" href="../css/map.css">
    </script><link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="style.css"/>
    <title>MapHost</title>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://unpkg.com/@turf/turf@6.5.0"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />



</head>
<body>
    <div class="container custom-container">
        <form class="custom-form">
        <div class="mb-2 custom-dropdown">
            <label for="userType">Types of User:</label>
            <select class="form-select" id="userType" name="userType">
                <option value="public">Public</option>
                <option value="publicContracted">Public Contracted</option>
                <option value="privateCommercial">Private Commercial</option>
                <option value="privateNonCommercial">Private Non-Commercial</option>
            </select>
        </div>


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
            <div class="container-map">
                <div id="map" style="height:50vh"></div>
                <input type="text" class="form-control mb-2 mt-2" id="coordinates-container"readonly>
                <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
            </div>
            
        </div>

        <div class="mb-2">
            <div class="row g-3 align-items-center">
                <div class="col-6">
                    <label for="spaceLength" class="col-form-label">Space Length</label>
                    <input type="number" id="spaceLength" class="form-control"  min=15 required>
                </div>
                <div class="col-6">
                    <label for="spaceWidth" class="col-form-label">Space Width</label>
                    <input type="number" id="spaceWidth" class="form-control"  min=7 required>
                </div>
            </div>
        </div>

        <div class="mb-2">
            <label for="spaceFileMultiple" class="form-label">Multiple files input example</label>
            <input class="form-control" type="file" id="spaceFileMultiple" multiple>
        </div>
        <div id="error-msg" style="color: red;"></div>

        <div class="mb-2">
            <div class="row g-3 align-items-center">
                <div class="col-6">
                    <label for="spaceSurvey" class="form-label">Survey Number</label>
                    <input class="form-control" type="text" id="spaceSurvey" required>
                </div>
                <div class="col-6">
                    <label for="spaceAdhar" class="form-label">Adhar associated with the land</label>
                    <input class="form-control" type="number" id="spaceAdhar" required>
                </div>
            </div>
        </div>


        <!-- HTML -->
        <div class="mb-2 custom-dropdown">
    <label for="multipleOptions">Amenities Provided:</label>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Select Options
        </button>
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
        </div>
    </div>
</div>

        <div class="mb-2 mt-2 custom-checkboxes">
            <label for="parkingTypes">Types of Parkings:</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="subscriptionUser" value="subscriptionUser">
                <label class="form-check-label" for="subscriptionUser">Subscription User</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="currentUser" value="currentUser">
                <label class="form-check-label" for="currentUser">Current User</label>
            </div>
        </div>

        <div class="mb-2">
            <label for="spaceInstructions" class="form-label">Add instructions for the Guest</label>
            <input type="textarea" class="form-control" id="spaceInstructions" required>
        </div>

        <p>By clicking the 'Submit' button, you confirm that all the details are correct and accurate to the best of your knowledge. And also you agree to the <a href="#">security policy</a> and assure are not violating the terms and conditions. Thank you for providing the necessary information.</p>


        <button id="submit" type="submit" class="btn btn-primary mt-2" onclick="validateFiles()">Submit</button>
        </form>
    </div>


<script src="../js/map.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    var map = L.map('map').setView([9.939093, 78.121719], 10);
    if ("geolocation" in navigator) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var x = position.coords.latitude;
            var y = position.coords.longitude;
            map.setView([x, y], 10);
            var userMarker = L.marker([x, y], { draggable: true }).addTo(map).bindPopup("Your Location");
            var userCoordinates = { lat: x, lng: y };
            var flag=0;
            var geocoder = L.Control.geocoder({
                defaultMarkGeocode: false
            }).on('markgeocode', function(e) {
                map.eachLayer(function(layer) {
                    if (layer instanceof L.Marker) {
                        map.removeLayer(layer);
                    }
                });
                var marker = L.marker(e.geocode.center, { draggable: true }).addTo(map);
                marker.bindPopup(e.geocode.name).openPopup();
                map.setView(e.geocode.center, 13);
                function updateCoordinates() {
                    var coordinatesContainer = document.getElementById('coordinates-container');
                    coordinatesContainer.textContent = marker.getLatLng().lat + ', ' + marker.getLatLng().lng;
                    if(flag==0){
                        coordinatesContainer.textContent = userMarker.getLatLng().lat + ', ' + userMarker.getLatLng().lng;
                    }
                }marker.on('move', function(e) {
                    flag=1;
                    if(flag==1){
                        updateCoordinates();
                    }
                });
                updateCoordinates();
            }).addTo(map);

        },function(error) {
            console.error("Error getting user's location:", error.message);
        });
    } else {
      console.error("Geolocation is not supported in this browser.");
    }var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
      maxZoom: 20,
      subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    });
    googleStreets.addTo(map);
</script>

</body>