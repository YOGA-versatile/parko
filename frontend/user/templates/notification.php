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
		<link rel="stylesheet" href="../css/notification.css" />
	</head>

	<body data-bs-scheme="light">
		<?php load_temp("header.php"); ?>
        <div class="container notification-box light" style="margin-bottom:40%">
            <div class="container notification-container light">
                <h2>Notifications</h2>
                <div id="notification-list"></div>
            </div>
        </div>

		<?php load_temp("footer.php"); ?>
        <script src="../js/notification.js"></script>
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