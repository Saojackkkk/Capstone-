<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Select Role - GastroTrack</title>
  <link rel="stylesheet" href="css/variables.css">
  <link rel="stylesheet" href="css/loginpage.css">
  <script src="js/role.js" defer></script>
</head>
<body>
  <div class="card">
   <img src="img/logo.png" alt="GastroTrack Logo" width="320" height="200">
    <h2>What's your role?</h2>
    <button onclick="window.location.href='signup.php'">Admin</button>
    <button onclick="showComingSoonMessage()">Staff</button>
    <div class="link">
      <a href="loginpage.php">Back to Login</a>
    </div>
  </div>
  
  <!-- Toast Message -->
  <div id="toast" class="toast">
    <div class="toast-icon">🚧</div>
    <div class="toast-content">
      <div class="toast-title">Coming Soon!</div>
      <div class="toast-message">Staff registration feature will be available in the next update.</div>
    </div>
  </div>
</body>
</html>
