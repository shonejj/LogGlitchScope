<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Error Log Viewer</title>
  <link rel="stylesheet" href="/Css/styles.css">
</head>

<body>
  <div class="container">


    <!-- mysql Error Log -->
    <div class="error-card">
      <div class="error-card-header">
        MySQL Error Log
      </div>
      <div class="error-card-body" id="mysql-log-entries">
        <!-- MySQL logs will be inserted here dynamically -->
      </div>
    </div>


    <!-- Apache Error Log -->
    <div class="error-card" id="apache-error-log">
      <div class="error-card-header">
        Apache Error Log
      </div>
      <div class="error-card-body" id="apache-error-body">
        <pre class="log-pre" id="apache-log-entries">
          <!-- Log entries will be displayed here -->
        </pre>
      </div>
    </div>

    <!-- Top Command Output -->
    <!-- Assuming you have a <pre> element with ID 'top-output' -->
    <div class="error-card" id="top-command-output">
      <div class="error-card-header">
        Top Command Output
      </div>
      <div class="error-card-body">
        <pre class="log-pre" id="top-output">
      <!-- Top command output will be displayed here -->
    </pre>
      </div>
    </div>


    <script src="Js/scripts.js"></script>
  </div>
</body>

</html>