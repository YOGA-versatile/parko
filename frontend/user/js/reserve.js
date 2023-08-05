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


baguetteBox.run(".gallery", {
animation: "slideIn"
});




function calculateCost() {
  const vehicleType = document.getElementById('vehicleType').value;
  const startDate = new Date(document.getElementById('startDate').value);
  const startTime = document.getElementById('startTime').valueAsNumber;
  const endDate = new Date(document.getElementById('endDate').value);
  const endTime = document.getElementById('endTime').valueAsNumber;

  const startTimeMillis = startDate.getTime() + startTime;
  const endTimeMillis = endDate.getTime() + endTime;

  const hoursDiff = (endTimeMillis - startTimeMillis) / (1000 * 60 * 60);

  let ratePerHour;
  if (vehicleType === 'heavy') {
    ratePerHour = 10;
  } else if (vehicleType === 'normal') {
    ratePerHour = 8;
  } else if (vehicleType === 'two-wheeler') {
    ratePerHour = 5;
  } else if (vehicleType === 'bicycle') {
    ratePerHour = 2;
  } else {
    ratePerHour = 0;
  }

  const cost = hoursDiff * ratePerHour;

  document.getElementById('cost').value = "₹" + cost.toFixed(2);
}




  // Check if the bookmark state is stored in local storage
  const storedBookmarkState = localStorage.getItem('bookmarkState');
  let bookmarkState = storedBookmarkState ? parseInt(storedBookmarkState) : 0;

  const bookmarkIcon = document.getElementById('bookmark-icon');

  // Function to toggle the bookmark icon class and state
  function toggleBookmark() {
    bookmarkState = 1 - bookmarkState; // Toggle between 0 and 1
    if (bookmarkState === 1) {
      bookmarkIcon.classList.remove('bi-bookmark');
      bookmarkIcon.classList.add('bi-bookmark-fill');
    } else {
      bookmarkIcon.classList.remove('bi-bookmark-fill');
      bookmarkIcon.classList.add('bi-bookmark');
    }
    
    // Save the updated state to local storage
    localStorage.setItem('bookmarkState', bookmarkState);
  }

  // Add a click event listener to the bookmark icon
  bookmarkIcon.addEventListener('click', toggleBookmark);

  // Set the initial icon class based on the initial state
  if (bookmarkState === 1) {
    bookmarkIcon.classList.add('bi-bookmark-fill');
  }