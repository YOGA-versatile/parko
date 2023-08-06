
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
		<link rel="shortcut icon" type="image/x-icon" href="../asset/pics/icon.ico" />
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
		<link rel="stylesheet" href="../css/listing.css" />
	</head>

	<body data-bs-scheme="light">
		<?php load_temp("header.php"); ?>
		<div class="container mt-4 whole-container light">
			<div class="row">
				<div class="col">
					<a id="addCardBtn" class="btn btn-primary" href="map.php" target="_blank">SPACE +</a>
				</div>
			</div>
			<div class="row mt-4" id="cardsContainer">
				<!-- Your cards content goes here -->
			</div>
			<div class="row mt-4">
				<div class="col">
					<div class="card space-container light">
						<div class="card-body light">
							<h3 class="card-title light" style="text-align:center;color:#388087;">SPACES</h3>
							<hr />
							<div id="detailsSummary">
								<!-- Details Summary Card -->
								<div class="card mb-2 mt-1 book-card light">
									<div class="card-header light">
										Yoga Parking
									</div>
									<div class="card-body light">
										<!-- Place the grid layout here -->
										<div class="container mt-md-4 light">
											<div class="row">
												<div class="col-md-4">
													<strong>Types of User:</strong>
													<span id="displayUserType">Regular User</span>
												</div>
												<div class="col-md-4">
													<strong>Name of Space:</strong>
													<span id="displayName">Parko Plaza</span>
												</div>
												<div class="col-md-4">
													<strong>Space Size:</strong>
													<span id="displaySize">150 Sq meter</span> 
												</div>
											</div>
											<div class="row mt-3">
												<div class="col-md-4">
													<strong>Address:</strong>
													<span id="displayAddress">123 Main Street</span>
												</div>
												<div class="col-md-4">
													<strong>Pin Code:</strong>
													<span id="displayPincode">12345</span>
												</div>
												<div class="col-md-4">
													<strong>City:</strong>
													<span id="displayCity">Madurao</span>
												</div>
											</div>
											<div class="row mt-3">
												<div class="col-md-12">
													<strong>Location Coordinates:</strong>
													<span id="displayCoordinates">Latitude: 40.7128, Longitude: -74.0060</span>
												</div>
											</div>

											<div class="row mt-3">
												<div class="col-md-4">
													<strong>Space Length:</strong>
													<span id="displayLength">10 meters</span> 
												</div>
												<div class="col-md-4">
													<strong>Space Width:</strong>
													<span id="displayWidth">15</span> 
												</div>
												<div class="col-md-4">
													<strong>Survey Number:</strong>
													<span id="displaySurvey">S12345</span>
												</div>
											</div>

											<div class="row mt-3">
												<div class="col-md-12">
													<strong>Amenities Provided:</strong>
													<span id="displayAmenities">24/7 Security, Lighting</span>
												</div>
											</div>

											<div class="row mt-3">
												<div class="col-md-12">
													<strong>Types of Parkings:</strong>
													<span id="displayParkings">Compact, Motorcycle, Electric</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php load_temp("footer.php"); ?>

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

