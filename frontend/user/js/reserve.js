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