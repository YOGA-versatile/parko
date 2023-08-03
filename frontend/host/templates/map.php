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
                <div id="coordinates-container">Coordinates: </div>
                <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
            </div>
            <input type="text" class="form-control mb-2 mt-2" id="coordinates-container" readonly>
        </div>

        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" >Submit</button>
        </form>
    </div>

<!-- Add the Bootstrap JS and jQuery scripts -->
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