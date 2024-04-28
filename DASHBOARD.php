<?php
session_start();

// Check if the user is logged in, if not, redirect them to the login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
}

// Include any necessary files or connect to your database here

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css"> <!-- Link to your CSS file -->
</head>

<body>

    <nav>
        <ul>
            <li><a href="#">Manage Users</a></li>
            <li><a href="#">Manage Posts</a></li>
            <li><a href="#">Site Settings</a></li>
            <li><a href="logout.php">Logout</a></li> <!-- Logout link -->
        </ul>
    </nav>

    <div class="dashboard-wrapper">
        <h2>Welcome, Admin!</h2>
        <div class="dashboard-content">
            <h3>Recent Activity</h3>
            <ul>
                <li>registered.</li>
                
            </ul>
        </div>
        <div class="dashboard-widgets">
            <div class="widget">
                <h3>HAYS</h3>
               
            </div>
            <div class="widget">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">Add New User</a></li>
                   
                </ul>
            </div>
        </div>
    </div>

</body>

</html>
