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
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="../vendor/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href='https://fonts.googleapis.com/css?family=Heebo' rel='stylesheet'>
    <script src="vendor/assets/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/account.css">
</head>
<body>
<?php load_temp("header.php"); ?>

<div class="p-5 mb-4 rounded-3 jumbo-tron-container">
    <div class="container-fluid py-1 jumbo-tron">
    <h1 class="display-6 fw-bold">Host</h1>
    <p class="col-md-8 fs-5">Go to profile,  <a class="btn btn-primary btn" href="profile.php">Profile</a></p>
    </div>
</div>

<div class="container-content">
<div class="container container-acc  py-1 mt-2">
    <div class="row row-cols-3 g-3 mt-2">
        <button type="button" data-bs-toggle="modal" data-bs-target="#infoModal">
            <i class="bi bi-person-lines-fill"></i>
            <h5 class="card-title"> Personal Info</h5>
            <p>Your personal details</p>
        </button>


        <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="infoModalLabel">Info</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati minus molestias excepturi unde et distinctio quisquam iste minima, ipsa expedita ea, saepe sint! Quis eveniet necessitatibus placeat, corporis assumenda ex!
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
                </div>
            </div>
        </div>

        <button type="button" data-bs-toggle="modal" data-bs-target="#securityModal">
            <i class="bi bi-shield-check"></i>
            <h5 class="card-title">Security Policy</h5>
            <p> Security policies of the Prako</p>
        </button>



        <div class="modal fade" id="securityModal" tabindex="-1" aria-labelledby="securityModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="securityModalLabel">Security</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati minus molestias excepturi unde et distinctio quisquam iste minima, ipsa expedita ea, saepe sint! Quis eveniet necessitatibus placeat, corporis assumenda ex!
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
                </div>
            </div>
        </div>



        <button type="button" data-bs-toggle="modal" data-bs-target="#paymentModal">
            <i class="bi bi-credit-card"></i>
            <h5 class="card-title">Payments and Payouts</h5>
            <p>Review payments, payouts methods</p>
        </button>

        <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="paymentModalLabel">Payment</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati minus molestias excepturi unde et distinctio quisquam iste minima, ipsa expedita ea, saepe sint! Quis eveniet necessitatibus placeat, corporis assumenda ex!
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
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
</body>