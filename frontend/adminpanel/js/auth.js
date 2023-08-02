
// // Use Bootstrap's collapse events to toggle the form container
// const collapseButton = document.getElementById('signup-collapse');
// const formContainer = document.getElementById('collapseSignup');

// collapseButton.addEventListener('click', function () {
//   $(formContainer).collapse('toggle');
// });

// // The rest of the JavaScript code for password verification remains the same
// const passwordInput = document.getElementById('user.password');
// const confirmPasswordInput = document.getElementById('user.retype.password');
// const signupForm = document.getElementById('signup-form');
// const schoolIdInput = document.getElementById('school.id');
// const userNameInput = document.getElementById('user.name');

// function verifyUserName() {
//   const name = userNameInput.value;
//   if (name.length <= 7) {
//     userNameInput.classList.add('error');
//   } else {
//     userNameInput.classList.remove('error');
//   }
// }

// function verifySchoolId() {
//   const school = schoolIdInput.value;

//   if (school[0] !== "#" || school.length !== 7) {
//     schoolIdInput.classList.add('error');
//   } else {
//     schoolIdInput.classList.remove('error');
//   }
// }

// function checkPasswordsMatch() {
//   const password = passwordInput.value;
//   const confirmPassword = confirmPasswordInput.value;

//   if (password !== confirmPassword) {
//     passwordInput.classList.add('error');
//     confirmPasswordInput.classList.add('error');
//   } else {
//     passwordInput.classList.remove('error');
//     confirmPasswordInput.classList.remove('error');
//   }
// }

// function handleSubmit(event) {
//   if (passwordInput.value !== confirmPasswordInput.value) {
//     event.preventDefault();
//     alert('Passwords do not match. Please try again.');
//   }
//   if(schoolIdInput.value[0] !== "#" || schoolIdInput.value.length !== 7){
//     event.preventDefault();
//     alert('Invalid school ID. Please try again.');
//   }
//   if(userNameInput.value.length <= 7){
//     event.preventDefault();
//     alert('User Name is too short. Please try again.');
//   }
// }

// // Event listeners to check for password match on input change
// passwordInput.addEventListener('input', checkPasswordsMatch);
// confirmPasswordInput.addEventListener('input', checkPasswordsMatch);
// schoolIdInput.addEventListener('input', verifySchoolId);
// userNameInput.addEventListener('input', verifyUserName);

// // Event listener to prevent form submission if passwords don't match
// signupForm.addEventListener('submit', handleSubmit);

function validateEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}

// Function to validate phone number format (exactly 10 digits)
function validatePhoneNumber(phone) {
  const phoneRegex = /^\d{10}$/;
  return phoneRegex.test(phone);
}

// Function to display error message under the input
function showError(input, message) {
  const errorSpan = document.createElement('span');
  errorSpan.className = 'error-message';
  errorSpan.innerHTML = message;
  const parentDiv = input.parentElement;
  parentDiv.appendChild(errorSpan);
}

// Function to clear error message
function clearError(input) {
  const parentDiv = input.parentElement;
  const errorSpan = parentDiv.querySelector('.error-message');
  if (errorSpan) {
      parentDiv.removeChild(errorSpan);
  }
}

// Function to validate login form
function validateLoginForm() {
  const email = document.getElementById('l.email').value;
  const password = document.getElementById('l.password').value;

  clearError(document.getElementById('l.email'));
  clearError(document.getElementById('l.password'));

  if (!validateEmail(email)) {
      showError(document.getElementById('l.email'), 'Please enter a valid email address.');
      return false;
  }

  if (password.length < 6) {
      showError(document.getElementById('l.password'), 'Password must be at least 6 characters long.');
      return false;
  }

  return true;
}

// Function to validate signup form
function validateSignupForm() {
  const username = document.getElementById('s.user.name').value;
  const email = document.getElementById('s.email').value;
  const phone = document.getElementById('s.phone').value;
  const password = document.getElementById('user.password').value;
  const confirmPassword = document.getElementById('user.retype.password').value;

  clearError(document.getElementById('s.user.name'));
  clearError(document.getElementById('s.email'));
  clearError(document.getElementById('s.phone'));
  clearError(document.getElementById('user.password'));
  clearError(document.getElementById('user.retype.password'));

  if (username.length < 6) {
      showError(document.getElementById('s.user.name'), 'Username must be at least 6 characters long.');
      return false;
  }

  if (!validateEmail(email)) {
      showError(document.getElementById('s.email'), 'Please enter a valid email address.');
      return false;
  }

  if (!validatePhoneNumber(phone)) {
      showError(document.getElementById('s.phone'), 'Please enter a 10-digit phone number.');
      return false;
  }

  if (password.length < 6) {
      showError(document.getElementById('user.password'), 'Password must be at least 6 characters long.');
      return false;
  }

  if (password !== confirmPassword) {
      showError(document.getElementById('user.retype.password'), 'Password and Confirm Password do not match.');
      return false;
  }

  return true;
}

// Attach event listeners to the forms
document.getElementById('login-form').addEventListener('submit', function (event) {
  if (!validateLoginForm()) {
      event.preventDefault();
  }
});

document.getElementById('signup-form').addEventListener('submit', function (event) {
  if (!validateSignupForm()) {
      event.preventDefault();
  }
});