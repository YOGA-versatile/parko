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
		<link rel="stylesheet" href="../css/profile.css" />
	</head>

	<body data-bs-scheme="light">
		<?php load_temp("header.php"); ?>
		<main>
			<div class="container jumbo-tron light">
				<img height="100px" src="../asset/pics/profile.png" />
				<h1 class="display-6 fw-bold light">Hello Host</h1>
				<div id="rating-container" class="align-items-center light">
					<span id="star-container"></span>
					<span id="rating-count" ></span>
				</div>
				<hr />
			</div>
			<div class="container mt-5 prof-monetize light">
				<div class="card selector-date light mb-4 mt-3">
					<div class="card-body">
						<div class="row mt-2">
							<div class="col-md-6">
								<div class="mb-3">
									<label for="selectYear" class="form-label " style="font-size:22px;">Select Year:</label>
									<select id="selectYear" class="form-select">
										<!-- Options for months will be generated dynamically -->
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label for="selectMonth" class="form-label" style="font-size:22px;">Select Month:</label>
									<select id="selectMonth" class="form-select">
										<!-- Options for years will be generated dynamically -->
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>

				

			</div>
            <div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="card mb-2 control-card light">
							<div class="card-body">
                                <h4 class="mt-3 light" style="text-align: center;">Parkings</h4>
								<hr />
								<p id="number1"></p>
								<p id="numberFour">Four-wheelers: 102</p>
								<p id="numberTwo">Two-wheelers: 737</p>
								<p id="numberBi">Bicycle: 321</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card mb-2 control-card light">
							<div class="card-body">
                            <h4 class="mt-3 light" style="text-align: center;">Earnings</h4>
								<hr />
								<p id="number2"></p>
								<p id="numberService">Service Charge: - ₹2586</p>
								<p id="numberGst">GST: - ₹1760.22</p>
								<p id="numberNet">Net Earnings: ₹8018.78</p>
							</div>
						</div>
					</div>
				</div>
			</div>

				<hr />
			<div class="container">
				<h3 style="text-align:center;" class="mt-3 mb-3">Reviews</h3>
				<div class="row">
					<div class="col-md-6">
						<div class="card mb-2 comment-container light">
							<div class="card-body">
								<div class="container">
									<h4 class="bg-1 mt-1">Ram</h4>
									<p class="bg-2">Easy to park</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card mb-2 comment-container light">
							<div class="card-body">
								<div class="container">
									<h4 class="bg-1 mt-1">Ram</h4>
									<p class="bg-2">Safe parking</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="card mb-2 comment-container light">
							<div class="card-body">
								<div class="container">
									<h4 class="bg-1 mt-1">Ram</h4>
									<p class="bg-2">Easy to park</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card mb-2 comment-container light">
							<div class="card-body">
								<div class="container">
									<h4 class="bg-1 mt-1">Ram</h4>
									<p class="bg-2">Safe parking</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>

		<?php load_temp("footer.php"); ?>

		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<!-- Include Popper.js for Bootstrap -->
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
		<!-- Include Bootstrap JS -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
		<script src="../js/profile.js"></script>
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
