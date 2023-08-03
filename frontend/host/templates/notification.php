<?php 
    include "../libs/load.php"; 
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
    <!-- ... Your other meta tags and CSS links ... -->

    <!-- Bootstrap CSS -->
    <link href="../vendor/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href='https://fonts.googleapis.com/css?family=Heebo' rel='stylesheet'>
    <!-- Your custom CSS files -->
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/notification.css">
</head>
<body>
    <?php load_temp("header.php"); ?>

    <div class="container notification-container">
        <h2>Notifications</h2>
        <div id="notification-list"></div>
    </div>

    <?php load_temp("footer.php"); ?>
    <script>
        function addNotification(message, isNew) {
            const notificationList = document.getElementById('notification-list');

            // Create the notification element
            const notification = document.createElement('div');
            notification.classList.add('notification', isNew ? '' : 'old-notification');
            notification.innerHTML = `
                <p>${message}</p>
                <button class="btn btn-danger btn-sm delete-btn">Delete</button>
            `;

            // Add event listener to the delete button
            const deleteBtn = notification.querySelector('.delete-btn');
            deleteBtn.addEventListener('click', function() {
                notification.remove();
            });

            // Add the notification to the list
            notificationList.prepend(notification);
        }

        // Sample notifications
        addNotification("This is a new notification", true);
        addNotification("This is an old notification", false);
        addNotification("Another new notification", true);
        alert("hi");
    </script>

    <!-- Your custom notification.js file -->
    <script src="../js/notification.js"></script>
    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
