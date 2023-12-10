<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Error Log Viewer</title>
  <link rel="stylesheet" href="/Css/styles.css">
</head>

<body>

  <!-- Top Navigation -->
  <div class="top-nav">
    <!-- You might add other navigation links here if needed -->
    <div class="logo">

      <img src="img/loglogotrans.webp" alt="Logo">
      <h3 class="logoname">LogGlitchScope</h3>


    </div> <!-- Placeholder for other links -->
    <!-- Logout Button -->
    <div class="logout">
      <button class="logout-btn" onclick="confirmLogout()">Logout</button>
    </div>
  </div>

  <br>

  <!-- Display success and error alerts -->
<?php if (session()->has('success')): ?>
  <div class="alert success" role="alert">
    <div class="progress-bar success"></div>
    <?= session()->get('success') ?>
  </div>
<?php endif; ?>

<?php if (session()->has('error')): ?>
  <div class="alert error" role="alert">
    <div class="progress-bar error"></div>
    <?= session()->get('error') ?>
  </div>
<?php endif; ?>


<!-- starting of the content area  -->

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

  <!-- Logout Confirmation Modal -->
  <div id="logoutModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>
      <h4>Are you sure you want to logout?</h4>
      <div class="btn-container">
        <button class="yes-btn" onclick="logout()">Yes</button>
        <button class="no-btn" onclick="closeModal()">No</button>
      </div>
    </div>
  </div>


</body>

</html>