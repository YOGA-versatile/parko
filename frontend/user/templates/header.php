<header class="navbar navbar-expand-md custom-common-container light">
	<div class="container-md custom-common-header light">
		<a class="navbar-brand light" href="#">
			<img class="icon light" height="40px" src="../asset/pics/parko.png" alt="Parko Logo" />
		</a>

		<button class="navbar-toggler light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon light"></span>
		</button>

		<div class="collapse navbar-collapse light" id="navbarNav">
		<ul class="navbar-nav mx-auto light">
    <li class="nav-item light mx-2">
        <a class="nav-link light" href="index.php">Home</a>
    </li>
    <li class="nav-item light mx-2">
        <a class="nav-link light" href="booking.php">Booking</a>
    </li>
</ul>
			<ul class="navbar-nav ml-auto d-flex align-items-center light">
				<li class="me-3 light">
					<div class="form-check form-switch light">
						<input class="form-check-input light" type="checkbox" id="dark-mode-switch" />
						<label class="form-check-label light" for="dark-mode-switch">
							<i class="bi bi-moon light" id="moon-icon"></i>
							<i class="bi bi-brightness-high light" id="sun-icon" style="display: none;"></i>
						</label>
					</div>
				</li>
				<li class="nav-item dropdown light">
					<a class="nav-link dropdown-toggle light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<span class="bi bi-person light"></span>
					</a>
					<ul class="dropdown-menu dropdown-menu-end light" aria-labelledby="navbarDropdown" data-bs-popper="static" style="text-align: center;">
						<li>
							<a href="account.php" class="light"><i class="bi bi-person"></i> Account</a>
						</li>
						<li><hr class="dropdown-divider light" /></li>
						<li>
							<a href="notification.php" class="light><i class="bi bi-bell"></i> Notification</a>
						</li>
						<li>
							<a href="help.php" class="light><i class="bi bi-headset"></i> Help Center</a>
						</li>
						<li>
							<a href="about.php" class="light><i class="bi bi-info-circle"></i> About</a>
						</li>
						<li><hr class="dropdown-divider light" /></li>
						<li><a href="../../host/templates" class="tog">Switch - Host</a></li>
						<li><a href="../../auth.php" class="tog">Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</header>