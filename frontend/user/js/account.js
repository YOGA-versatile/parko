function displayRating() {
    const starContainer = document.getElementById('star-container');
    const ratingCount = document.getElementById('rating-count');
    const averageRating = 4.5; // You can set the average rating dynamically here
    
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



  const userForm = document.getElementById('user-form');
  const legalNameInput = document.getElementById('legalName');
  const addressInput = document.getElementById('address');
  const emailInput = document.getElementById('email');
  const phoneInput = document.getElementById('phone');
  const governmentIdInput = document.getElementById('governmentId');

  // Load saved user data from local storage
  const savedUserData = JSON.parse(localStorage.getItem('userData')) || {};

  // Fill the form with saved data if available
  legalNameInput.value = savedUserData.legalName || '';
  addressInput.value = savedUserData.address || '';
  emailInput.value = savedUserData.email || '';
  phoneInput.value = savedUserData.phone || '';
  governmentIdInput.value = savedUserData.governmentId || '';

  // Save user data to local storage when form is submitted
  userForm.addEventListener('submit', (e) => {
    e.preventDefault();

    const userData = {
      legalName: legalNameInput.value,
      address: addressInput.value,
      email: emailInput.value,
      phone: phoneInput.value,
      governmentId: governmentIdInput.value,
    };

    localStorage.setItem('userData', JSON.stringify(userData));
    alert('User information saved successfully.');
  });