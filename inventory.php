<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>GastroTrack - Inventory</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/variables.css">
  <link rel="stylesheet" href="css/dashboard.css">
  <link rel="stylesheet" href="css/inventory.css">
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
      <a class="active" href="inventory.php"><span>Inventory</span></a>
      <a href="expiry-calendar.php"><span>Expiry Calendar</span></a>
      <a href="sales-report.php"><span>Sales Report</span></a>
      <a href="cost-waste.php"><span>Cost & Waste</span></a>
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
    <section class="inventory-container">
      <!-- Perishable Ingredients -->
      <div class="inventory-card">
        <h2>Perishable Ingredients</h2>
        <div class="ingredients-list">
          <div class="ingredient-row">
            <span class="ingredient-name">Milk(C)</span>
            <div class="progress-bar">
              <div class="progress-fill progress-warn" style="width: 70%"></div>
            </div>
          </div>
          <div class="ingredient-row">
            <span class="ingredient-name">Milk(R)</span>
            <div class="progress-bar">
              <div class="progress-fill progress-good" style="width: 100%"></div>
            </div>
          </div>
          <div class="ingredient-row">
            <span class="ingredient-name">Lettuce(C)</span>
            <div class="progress-bar">
              <div class="progress-fill progress-bad" style="width: 12%"></div>
            </div>
          </div>
          <div class="ingredient-row">
            <span class="ingredient-name">Lettuce(R)</span>
            <div class="progress-bar">
              <div class="progress-fill progress-good" style="width: 100%"></div>
            </div>
          </div>
          <div class="ingredient-row">
            <span class="ingredient-name">Chicken(C)</span>
            <div class="progress-bar">
              <div class="progress-fill progress-warn" style="width: 45%"></div>
            </div>
          </div>
          <div class="ingredient-row">
            <span class="ingredient-name">Chicken(R)</span>
            <div class="progress-bar">
              <div class="progress-fill progress-good" style="width: 100%"></div>
            </div>
          </div>
          <div class="ingredient-row">
            <span class="ingredient-name">Tomato(C)</span>
            <div class="progress-bar">
              <div class="progress-fill progress-empty" style="width: 0%"></div>
            </div>
          </div>
          <div class="ingredient-row">
            <span class="ingredient-name">Tomato(R)</span>
            <div class="progress-bar">
              <div class="progress-fill progress-good" style="width: 100%"></div>
            </div>
          </div>
          <div class="ingredient-row">
            <span class="ingredient-name">Bread(C)</span>
            <div class="progress-bar">
              <div class="progress-fill progress-empty" style="width: 0%"></div>
            </div>
          </div>
          <div class="ingredient-row">
            <span class="ingredient-name">Bread(R)</span>
            <div class="progress-bar">
              <div class="progress-fill progress-good" style="width: 100%"></div>
            </div>
          </div>
          <div class="ingredient-row">
            <span class="ingredient-name">Egg(C)</span>
            <div class="progress-bar">
              <div class="progress-fill progress-empty" style="width: 0%"></div>
            </div>
          </div>
          <div class="ingredient-row">
            <span class="ingredient-name">Egg(R)</span>
            <div class="progress-bar">
              <div class="progress-fill progress-good" style="width: 100%"></div>
            </div>
          </div>
          <div class="ingredient-row">
            <span class="ingredient-name">Lemon(C)</span>
            <div class="progress-bar">
              <div class="progress-fill progress-empty" style="width: 0%"></div>
            </div>
          </div>
          <div class="ingredient-row">
            <span class="ingredient-name">Lemon(C)</span>
            <div class="progress-bar">
              <div class="progress-fill progress-good" style="width: 100%"></div>
            </div>
          </div>
          <div class="ingredient-row">
            <span class="ingredient-name">Mushroom(C)</span>
            <div class="progress-bar">
              <div class="progress-fill progress-empty" style="width: 0%"></div>
            </div>
          </div>
          <div class="ingredient-row">
            <span class="ingredient-name">Mushroom(R)</span>
            <div class="progress-bar">
              <div class="progress-fill progress-good" style="width: 100%"></div>
            </div>
          </div>
          <div class="ingredient-row">
            <span class="ingredient-name">Fresh Fruits(C)</span>
            <div class="progress-bar">
              <div class="progress-fill progress-empty" style="width: 0%"></div>
            </div>
          </div>
          <div class="ingredient-row">
            <span class="ingredient-name">Fresh Fruits(R)</span>
            <div class="progress-bar">
              <div class="progress-fill progress-good" style="width: 100%"></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Semi-perishable Ingredients -->
      <div class="inventory-card">
        <h2>Semi-perishable Ingredients</h2>
        <div class="ingredients-list">
          <div class="ingredient-row">
            <span class="ingredient-name">Coffee Beans(C)</span>
            <div class="progress-bar">
              <div class="progress-fill progress-bad" style="width: 15%"></div>
            </div>
          </div>
          <div class="ingredient-row">
            <span class="ingredient-name">Coffee Beans(R)</span>
            <div class="progress-bar">
              <div class="progress-fill progress-empty" style="width: 0%"></div>
            </div>
          </div>
          <div class="ingredient-row">
            <span class="ingredient-name">Coconut Milk(C)</span>
            <div class="progress-bar">
              <div class="progress-fill progress-good" style="width: 100%"></div>
            </div>
          </div>
          <div class="ingredient-row">
            <span class="ingredient-name">Coconut Milk(R)</span>
            <div class="progress-bar">
              <div class="progress-fill progress-good" style="width: 100%"></div>
            </div>
          </div>
          <div class="ingredient-row">
            <span class="ingredient-name">Cocoa Powder(C)</span>
            <div class="progress-bar">
              <div class="progress-fill progress-good" style="width: 100%"></div>
            </div>
          </div>
          <div class="ingredient-row">
            <span class="ingredient-name">Cocoa Powder(R)</span>
            <div class="progress-bar">
              <div class="progress-fill progress-good" style="width: 100%"></div>
            </div>
          </div>
          <div class="ingredient-row">
            <span class="ingredient-name">Matcha Powder(C)</span>
            <div class="progress-bar">
              <div class="progress-fill progress-warn" style="width: 55%"></div>
            </div>
          </div>
          <div class="ingredient-row">
            <span class="ingredient-name">Matcha Powder(C)</span>
            <div class="progress-bar">
              <div class="progress-fill progress-good" style="width: 100%"></div>
            </div>
          </div>
          <div class="ingredient-row">
            <span class="ingredient-name">Mayonnaise(C)</span>
            <div class="progress-bar">
              <div class="progress-fill progress-good" style="width: 100%"></div>
            </div>
          </div>
          <div class="ingredient-row">
            <span class="ingredient-name">Mayonnaise(R)</span>
            <div class="progress-bar">
              <div class="progress-fill progress-good" style="width: 100%"></div>
            </div>
          </div>
          <div class="ingredient-row">
            <span class="ingredient-name">Jam(C)</span>
            <div class="progress-bar">
              <div class="progress-fill progress-good" style="width: 100%"></div>
            </div>
          </div>
          <div class="ingredient-row">
            <span class="ingredient-name">Jam(R)</span>
            <div class="progress-bar">
              <div class="progress-fill progress-good" style="width: 100%"></div>
            </div>
          </div>
          <div class="ingredient-row">
            <span class="ingredient-name">Cream(C)</span>
            <div class="progress-bar">
              <div class="progress-fill progress-good" style="width: 100%"></div>
            </div>
          </div>
          <div class="ingredient-row">
            <span class="ingredient-name">Cream(R)</span>
            <div class="progress-bar">
              <div class="progress-fill progress-good" style="width: 100%"></div>
            </div>
          </div>
          <div class="ingredient-row">
            <span class="ingredient-name">Milk(C)</span>
            <div class="progress-bar">
              <div class="progress-fill progress-bad" style="width: 20%"></div>
            </div>
          </div>
          <div class="ingredient-row">
            <span class="ingredient-name">Milk(R)</span>
            <div class="progress-bar">
              <div class="progress-fill progress-empty" style="width: 0%"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Action Buttons -->
    <div class="action-buttons">
      <button class="action-btn btn-restock" onclick="openRestockModal()">LOG RESTOCK</button>
      <button class="action-btn btn-edit" onclick="openEditModal()">EDIT INGREDIENTS</button>
    </div>
  </main>

  <!-- Log Restock Modal -->
  <dialog id="restockModal" class="modal-dialog">
    <div class="modal-content">
      <h3>Log Restock</h3>
      <form id="restockForm">
        <div class="form-group">
          <label for="ingredientSelect">Ingredient</label>
          <select id="ingredientSelect" class="form-control" required>
            <option value="">Select ingredient...</option>
            <option value="milk">Milk</option>
            <option value="coffee-beans">Coffee Beans</option>
            <option value="lettuce">Lettuce</option>
            <option value="chicken">Chicken</option>
            <option value="tomato">Tomato</option>
            <option value="bread">Bread</option>
            <option value="egg">Egg</option>
            <option value="lemon">Lemon</option>
            <option value="mushroom">Mushroom</option>
            <option value="fresh-fruits">Fresh Fruits</option>
            <option value="coconut-milk">Coconut Milk</option>
            <option value="cocoa-powder">Cocoa Powder</option>
            <option value="matcha-powder">Matcha Powder</option>
            <option value="mayonnaise">Mayonnaise</option>
            <option value="jam">Jam</option>
            <option value="cream">Cream</option>
          </select>
        </div>
        <div class="form-group">
          <label for="quantity">Quantity</label>
          <input type="number" id="quantity" class="form-control" min="0" step="0.1" required>
        </div>
        <div class="form-group">
          <label for="unit">Unit</label>
          <select id="unit" class="form-control" required>
            <option value="kg">kg</option>
            <option value="L">L</option>
            <option value="pcs">pcs</option>
            <option value="g">g</option>
            <option value="ml">ml</option>
          </select>
        </div>
        <div class="modal-actions">
          <button type="button" class="btn btn-cancel" onclick="closeRestockModal()">Cancel</button>
          <button type="submit" class="btn btn-submit">Log Restock</button>
        </div>
      </form>
    </div>
  </dialog>

  <!-- Edit Ingredients Modal -->
  <dialog id="editModal" class="modal-dialog">
    <div class="modal-content">
      <h3>Edit Ingredients</h3>
      <form id="editForm">
        <div class="form-group">
          <label for="editIngredient">Ingredient Name</label>
          <input type="text" id="editIngredient" class="form-control" placeholder="e.g., Coffee Beans" required>
        </div>
        <div class="form-group">
          <label for="currentStock">Current Stock (C)</label>
          <input type="number" id="currentStock" class="form-control" min="0" step="0.1" required>
        </div>
        <div class="form-group">
          <label for="requiredStock">Required Stock (R)</label>
          <input type="number" id="requiredStock" class="form-control" min="0" step="0.1" required>
        </div>
        <div class="form-group">
          <label for="category">Category</label>
          <select id="category" class="form-control" required>
            <option value="">Select category...</option>
            <option value="perishable">Perishable</option>
            <option value="semi-perishable">Semi-perishable</option>
          </select>
        </div>
        <div class="modal-actions">
          <button type="button" class="btn btn-cancel" onclick="closeEditModal()">Cancel</button>
          <button type="submit" class="btn btn-submit">Save Changes</button>
        </div>
      </form>
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
      
      console.log('User authenticated, page ready');
    };
  </script>
  
  <script src="js/inventory.js"></script>
</body>
</html>

