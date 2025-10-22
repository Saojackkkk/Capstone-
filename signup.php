<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up - GastroTrack</title>
  <link rel="stylesheet" href="css/variables.css">
  <link rel="stylesheet" href="css/loginpage.css">
  <script src="js/login.js" defer></script>
</head>
<body>
  <div class="card">
    <img src="img/logo.png" alt="GastroTrack Logo" width="320" height="200">
    <h2>Create Account</h2>
    <input type="text" id="fname" placeholder="First Name">
    <input type="text" id="lname" placeholder="Last Name">
    <input type="text" id="uname" placeholder="Username">
    <input type="email" id="email" placeholder="Email">
    <input type="password" id="pwd" placeholder="Password">
    <button onclick="generateID()">Sign Up</button>
    <div class="link">
      <a href="loginpage.php">Already have account? Login</a>
    </div>
  </div>
</body>
</html>
