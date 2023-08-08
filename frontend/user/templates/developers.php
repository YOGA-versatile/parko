
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
		<link rel="shortcut icon" type="image/x-icon" href="../asset/icons/icon.ico" />
		<title>Parko</title>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="../vendor/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
		<link href="https://fonts.googleapis.com/css?family=Albert+Sans" rel="stylesheet" />
    <script src="vendor/assets/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <style>
    body{
    font-family: 'Albert Sans';
}

[data-bs-scheme="light"] {
    background-color: #ffffff;
}

[data-bs-scheme="dark"] {
    background-color: black;
    color: #ffffff;
}

    .container-content.light {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .container-content.dark {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #272727;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h1.light {
        color: #2b6777;
        margin-bottom: 20px;
        text-align: center;
    }
    h1.dark {
        color: #52ab98;
        margin-bottom: 20px;
        text-align: center;
    }
    .card{
      font-size: 23px;
    }
    i.light{
      color: #52ab98;
    }
    i.light:hover{
      color: #2b6777;
    }
    i.dark{
      color: #2b6777;
    }
    i.dark:hover{
      color: #52ab98;
    }

    .key-features {
        margin-top: 40px;
    }

    .key-features h2 {
        color: #2b6777;
        margin-bottom: 10px;
    }

    .key-features li {
        color: #2b6777;
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
<body>
<?php load_temp("header.php"); ?>
<div class="container-content mt-5 mb-5 light">
<div class="container py-5">
    <h1 class="text-center mb-4 light">Meet the Developers</h1>

    <div class="row row-cols-2 gy-5">
      <div class="col-6 mb-3">
        <div class="card ">
          <div class="card-body text-center">
            <h5 class="card-title">Yogaraj</h5>
            <div class="developer-profiles">
              <a href="https://www.linkedin.com/in/yogaraj-s-09368622a/" target="_blank" title="LinkedIn"><i class="bi bi-linkedin light"></i></a>
              <a href="https://github.com/yogaraj-29" target="_blank" title="GitHub"><i class="bi bi-github light"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-6">
        <div class="card">
          <div class="card-body text-center">
            <h5 class="card-title">Ramkumar</h5>
            <div class="developer-profiles">
              <a href="https://www.linkedin.com/in/ramkumarperaman/" target="_blank" title="LinkedIn"><i class="bi bi-linkedin light"></i></a>
              <a href="https://github.com/RamkumarPeraman" target="_blank" title="GitHub"><i class="bi bi-github light"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row row-cols-2">
      <div class="col-6">
        <div class="card">
          <div class="card-body text-center">
            <h5 class="card-title">Anantha Pushpa Kaleeshwaran</h5>
            <div class="developer-profiles">
              <a href="https://www.linkedin.com/in/ananth-t-7b617b225/" target="_blank" title="LinkedIn"><i class="bi bi-linkedin light"></i></a>
              <a href="https://github.com/AnanthaPushpaKaleeswaran" target="_blank" title="GitHub"><i class="bi bi-github light"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-6">
        <div class="card">
          <div class="card-body text-center">
            <h5 class="card-title">Santhosh Vairamuthu</h5>
            <div class="developer-profiles">
              <a href="https://www.linkedin.com/in/santhosh-vairamuthu-262164227/" target="_blank" title="LinkedIn"><i class="bi bi-linkedin light"></i></a>
              <a href="https://github.com/santhosh-vairamuthu" target="_blank" title="GitHub"><i class="bi bi-github light"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

<?php load_temp("footer.php"); ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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