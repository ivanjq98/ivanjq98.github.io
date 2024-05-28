// Function to navigate to signup.html
function navigateToSignup() {
  window.location.href = "../signup";
}

// Function to handle the "Sign Up" button click event
function handleSignUpButtonClick() {
  const signUpButton = document.querySelector(".signup-button");
  signUpButton.addEventListener("click", navigateToSignup);
}

// Initialize the login module
function load() {
  handleSignUpButtonClick();
}

// Call the load function when the DOM is ready
document.addEventListener("DOMContentLoaded", load);

// login.js

// Function to handle the login button click event
function handleLogin() {
  const correctEmail = "test.test@test.com";
  const correctPassword = "test";

  // Get the email and password input values
  const emailInput = document.getElementById("email").value;
  const passwordInput = document.getElementById("password").value;

  // Compare with the correct email and password
  if (emailInput === correctEmail && passwordInput === correctPassword) {
    // Navigate to the specified URL if they match
    window.location.href = "http://localhost:5174/";
  } else {
    // Show an alert if they do not match
    alert("Incorrect email or password");
  }
}

// Attach the handleLogin function to the login button click event
document.getElementById("loginButton").addEventListener("click", handleLogin);
