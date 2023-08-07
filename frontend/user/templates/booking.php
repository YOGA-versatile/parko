<?php include "../libs/load.php"; ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="" />
		<meta name="generator" content="Hugo 0.112.5" />
		<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="Expires" content="0" />
		<link rel="shortcut icon" type="image/x-icon" href="../asset/icons/icon.ico" />
		<title>Parko</title>

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

		<!-- Bootstrap Icons CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Albert+Sans" rel="stylesheet" />

		<!-- Custom CSS -->
		<link rel="stylesheet" href="../css/header.css" />
		<link rel="stylesheet" href="../css/footer.css" />
		<link rel="stylesheet" href="../css/booking.css" />
	</head>

	<body data-bs-scheme="light">
		<?php load_temp("header.php"); ?>

    <div class="container mt-5 mb-5 booking-container">
    <div class="row">
    <div class="col-lg-4 col-md-6 mb-5 mt-1 book-card">
      <div class="card light">
        <div class="card-header">
          TN 96 E 3448 <span class="badge bg-success text-white">parked</span>
        </div>
        <div class="card-body">
          <p class="card-text">Booking ID : #176-590</p>
          <p class="card-text">Vehicle Type : Motor Two Wheeler</p>
          <p class="card-text">Booked Date : 04/08/2023</p>
          <p class="card-text">Parking Time : 2.00PM - 5.30 PM</p>
          <p class="card-text">1.30 Hours Remaining]</p>
          <a href="#" class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#extendModal">Extend Time</a>
          <a href="#" class="btn btn-danger" type="button">HELP</a>
        </div>
      </div>
    </div>
    
    <div class="col-lg-4 col-md-6 mb-5 mt-1 book-card">
      <div class="card light">
        <div class="card-header">
          TN 96 E 3448 <span class="badge bg-info text-white">yet to go</span>
        </div>
        <div class="card-body">
          <p class="card-text">Booking ID : #176-590</p>
          <p class="card-text">Vehicle Type : Motor Two Wheeler</p>
          <p class="card-text">Booked Date : 04/08/2023</p>
          <p class="card-text">Parking Time : 2.00PM - 5.30 PM</p>
          <p class="card-text">3.30 Hours]</p>
          <a href="map.php?lat=9.9315573&lon=78.1022729" class="btn btn-primary">Directions</a>
          <a href="#" class="btn btn-danger" type="button">HELP</a>
        </div>
      </div>
    </div>
    
    <div class="col-lg-4 col-md-6 mb-5 mt-1 book-card">
      <div class="card light">
        <div class="card-header">
          TN 96 E 3448 <span class="badge bg-secondary text-white">completed</span>
        </div>
        <div class="card-body">
          <p class="card-text">Booking ID : #176-590</p>
          <p class="card-text">Vehicle Type : Motor Two Wheeler</p>
          <p class="card-text">Booked Date : 04/08/2023</p>
          <p class="card-text">Parking Time : 2.00PM - 5.30 PM </p>
          <p class="card-text">3.30 Hours]</p>
          <a href="#" class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#reviewModal">Review</a>
          <a href="#" class="btn btn-danger" type="button">HELP</a>
        </div>
      </div>
    </div>
  </div>
    </div>

<div class="modal fade" id="extendModal" tabindex="-1" aria-labelledby="extendModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content book-modal ">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="extendModalLabel">Extend</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
            <form class="mb-3">
                <label for="userInput" class="form-label">Enter Time to be Extend (minimum 1 hour):</label>
                <input type="number" class="form-control" id="userInput" min="1" onchange="calculateValue()">
                <label for="calculatedValue" class="form-label">Price :</label>
                <input type="text" class="form-control" id="calculatedValue" readonly>
                <button type="submit" class="btn btn-info mt-3">Pay & Proceed</button>
            </form>
          </div>
          <div class="modal-footer">
          </div>
          </div>
        </div>
    </div>


<div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content book-modal ">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="reviewModalLabel">Give Your Review</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="star-rating" data-rating="0">
                <span class="star" data-rating="1">&#9733;</span>
                <span class="star" data-rating="2">&#9733;</span>
                <span class="star" data-rating="3">&#9733;</span>
                <span class="star" data-rating="4">&#9733;</span>
                <span class="star" data-rating="5">&#9733;</span>
              </div>
              <input type="hidden" name="reviewRating" id="reviewRating" value="0">
              <textarea class="form-control mt-2" rows="4" placeholder="Write your review here"></textarea>
              <button type="button" class="btn btn-primary mt-2" onclick="submitReview()">Submit Review</button>
            </div>
            <div class="modal-footer">
            </div>
            </div>
        </div>
    </div>


</div>


		<?php load_temp("footer.php"); ?>

    <script src="../js/booking.js"></script>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<!-- Include Popper.js for Bootstrap -->
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
		<!-- Include Bootstrap JS -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

		<script>

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
            
		</script>
	</body>
</html>