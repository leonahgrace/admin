<?php
session_start();

// Check if the user is already logged in, if yes, redirect them to the dashboard
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: DASHBOARD.php");
    exit;
}

// Check if the user submitted the login form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check your database for the user credentials
    $username = "admin"; // Change this to your actual username
    $password = "password10"; // Change this to your actual password

    if ($_POST["username"] === $username && $_POST["password"] === $password) {
        // Password is correct, start a new session
        session_start();

        // Store data in session variables
        $_SESSION["loggedin"] = true;

        // Redirect user to the dashboard page
        header("location: dashboard.php");
    } else {
        // Display an error message if username or password is incorrect
        $login_err = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css"> <!-- Link to your CSS file -->
</head>

<body>

    <div class="login-wrapper">
        <h2>Admin Login</h2>
        <?php
        if (isset($login_err)) {
            echo '<div class="alert">' . $login_err . '</div>';
        }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" required>
            </div>
            <div class="input-group">
                <button type="submit" class="btn">Login</button>
            </div>
        </form>
    </div>

</body>

</html>
