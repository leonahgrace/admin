<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="styles/login.css">
</head>

<body>
    <div class="container">
        <h2>Admin Login</h2>
        <form id="loginForm" method="POST" action="login_action.php">
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <?php
            // Display error message if login failed
            if (isset($_SESSION['login_error'])) {
                echo '<p class="error-message">' . $_SESSION['login_error'] . '</p>';
                unset($_SESSION['login_error']); // Clear the error message after displaying
            }
            ?>
            <div class="clearfix">
                <button class="button-right" type="submit">Login</button>
            </div>
        </form>
    </div>
</body>

</html>