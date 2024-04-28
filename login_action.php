<?php
session_start();

// Establish database connection
$servername = "localhost";
$username = "root";
$password = "password123.."; //papalitan to ng password ng myphp admin natin
$dbname = "new";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the username and password from the form submission
$username_input = $_POST['username'];
$password_input = $_POST['password'];

// Prepare and execute SQL statement to fetch user from database
$stmt = $conn->prepare("SELECT username, password FROM users WHERE username = ?");
$stmt->bind_param("s", $username_input);
$stmt->execute();
$result = $stmt->get_result();

// Check if user exists and password matches
if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password_input, $row['password'])) {
        // Authentication successful, set session variables
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username_input;
        // Redirect to admin dashboard
        header("Location: admin_dashboard.php");
        exit;
    } else {
        // Password incorrect, redirect back to login page with error message
        $_SESSION['login_error'] = "Invalid username or password";
        header("Location: login.php");
        exit;
    }
} else {
    // User does not exist, redirect back to login page with error message
    $_SESSION['login_error'] = "Invalid username or password";
    header("Location: login.php");
    exit;
}



?>