<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>GastroTrack - Cost & Waste</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/variables.css">
  <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
  
  <!-- SIDEBAR -->
  <aside class="sidebar">
    <div class="brand">
      <div class="logo" aria-hidden="true"><span style="font-size:28px">👨🏻‍🍳</span></div>
      <span>GastroTrack</span>
    </div>

    <nav class="nav" aria-label="Main navigation">
      <a href="dashboard.php"><span>Dashboard</span></a>
      <a href="inventory.php"><span>Inventory</span></a>
      <a href="expiry-calendar.php"><span>Expiry Calendar</span></a>
      <a href="sales-report.php"><span>Sales Report</span></a>
      <a class="active" href="cost-waste.php"><span>Cost & Waste</span></a>
      <a href="suggestions.php"><span>Suggestions</span></a>
      <a href="menu-insights.php"><span>Menu Insights</span></a>
    </nav>

    <div class="spacer"></div>
    <nav class="nav">
      <a href="profile.php"><span>Profile</span></a>
      <a href="#" onclick="logout()"><span>Log Out</span></a>
    </nav>
  </aside>

  <!-- MAIN -->
  <main class="main">
    <div style="display: flex; align-items: center; justify-content: center; min-height: 60vh; flex-direction: column; gap: 20px;">
      <h1 style="font-size: 48px; color: var(--text-muted); margin: 0;">💰</h1>
      <h2 style="color: var(--text-primary); margin: 0;">Cost & Waste</h2>
      <p style="color: var(--text-muted); font-size: 16px;">This page is under construction.</p>
    </div>
  </main>

  <!-- Logout script -->
  <script>
    function logout() {
      console.log('Logout function called');
      localStorage.removeItem('userID');
      alert('Logged out successfully!');
      window.location.href = 'loginpage.php';
      return false;
    }
    
    // Check auth on page load
    window.onload = function() {
      var userId = localStorage.getItem('userID');
      console.log('Page loaded, userID:', userId);
      
      if (!userId || userId.trim() === '') {
        console.log('No userID found, redirecting to login');
        window.location.href = 'loginpage.php';
        return;
      }
      
      console.log('User authenticated, page ready');
    };
  </script>
</body>
</html>

