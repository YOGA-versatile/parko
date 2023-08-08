<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Example</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<label for="searchSpace" class="visually-hidden">Search</label>
<input type="text" class="form-control me-1 search-box" id="searchSpace" placeholder="Search a city.." list="datalistOptions">
<datalist id="datalistOptions">
    <option value="Madurai">
    <option value="Chennai">
    <option value="Kovilpatti">
</datalist>

<script>
$(document).ready(function() {
    $('#searchSpace').on('input', function() {
        var userInput = $(this).val().toLowerCase();
        var validValues = $('#datalistOptions option').map(function() {
            return $(this).val().toLowerCase();
        }).get();

        if (!validValues.includes(userInput)) {
            $(this).val('');
        }
    });
});
</script>

</body>
</html>
