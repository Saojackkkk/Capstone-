<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login - GastroTrack</title>
  <link rel="stylesheet" href="css/variables.css">
  <link rel="stylesheet" href="css/loginpage.css">
  <script src="js/login.js" defer></script>
</head>
<body>
  <div class="card">
   <img src="img/logo.png" alt="GastroTrack Logo" width="320" height="200">


    <!-- Normal Login Form -->
    <div id="loginForm">
      <input type="text" id="loginUser" placeholder="User ID/Email">
      <input type="password" id="loginPwd" placeholder="Password">
      <div class="remember-me">
        <div class="checkbox-wrapper">
          <input type="checkbox" id="rememberMe">
          <label for="rememberMe">Remember Me</label>
        </div>
        <a href="#" class="forget-password">Forget Password</a>
      </div>
      <button id="loginBtn" onclick="signIn()" disabled>Sign In</button>
      <div class="link">
        Don't have an account? <a href="role.php" class="signup">Sign up here</a>
      </div>
    </div>

    <!-- Auto-Filled Login (after signup) -->
    <div id="autoLogin" style="display:none;">
      <p>Welcome back! Your generated ID is:</p>
      <h3 id="autoID"></h3>
      <input type="password" id="autoPwd" placeholder="Enter Password">
      <div class="remember-me">
        <div class="checkbox-wrapper">
          <input type="checkbox" id="autoRememberMe">
          <label for="autoRememberMe">Remember Me</label>
        </div>
        <a href="#" class="forget-password">Forget Password</a>
      </div>
      <button id="autoLoginBtn" onclick="signIn()" disabled>Sign In</button>
      <div class="link">
        <a href="#" onclick="switchAccount()">Not your account? Switch login</a>
      </div>
    </div>
  </div>

</body>
</html>
