<?php
session_start();
if (isset($_SESSION['email'])) {
  header("Location: ../homepage");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="signup.css" />
  <!-- Scripts -->
  <script defer src="validate.js"></script>
  <title>Sign Up Page</title>
</head>

<body>
  <div id="wrapper">
    <!-- Header -->
    <header>
      <div id="goldenhead">
        <img src="../src/img/logo/bird.png" alt="Golden_Neighbour_logo" class="logo" style="width:125px"
          ; "height:115px" ;>
        <div id="left-header-button-link">
          <a href="../homepage/#movie" class="button-link"> Movies</a>
        </div>

        <div id="right-header-button-link">
          <a href="../login" class="button-link"> Login </a>
        </div>
        <div class="my-profile-button-link">
          <a href="./" class="button-link">Sign Up</a>
        </div>
      </div>
    </header>
  </div>
  <div class="parent">
    <div class="signup-container">
      <h1>Sign Up</h1>
      <form action="../scripts/php/auth/register.php" method="post">
        <div class="form-group">
          <label for="first-name">First Name:</label>
          <input type="text" id="firstname" name="firstname" onkeypress="isValidName(this.value)" required />
          <span class="error" id="error-first-name"></span>
        </div>

        <div class="form-group">
          <label for="last-name">Last Name:</label>
          <input type="text" id="lastname" name="lastname" onkeypress="isValidName(this.value)" required />
          <span class="error" id="error-last-name"></span>
        </div>

        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" onkeypress="isValidEmail(this.value)" required />
          <span class="error" id="error-email"></span>
        </div>

        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required />
        </div>
        <div class="form-group">
          <label for="confirm-password">Confirm Password:</label>
          <input type="password" id="confirm_password" name="confirm_password" required />
        </div>
        <div class="button-container">
          <button type="submit" class="signup-button">Sign Up</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <img src="../src/img/logo/bird.png" alt="Golden_Neighbour_logo" class="logo" style="width:150px" ; "height:150px" ;>
    <hr />
    <p>&copy;2023 Privacy-Terms</p>
  </footer>
</body>

</html>