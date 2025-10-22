// Inventory Page JavaScript

// Modal Functions
function openRestockModal() {
  const modal = document.getElementById('restockModal');
  modal.showModal();
}

function closeRestockModal() {
  const modal = document.getElementById('restockModal');
  modal.close();
  document.getElementById('restockForm').reset();
}

function openEditModal() {
  const modal = document.getElementById('editModal');
  modal.showModal();
}

function closeEditModal() {
  const modal = document.getElementById('editModal');
  modal.close();
  document.getElementById('editForm').reset();
}

// Handle Restock Form Submission
document.getElementById('restockForm').addEventListener('submit', function(e) {
  e.preventDefault();
  
  const ingredient = document.getElementById('ingredientSelect').value;
  const quantity = document.getElementById('quantity').value;
  const unit = document.getElementById('unit').value;
  
  // Here you would normally send data to backend
  console.log('Restock logged:', { ingredient, quantity, unit });
  
  alert(`Successfully logged restock:\n${ingredient}: ${quantity}${unit}`);
  closeRestockModal();
});

// Handle Edit Form Submission
document.getElementById('editForm').addEventListener('submit', function(e) {
  e.preventDefault();
  
  const ingredientName = document.getElementById('editIngredient').value;
  const currentStock = document.getElementById('currentStock').value;
  const requiredStock = document.getElementById('requiredStock').value;
  const category = document.getElementById('category').value;
  
  // Here you would normally send data to backend
  console.log('Ingredient edited:', { 
    ingredientName, 
    currentStock, 
    requiredStock, 
    category 
  });
  
  alert(`Successfully updated ingredient:\n${ingredientName}\nCurrent: ${currentStock}\nRequired: ${requiredStock}\nCategory: ${category}`);
  closeEditModal();
});

// Close modal when clicking outside
document.getElementById('restockModal').addEventListener('click', function(e) {
  if (e.target === this) {
    closeRestockModal();
  }
});

document.getElementById('editModal').addEventListener('click', function(e) {
  if (e.target === this) {
    closeEditModal();
  }
});

// ESC key to close modals
document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') {
    closeRestockModal();
    closeEditModal();
  }
});

