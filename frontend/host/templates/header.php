<header class="navbar navbar-expand-md custom-common-container">
	<div class="container-md custom-common-header">
		<a class="navbar-brand" href="#">
			<img class="icon" height="40px" src="../asset/pics/parko.png" alt="Parko Logo" />
		</a>

		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="manage.php">Calendar</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="listing.php">Listing</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="profile.php">Profile</a>
				</li>
			</ul>

			<ul class="navbar-nav ml-auto d-flex align-items-center">
				<li class="me-3">
					<div class="form-check form-switch">
						<input class="form-check-input" type="checkbox" id="dark-mode-switch" />
						<label class="form-check-label" for="dark-mode-switch">
							<i class="bi bi-moon" id="moon-icon"></i>
							<i class="bi bi-brightness-high" id="sun-icon" style="display: none;"></i>
						</label>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<span class="bi bi-person"></span>
					</a>
					<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" data-bs-popper="static" style="text-align: center;">
						<li>
							<a href="account.php"><i class="bi bi-person"></i> Account</a>
						</li>
						<li><hr class="dropdown-divider" /></li>
						<li>
							<a href="notification.php"><i class="bi bi-bell"></i> Notification</a>
						</li>
						<li>
							<a href="help.php"><i class="bi bi-headset"></i> Help Center</a>
						</li>
						<li>
							<a href="about.php"><i class="bi bi-info-circle"></i> About</a>
						</li>
						<li><hr class="dropdown-divider" /></li>
						<li><a href="../../user/templates" class="tog">Switch - Guest</a></li>
						<li><a href="../../auth.php" class="tog">Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</header>
