<?php
include "../libs/load.php";
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
	<head>
		<script src="../vendor/assets/js/color-modes.js"></script>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="" />
		<meta name="generator" content="Hugo 0.112.5" />
		<link rel="shortcut icon" type="image/x-icon" href="../asset/pics/icon.ico" />
		<title>Parko</title>
		<link href="../vendor/assets/dist/css/bootstrap.min.css" rel="stylesheet" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
		<link href="https://fonts.googleapis.com/css?family=Albert+Sans" rel="stylesheet" />
		<link rel="stylesheet" href="../css/header.css" />
		<link rel="stylesheet" href="../css/footer.css" />
		<link rel="stylesheet" href="../css/listing.css" />
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	</head>

	<body data-bs-scheme="auto">
		<!-- header -->
		<?php load_temp("header.php"); ?>

		<div class="container mt-4">
			<div class="row">
				<div class="col">
					<a id="addCardBtn" class="btn btn-primary" href="map.php" target="_blank">SPACE +</a>
				</div>
			</div>
			<div class="row mt-4" id="cardsContainer">
			</div>
			<div class="row mt-4">
				<div class="col">
					<div class="card space-container">
						<div class="card-body">
							<h3 class="card-title" style="text-align:center;color:#388087;">SPACES</h3><hr>
							<div id="detailsSummary">
								<!-- Details Summary Card -->
								<div class="card mb-2 mt-1 book-card">
									<div class="card-header">
										Yoga Parking
									</div>
									<div class="card-body">
										<!-- Place the grid layout here -->
										<div class="container mt-4">
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
													<span id="displaySize">150</span> Sq meter
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
													<span id="displayLength">10</span> meters
												</div>
												<div class="col-md-4">
													<strong>Space Width:</strong>
													<span id="displayWidth">15</span> meters
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
    <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="dark-mode-switch">
        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
    </div>

		<?php load_temp("footer.php"); ?>
		<script src="../js/listing.js"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
      const darkModeSwitch = document.getElementById('dark-mode-switch');
    const body = document.body;
    
    darkModeSwitch.addEventListener('change', () => {
      if (darkModeSwitch.checked) {
        body.setAttribute('data-bs-scheme', 'dark');
      } else {
        body.setAttribute('data-bs-scheme', 'auto');
      }
    });
    </script>
	</body>
</html>
