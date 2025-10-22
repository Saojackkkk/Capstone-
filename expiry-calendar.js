// Expiry Calendar JavaScript

let currentDate = new Date();
let currentMonth = 8; // September (0-indexed, so 8 = September)
let currentYear = 2025;

// Initialize with September 2025
currentDate.setFullYear(2025);
currentDate.setMonth(8);

const monthNames = [
  'January', 'February', 'March', 'April', 'May', 'June',
  'July', 'August', 'September', 'October', 'November', 'December'
];

function renderCalendar() {
  const calendarDays = document.getElementById('calendarDays');
  const monthDisplay = document.getElementById('currentMonth');
  
  // Update month display
  monthDisplay.textContent = `${monthNames[currentMonth]} ${currentYear}`;
  
  // Clear previous calendar
  calendarDays.innerHTML = '';
  
  // Get first day of month and number of days
  const firstDay = new Date(currentYear, currentMonth, 1).getDay();
  const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
  const daysInPrevMonth = new Date(currentYear, currentMonth, 0).getDate();
  
  // Get today's date for highlighting
  const today = new Date();
  const isCurrentMonth = today.getMonth() === currentMonth && today.getFullYear() === currentYear;
  const todayDate = today.getDate();
  
  // Add previous month's trailing days
  for (let i = firstDay - 1; i >= 0; i--) {
    const dayDiv = document.createElement('div');
    dayDiv.className = 'calendar-day other-month';
    dayDiv.textContent = daysInPrevMonth - i;
    calendarDays.appendChild(dayDiv);
  }
  
  // Add current month's days
  for (let day = 1; day <= daysInMonth; day++) {
    const dayDiv = document.createElement('div');
    dayDiv.className = 'calendar-day';
    dayDiv.textContent = day;
    
    // Highlight current day
    if (isCurrentMonth && day === todayDate) {
      dayDiv.classList.add('current-day');
    }
    
    // Add expiry indicator for days with expiring items
    // (In real implementation, this would be based on backend data)
    if (currentMonth === 8 && currentYear === 2025) {
      if (day === 2 || day === 3) {
        dayDiv.classList.add('has-expiry');
      }
    }
    
    // Add click event
    dayDiv.addEventListener('click', () => {
      // Remove previous selection
      document.querySelectorAll('.calendar-day.selected').forEach(el => {
        el.classList.remove('selected');
      });
      dayDiv.classList.add('selected');
      
      // In future, this could filter the expiry alerts below
      console.log(`Selected date: ${currentYear}-${currentMonth + 1}-${day}`);
    });
    
    calendarDays.appendChild(dayDiv);
  }
  
  // Add next month's leading days
  const totalCells = calendarDays.children.length;
  const remainingCells = 42 - totalCells; // 6 rows × 7 days = 42 cells
  
  for (let day = 1; day <= remainingCells; day++) {
    const dayDiv = document.createElement('div');
    dayDiv.className = 'calendar-day other-month';
    dayDiv.textContent = day;
    calendarDays.appendChild(dayDiv);
  }
}

function previousMonth() {
  currentMonth--;
  if (currentMonth < 0) {
    currentMonth = 11;
    currentYear--;
  }
  renderCalendar();
}

function nextMonth() {
  currentMonth++;
  if (currentMonth > 11) {
    currentMonth = 0;
    currentYear++;
  }
  renderCalendar();
}

// Add selected state style
const style = document.createElement('style');
style.textContent = `
  .calendar-day.selected {
    background: rgba(255, 255, 255, 0.4) !important;
    box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.6) !important;
  }
`;
document.head.appendChild(style);

