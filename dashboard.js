// Dashboard functionality (auth handled in dashboard.php)

// --- Chart (Sales & Demand) ---
(function(){
  const ctxEl = document.getElementById('salesChart');
  if (!ctxEl) return;

  new Chart(ctxEl, {
    type: 'line',
    data: {
      labels: ['Aug','Sept','Oct','Nov','Dec'],
      datasets: [
        {label:'Latte', data:[18,27,22,35,37], tension:.35, borderColor:'#2b9af4', backgroundColor:'rgba(43,154,244,0.06)', pointRadius:3},
        {label:'PBJ', data:[12,16,11,22,17], tension:.35, borderColor:'#25c3d9', backgroundColor:'rgba(37,195,217,0.06)', pointRadius:3},
        {label:'Pancake', data:[10,14,9,18,21], tension:.35, borderColor:'#f6c247', backgroundColor:'rgba(246,194,71,0.06)', pointRadius:3},
      ]
    },
    options: {
      responsive:true,
      maintainAspectRatio:false,
      plugins:{
        legend:{display:true, position:'bottom', labels:{boxWidth:10, padding:12}}
      },
      scales:{
        y:{beginAtZero:true, ticks:{stepSize:10}, grid:{color:'rgba(0,0,0,0.04)'}},
        x:{grid:{display:false}}
      }
    }
  });
})();

// --- Modal: Quick Log Sales ---
(function(){
  const logModal = document.getElementById('logModal');
  const openLogBtn = document.getElementById('openLog');

  if (openLogBtn && logModal) {
    // Open modal when button clicked
    openLogBtn.addEventListener('click', ()=> {
      const dateEl = document.getElementById('date');
      if (dateEl) dateEl.value = new Date().toISOString().slice(0,10);
      logModal.showModal();
    });

    // Handle modal close
    logModal.addEventListener('close', () => {
      if (logModal.returnValue === 'confirm') {
        const dish = document.getElementById('dish')?.value;
        const qty = parseInt(document.getElementById('qty')?.value || '0',10);
        const date = document.getElementById('date')?.value;
        console.log('Logged Sale:', { dish, qty, date });
        alert(`Saved: ${qty} × ${dish} on ${date}`);
      }
    });
  }
})();
