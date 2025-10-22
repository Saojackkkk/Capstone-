<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>GastroTrack - Dashboard</title>

  <!-- Fonts + Chart.js -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/variables.css">
  <link rel="stylesheet" href="css/dashboard.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
</head>
<body>
  
  <!-- SIDEBAR -->
  <aside class="sidebar">
    <div class="brand">
      <div class="logo" aria-hidden="true"><span style="font-size:28px">👨🏻‍🍳</span></div>
      <span>GastroTrack</span>
    </div>

    <nav class="nav" aria-label="Main navigation">
      <a class="active" href="dashboard.php"><span>Dashboard</span></a>
      <a href="inventory.php"><span>Inventory</span></a>
      <a href="expiry-calendar.php"><span>Expiry Calendar</span></a>
      <a href="sales-report.php"><span>Sales Report</span></a>
      <a href="cost-waste.php"><span>Cost & Waste</span></a>
      <a href="suggestions.php"><span>Suggestions</span></a>
      <a href="menu-insights.php"><span>Menu Insights</span></a>
    </nav>

    <div class="spacer"></div>
    <nav class="nav">
      <a href="profile.php"><span>Profile</span></a>
      <a href="#" id="logoutLink" onclick="logout()"><span>Log Out</span></a>
    </nav>
  </aside>

  <!-- MAIN -->
  <main class="main">
    <!-- Row 1 -->
    <section class="grid">
      <!-- Combined Sales & Predicted Demand -->
      <div class="card rounded-bubble">
        <h3>Sales & Demand</h3>
        <div class="sales-inner">
          <div class="chart-wrap">
            <canvas id="salesChart"></canvas>
            <div class="space"></div>
            <button class="btn">View Full Report</button>
          </div>

          <div class="pred-block" aria-label="Predicted Demand Next 7 Days">
            <h4>Predicted Demand</h4>
            <div class="muted" style="font-size:13px">Next 7 Days</div>
            <div class="pred-item"><div>Latte</div><div style="color:#c7ffd9">↑ 15%</div></div>
            <div class="pred-item"><div>PBJ</div><div style="color:#ffd6d6">↓ 5%</div></div>
            <div class="pred-item"><div>Pancake</div><div style="color:#ffd6d6">↓ 30%</div></div>
            <div style="flex:1"></div>
            <button class="btn" style="background:#ffffff22; color:#fff; border:1px solid rgba(255,255,255,.12)">View Predictions</button>
          </div>
        </div>
      </div>

      <!-- Menu Performance -->
      <div class="card">
        <h3>Menu Performance</h3>
        <div class="muted" style="margin-bottom:6px">Top 3 Selling</div>
        <div class="list" style="margin-bottom:10px">
          <div><span class="dot green"></span>Latte</div>
          <div><span class="dot green"></span>PBJ Jaffles</div>
          <div><span class="dot green"></span>Carbonara Pasta</div>
        </div>
        <div class="muted" style="margin:6px 0 10px">Bottom 3 Selling</div>
        <div class="list">
          <div><span class="dot red"></span>Salad</div>
          <div><span class="dot red"></span>CC Muffin</div>
          <div><span class="dot red"></span>Oreo Milkshake</div>
        </div>
        <div class="space"></div>
        <div class="row">
          <button class="btn secondary">View Menu Insights</button>
          <button class="btn" id="openLog">Quick Log Sales</button>
        </div>
      </div>
    </section>

    <!-- Row 2 -->
    <section class="grid" style="margin-top:8px">
      <div class="card">
        <h3>Inventory Overview</h3>
        <div class="inv-row"><div class="muted">Milk</div><div class="bar ok"><span style="width:78%"></span></div></div>
        <div class="inv-row"><div class="muted">Coffee Beans</div><div class="bar bad"><span style="width:22%"></span></div></div>
        <div class="inv-row"><div class="muted">Toast</div><div class="bar warn"><span style="width:60%"></span></div></div>
        <div class="space"></div>
        <button class="btn">View Full Inventory</button>
      </div>

      <div class="card">
        <h3>Expiry Alerts</h3>
        <div class="alert"><span class="badge b-bad">⚠️</span><div><strong>Milk</strong> (8L) expiring in <strong>1 day</strong>.</div></div>
        <div class="alert"><span class="badge b-warn">⚠️</span><div><strong>Avocado</strong> (2.3kg) expiring in <strong>2 days</strong>.</div></div>
        <div class="space"></div>
        <button class="btn">View Expiry Calendars</button>
      </div>
    </section>

    <!-- Row 3: Suggestions / Messages -->
    <section class="single-row">
      <div class="card">
        <h3>Suggest by GastroTrack</h3>
        <div class="suggest-messages-layout">
          <div class="suggestions-content">
            <div class="msg">Coffee Beans low in stock — <strong>Restock in 2 days</strong>.</div>
            <div class="space"></div>
            <div class="msg">Milk expiring soon — <strong>Run Latte promotion</strong>.</div>
          </div>
          <div class="message-item">
            <div class="message-badge">9+</div>
            <div class="message-text">View All Messages</div>
          </div>
        </div>
      </div>
    </section>
  </main>
  
  <!-- Simple logout script for Safari compatibility -->
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
  
  <script src="dashboard.js"></script>
</body>
</html>