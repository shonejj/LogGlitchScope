<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
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
    background-color: #333; /* Dark terminal-like background color */
    padding: 30px;
    border-radius: 15px; /* Increased border radius for curved edges */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Adjusted box shadow for depth */
}

.logo {
    margin-bottom: 30px;
}

.logo img {
    width: 200px;
    height: auto;
    border-radius: 50%; /* Make the logo circular */
    background-color: #007bff; /* New color for the logo */
    padding: 10px; /* Add some padding for better appearance */
}

.login-form input[type="text"],
.login-form input[type="password"],
.login-form input[type="submit"] {
    width: 100%;
    padding: 12px;
    margin-bottom: 20px;
    border-radius: 5px;
    border: 1px solid #555; /* Adjusted border color */
    box-sizing: border-box;
    background-color: #444; /* Darker background for input fields */
    color: #fff; /* Text color for input fields */
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
    color: #bbb; /* Lighter text color */
}

    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="img/loglogo.webp" alt="Logo">
        </div>
        <form class="login-form" action="/login/authenticate" method="post">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" value="Login">
        </form>
        <p class="text-below">LogGlitchScope - Secure login</p>
    </div>
</body>

</html>
