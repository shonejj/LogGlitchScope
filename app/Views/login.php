<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 380px;
            margin: 80px auto;
            text-align: center;
            background-color: #333;
            /* Dark terminal-like background color */
            padding: 30px;
            border-radius: 15px;
            /* Increased border radius for curved edges */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            /* Adjusted box shadow for depth */
        }

        .logo {
            margin-bottom: 30px;
        }

        .logo img {
            width: 200px;
            height: auto;
            border-radius: 50%;
            /* Make the logo circular */
            background-color: #007bff;
            /* New color for the logo */
            padding: 10px;
            /* Add some padding for better appearance */
        }

        .login-form input[type="text"],
        .login-form input[type="password"],
        .login-form input[type="submit"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #555;
            /* Adjusted border color */
            box-sizing: border-box;
            background-color: #444;
            /* Darker background for input fields */
            color: #fff;
            /* Text color for input fields */
        }

        .login-form input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        .login-form input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .text-below {
            font-size: 14px;
            color: #bbb;
            /* Lighter text color */
        }

        .logoname {
            color: #bdbdbd;
        }
          /* Alert styles */
  .alert {
    position: relative;
    margin-bottom: 20px;
    padding: 15px;
    border-radius: 4px;
  }

  .success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
  }

  .error {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
  }

  /* Progress bar styles */
  .progress-bar {
    height: 5px;
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: #000000;
    animation: progress 3s cubic-bezier(0.19, 0.64, 0.76, 0.43);
  }

  @keyframes progress {
    0% {
      width: 100%;
    }

    100% {
      width: 0%;
    }
  }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="img/loglogo.webp" alt="Logo">
            </br></br>
            <h3 class="logoname">LogGlitchScope</h3>
        </div>

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


        <form class="login-form" action="/login/authenticate" method="post">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" value="Login">
        </form>
        <p class="text-below">LogGlitchScope - Secure login</p>
    </div>
</body>

<script>
  // Automatically close the alerts after 5 seconds
  document.addEventListener('DOMContentLoaded', function() {
    const successAlert = document.querySelector('.alert.success');
    const errorAlert = document.querySelector('.alert.error');

    if (successAlert) {
      setTimeout(function() {
        successAlert.style.display = 'none';
      }, 5000);
    }

    if (errorAlert) {
      setTimeout(function() {
        errorAlert.style.display = 'none';
      }, 5000);
    }
  });
</script>

</html>