// scripts.js
function fetchLogs() {
  fetch('/fetch/mysql_logs', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    }
  })
    .then(response => response.text()) // Handle the response as plain text
    .then(data => {
      const mysqlLogEntries = document.getElementById('mysql-log-entries');
      mysqlLogEntries.innerHTML = '';
  
      const logLines = data.split('\n');
      const logEntries = logLines.slice(-50); // Get the last 50 log entries
  
      logEntries.forEach(logEntry => {
        const div = document.createElement('div');
        div.textContent = logEntry;
        mysqlLogEntries.appendChild(div);
      });
    })
    .catch(error => {
      console.error('Error fetching MySQL logs:', error);
    });
  
  
    fetch('/fetch/apache_logs', {
      method: 'POST', // Use POST method
      headers: {
        'Content-Type': 'application/json' // Specify content type if sending JSON
      }
    })
      .then(response => response.text())
      .then(data => {
        const apacheLogEntries = document.getElementById('apache-log-entries');
        apacheLogEntries.innerText = data.slice(-5000); // Display last 5000 characters (approx 50 lines)
      });
  
      fetch('/fetch/top_output', {
        method: 'POST', // Use POST method
        headers: {
          'Content-Type': 'application/json' // Specify content type if sending JSON
        }
      })
        .then(response => response.text())
        .then(data => {
          const topOutput = document.getElementById('top-output');
          topOutput.textContent = data; // Set text content of <pre> element
        })
        .catch(error => {
          console.error('Error fetching top command output:', error);
        });
      
  }
  
  setInterval(fetchLogs, 3000);
  
  fetchLogs(); // Initial fetch when the page loads
  