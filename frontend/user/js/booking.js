const stars = document.querySelectorAll('.star');
const reviewRatingInput = document.getElementById('reviewRating');

stars.forEach(star => {
  star.addEventListener('click', () => {
    const rating = parseInt(star.getAttribute('data-rating'));
    setRating(rating);
  });
});

function setRating(rating) {
  stars.forEach((star, index) => {
    if (index < rating) {
      star.classList.add('gold-star'); // Apply gold color
    } else {
      star.classList.remove('gold-star'); // Remove gold color
    }
  });
  reviewRatingInput.value = rating;
}

function submitReview() {
  const rating = parseInt(reviewRatingInput.value);
  const reviewText = document.querySelector('textarea').value;
  // Perform your review submission logic here, e.g., AJAX call to submit the review with the selected rating and reviewText.
  console.log("Rating: " + rating);
  console.log("Review Text: " + reviewText);
}


function calculateValue() {
    const userInput = document.getElementById('userInput').value;
    const calculatedValue = userInput * 5; // Change this multiplier as needed
    document.getElementById('calculatedValue').value = "₹ "+calculatedValue;
  }