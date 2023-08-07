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
        <style>
    body{
    font-family: 'Albert Sans';
}

[data-bs-scheme="light"] {
    background-color: #ffffff;
}

[data-bs-scheme="dark"] {
    background-color: #272727;
    color: #ffffff;
}

    .container-content.light{
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #BADFE7;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    h1{
        color:#48BF91;
        margin-bottom: 20px;
        text-align: center;
    }
    .container-content.dark{
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #0076BE;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }


    .key-features {
        margin-top: 40px;
    }

    .key-features h2 {
        color: #48BF91;
        margin-bottom: 10px;
    }

    .key-features li {
        margin-bottom: 10px;
        list-style-type: disc;
        margin-left: 20px;
    }

    .join-button {
        display: block;
        width: 200px;
        height: 50px;
        margin: 30px auto;
        background-color: #52ab98;
        color: #ffffff;
        text-align: center;
        line-height: 50px;
        font-weight: bold;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .join-button:hover {
        background-color: #2b6777;
    }

    </style>
	</head>

	<body data-bs-scheme="light">
		<?php load_temp("header.php"); ?>    
  <div class="container-content light">
    <h1>Future Updates</h1>

    <div class="key-features">
      <h2>Enhanced Security Feature: Stand-In Vehicle Tag</h2>
      <p>At Parko, we take security seriously. In our upcoming update, we are introducing an innovative security feature to safeguard your vehicles during parking.</p>
      <p>The "Stand-In Vehicle Tag" will be a special tag provided by Parko that vehicle owners can place in their vehicles while parking. This tag will have the vehicle's number embedded in it.</p>
      <p>How it works:</p>
      <ul>
        <li>When parking the vehicle, simply place the "Stand-In Vehicle Tag" in a designated stand or holder.</li>
        <li>The tag will automatically embed the vehicle's number, making it identifiable and linked to your Parko account.</li>
        <li>If someone attempts to remove the tag before the parking time expires, the system will trigger an alert to your Parko app.</li>
        <li>You'll receive real-time notifications, allowing you to take immediate action and ensure the security of your vehicle.</li>
        <li>This feature adds an extra layer of protection, giving you peace of mind while parking your vehicle in public spaces.</li>
      </ul>
      <p>Stay tuned for this exciting update and enjoy worry-free parking with Parko!</p>
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