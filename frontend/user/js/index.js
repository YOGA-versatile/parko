
$(document).ready(function() {
    $('.btn').on('click', function() {
        var targetContent = $(this).data('target');
        $('.content').hide();
        $('#' + targetContent).show();
    });
});


function displayRating() {
    const starContainer = document.getElementById('star-container');
    const ratingCount = document.getElementById('rating-count');
    const averageRating = 3.5; // You can set the average rating dynamically here
    
    // Display the stars based on the average rating
    let starsHtml = '';
    for (let i = 1; i <= 5; i++) {
      if (i <= Math.floor(averageRating)) {
        starsHtml += '<i class="bi bi-star-fill"></i>';
      } else if (i === Math.ceil(averageRating) && averageRating % 1 !== 0) {
        starsHtml += '<i class="bi bi-star-half"></i>';
      } else {
        starsHtml += '<i class="bi bi-star"></i>';
      }
    }
    var total = 1307;
    starContainer.innerHTML = starsHtml;
    ratingCount.textContent = `(${total})`;
  }

  // Call the function to display the rating
  displayRating();