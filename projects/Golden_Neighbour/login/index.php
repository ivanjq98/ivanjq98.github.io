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
  <link rel="stylesheet" href="./login.css" />
  <script src="./login.js"></script>
  <title>Login Page</title>
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
          <a href="index.html" class="button-link"> Login </a>
        </div>
        <div class="my-profile-button-link">
          <a href="../signup" class="button-link">Sign Up</a>
        </div>
      </div>
    </header>
  </div>

  <!-- Login -->
  <div class="parent">
    <div class="login-container">
      <h1>Login</h1>
      <form action="../scripts/php/auth/authentication.php" method="post">
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required />
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required />
        </div>
        <div class="button-container">
          <button type="submit" class="login-button">Login</button>
          <button type="button" class="signup-button">Sign Up</button>
          <button type="button" class="forgot-password-button">
            Forgot Password?
          </button>
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