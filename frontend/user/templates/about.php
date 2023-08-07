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
        background-color: #C2EDCE;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    h1{
        color:#0076BE;
        margin-bottom: 20px;
        text-align: center;
    }
    .container-content.dark{
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #48BF91;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }


    .key-features {
        margin-top: 40px;
    }

    .key-features h2 {
        color: #0076BE;
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
        <div class=" container-content light">
    <h1>Introducing "Parko" - Your Ultimate Parking and Public Space Booking Platform!</h1>

    <p>Welcome to Parko, a revolutionary web app that brings convenience and efficiency to your parking and public space needs. Whether you're a busy urbanite, an adventure seeker, or a forward-thinking landlord, Parko is here to transform the way you find, reserve, and utilize parking spaces and public areas.</p>

    <div class="key-features">
      <h2>Key Features:</h2>
      <ul>
        <li>Seamless Parking Spot Discovery: Parko utilizes advanced mapping technology to provide real-time information on available parking spots near your desired destination. Say goodbye to driving in circles or wasting time searching for a spot. With Parko, you'll always find the most convenient parking solution at your fingertips.</li>
        <li>Easy Online Reservations: No more uncertainty or last-minute parking worries! With Parko, you can effortlessly reserve your parking spot online in just a few clicks. Simply select your preferred date, time, and duration, and rest assured that your spot will be waiting for you when you arrive.</li>
        <li>Cashless Payment Solutions: We've streamlined the payment process to make parking a breeze. Parko offers secure and cashless payment options, allowing you to complete your transaction hassle-free, whether you're reserving a spot or renting out your land.</li>
        <li>Public Space Exploration: Parko isn't just about parking. Discover a public parking spaces, reserve your spot in these sought-after locations and make the most of your leisure time.</li>
        <li>Landlord Opportunities: Are you a landowner with unused or barren lands? Parko opens up exciting possibilities for you. List your vacant spaces on our platform, and watch as they transform into sought-after parking spots. Turn your underutilized land into a lucrative asset while helping your community with much-needed parking solutions.</li>
        <li>Transparent User Reviews: At Parko, we value trust and reliability. Our review and rating system allows users to share their experiences, helping others make informed decisions. Read feedback from fellow users and ensure you're choosing the perfect parking spot or public space for your needs.</li>
        <li>User-Friendly Interface: Parko's intuitive design ensures a smooth and enjoyable experience for all users. Whether you're a tech-savvy traveler or a first-time landlord, navigating through Parko is a breeze.</li>
      </ul>
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