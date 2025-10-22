<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>GastroTrack - Profile</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/variables.css">
  <link rel="stylesheet" href="css/dashboard.css">
  <link rel="stylesheet" href="css/profile.css">
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
      <a href="cost-waste.php"><span>Cost & Waste</span></a>
      <a href="suggestions.php"><span>Suggestions</span></a>
      <a href="menu-insights.php"><span>Menu Insights</span></a>
    </nav>

    <div class="spacer"></div>
    <nav class="nav">
      <a class="active" href="profile.php"><span>Profile</span></a>
      <a href="#" onclick="logout()"><span>Log Out</span></a>
    </nav>
  </aside>

  <!-- MAIN -->
  <main class="main profile-main">
    <!-- Profile Card -->
    <div class="profile-card">
      <!-- Avatar -->
      <div class="profile-avatar"></div>

      <!-- Username -->
      <div class="profile-field">
        <span id="username">@...</span>
      </div>

      <!-- Real Name -->
      <div class="profile-field">
        <span id="realname">Hor Fei-By</span>
      </div>

      <!-- Role Badge -->
      <div class="role-badge">Admin</div>

      <!-- Restaurant Name -->
      <div class="profile-field">
        <span id="restaurant">Goodluck Cafe</span>
      </div>

      <!-- User ID -->
      <div class="user-id">ID: <span id="userid">...</span></div>

      <!-- Action Buttons -->
      <div class="profile-actions">
        <button class="btn-manage" onclick="openManageStaffModal()">MANAGE STAFF</button>
        <button class="btn-edit" onclick="openEditProfileModal()">EDIT PROFILE</button>
      </div>
    </div>

    <!-- Side Actions -->
    <div class="side-actions">
      <button class="side-btn" onclick="exportSalesData()">EXPORT SALES DATA</button>
      <button class="side-btn side-btn-empty"></button>
      <button class="side-btn side-btn-empty"></button>
    </div>
  </main>

  <!-- Edit Profile Modal -->
  <dialog id="editProfileModal" class="modal-dialog">
    <div class="modal-content">
      <h3>Edit Profile</h3>
      <form id="editProfileForm">
        <div class="form-group">
          <label for="editUsername">Username (Cannot be changed)</label>
          <input type="text" id="editUsername" class="form-control" placeholder="@username" readonly>
        </div>
        <div class="form-group">
          <label for="editRealname">Real Name</label>
          <input type="text" id="editRealname" class="form-control" placeholder="Your Name" required>
        </div>
        <div class="form-group">
          <label for="editRestaurant">Restaurant Name</label>
          <input type="text" id="editRestaurant" class="form-control" placeholder="Restaurant Name" required>
        </div>
        <div class="form-group">
          <label for="editPassword">New Password (Optional)</label>
          <input type="password" id="editPassword" class="form-control" placeholder="Leave blank to keep current password">
        </div>
        <div class="modal-actions">
          <button type="button" class="btn btn-cancel" onclick="closeEditProfileModal()">Cancel</button>
          <button type="submit" class="btn btn-submit">Save Changes</button>
        </div>
      </form>
    </div>
  </dialog>

  <!-- Manage Staff Modal -->
  <dialog id="manageStaffModal" class="modal-dialog">
    <div class="modal-content">
      <h3>Manage Staff</h3>
      <div class="staff-info">
        <p>Staff management feature coming soon.</p>
        <p>Here you will be able to:</p>
        <ul>
          <li>View all staff members</li>
          <li>Add new staff</li>
          <li>Edit staff details</li>
          <li>Remove staff</li>
        </ul>
      </div>
      <div class="modal-actions">
        <button type="button" class="btn btn-submit" onclick="closeManageStaffModal()">Close</button>
      </div>
    </div>
  </dialog>

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
      
      // Display logged-in user's information
      document.getElementById('username').textContent = '@' + userId;
      document.getElementById('realname').textContent = userId;
      document.getElementById('userid').textContent = userId;
      
      console.log('User authenticated, page ready');
    };

    // Edit Profile Modal Functions
    function openEditProfileModal() {
      const modal = document.getElementById('editProfileModal');
      // Pre-fill form with current values
      document.getElementById('editUsername').value = document.getElementById('username').textContent;
      document.getElementById('editRealname').value = document.getElementById('realname').textContent;
      document.getElementById('editRestaurant').value = document.getElementById('restaurant').textContent;
      modal.showModal();
    }

    function closeEditProfileModal() {
      const modal = document.getElementById('editProfileModal');
      modal.close();
      document.getElementById('editProfileForm').reset();
    }

    // Manage Staff Modal Functions
    function openManageStaffModal() {
      const modal = document.getElementById('manageStaffModal');
      modal.showModal();
    }

    function closeManageStaffModal() {
      const modal = document.getElementById('manageStaffModal');
      modal.close();
    }

    // Export Sales Data Function
    function exportSalesData() {
      alert('Exporting sales data...\nThis feature will be implemented soon.');
      console.log('Export sales data requested');
    }

    // Handle Edit Profile Form Submission
    document.getElementById('editProfileForm').addEventListener('submit', function(e) {
      e.preventDefault();
      
      const realname = document.getElementById('editRealname').value;
      const restaurant = document.getElementById('editRestaurant').value;
      const password = document.getElementById('editPassword').value;
      
      // Update display (username is readonly and comes from localStorage)
      document.getElementById('realname').textContent = realname;
      document.getElementById('restaurant').textContent = restaurant;
      
      // Here you would normally send data to backend
      console.log('Profile updated:', { realname, restaurant, password: password ? '***' : 'unchanged' });
      
      alert('Profile updated successfully!');
      closeEditProfileModal();
    });

    // Close modals when clicking outside
    document.getElementById('editProfileModal').addEventListener('click', function(e) {
      if (e.target === this) {
        closeEditProfileModal();
      }
    });

    document.getElementById('manageStaffModal').addEventListener('click', function(e) {
      if (e.target === this) {
        closeManageStaffModal();
      }
    });

    // ESC key to close modals
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape') {
        closeEditProfileModal();
        closeManageStaffModal();
      }
    });
  </script>
</body>
</html>

