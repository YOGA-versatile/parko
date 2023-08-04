/*const x1 = 13.067439, y1 = 80.237617;
var map = L.map('map').setView([9.939093,78.121719], 10);
if ("geolocation" in navigator) {
    navigator.geolocation.getCurrentPosition(function(position) {
        var x = position.coords.latitude;
        var y = position.coords.longitude;
        map.setView([x,y], 10);
        var userMarker = L.marker([x,y]).addTo(map).bindPopup("Your Location");
        var userCoordinates = { lat: x, lng: y };
  console.log(markerarray);
  }, function(error) {
    console.error("Error getting user's location:", error.message);
  });
} else {
  console.error("Geolocation is not supported in this browser.");
}
/*L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);*/
/*googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
    maxZoom: 20,
    subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
});
googleStreets.addTo(map);*/

//map.dragging.disable();
// Add OpenStreetMap tiles to the map
// Add Google Streets tiles as another layer (optional)

//console.log("hi")




/*var myLatLng = L.latLng(x,y);

for (var i = 0; i < markerarray.length; i++) {
    var marker = markerarray[i];
    marker.addTo(map);

//var startingMarker = L.marker([51.5, -0.09]).addTo(map);/

// Click event handler for the marker
marker.on('click', function () {
  // Get the destination coordinates (marker's position)
  var destinationLatLng = marker.getLatLng();


  // Create the routing control and add it to the map
  var control = L.Routing.control({
    waypoints: [myLatLng, destinationLatLng], // Show route while dragging the marker
  }).addTo(map);
})};

/*var destinationMarker;

// Click event handler for the map
map.on('click', function (event) {
  var destinationLatLng = event.latlng;

  // Remove the previous destination marker, if it exists
  //if (destinationMarker) {
    //map.removeLayer(destinationMarker);
  //}

  // Create the destination marker at the clicked point
  //destinationMarker = L.marker(destinationLatLng).addTo(map);

  // If you have a starting marker and want to calculate the route from the starting marker to the destination marker
  // var startingLatLng = L.latLng(51.5, -0.09);
  // var control = L.Routing.control({
  //   waypoints: [startingLatLng, destinationLatLng],
  // }).addTo(map);
    var latitude = destinationLatLng.lat;
    var longitude = destinationLatLng.lng;
  // If you want to calculate the route from the current location (geolocation) to the destination marker
  var control = L.Routing.control({
        waypoints: [
            L.latLng(x, y),     // Starting point (current location will be determined later)
            L.latLng(latitude,longitude)    // Destination point
        ]
    }).addTo(map);
});*/




var map = L.map('map').setView([9.939093, 78.121719], 10);
if ("geolocation" in navigator) {
    navigator.geolocation.getCurrentPosition(function (position) {
        var x = position.coords.latitude;
        var y = position.coords.longitude;
        map.setView([x, y], 10);
        var userMarker = L.marker([x, y], { draggable: true }).addTo(map).bindPopup("Your Location");
        var userCoordinates = { lat: x, lng: y };
        var flag = 0;
        var geocoder = L.Control.geocoder({
            defaultMarkGeocode: false
        }).on('markgeocode', function (e) {
            map.eachLayer(function (layer) {
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
                if (flag == 0) {
                    coordinatesContainer.textContent = userMarker.getLatLng().lat + ', ' + userMarker.getLatLng().lng;
                }
            }

            marker.on('move', function (e) {
                flag = 1;
                if (flag == 1) {
                    updateCoordinates();
                }
            });
            updateCoordinates();
        }).addTo(map);

    }, function (error) {
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













// JavaScript
function validateFiles() {
    const fileInput = document.getElementById("spaceFileMultiple");
    const files = fileInput.files;

    if (files.length < 6) {
    displayErrorMessage("Please select at least six files.");
    } else {
    // Clear the error message when the validation passes
    displayErrorMessage("");
    }

    for (let i = 0; i < files.length; i++) {
    const file = files[i];
    const allowedFormats = ["image/jpeg", "image/jpg", "image/png"];

    if (!allowedFormats.includes(file.type)) {
        displayErrorMessage("Please select files in JPG, JPEG, or PNG format only.");
        return;
    }
    }
}

function displayErrorMessage(message) {
    const errorMsgElement = document.getElementById("error-msg");
    errorMsgElement.textContent = message;
}




// JavaScript - Optional if you want to handle selections
const checkboxes = document.querySelectorAll('.form-check-input');
const dropdownButton = document.getElementById('dropdownMenuButton');

dropdownButton.addEventListener('click', function () {
  let selectedOptions = [];
  checkboxes.forEach(checkbox => {
    if (checkbox.checked) {
      selectedOptions.push(checkbox.value);
    }
  });

  console.log("Selected options:", selectedOptions);
});



