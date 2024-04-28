<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect the user to the login page if not logged in
    header("Location: login.php");
    exit;
}

// Logout functionality
if (isset($_POST['logout'])) {
    // Clear all session variables
    $_SESSION = array();
    // Destroy the session
    session_destroy();
    // Redirect to the login page
    header("Location: login.php");
    exit;
}

// Establish database connection
$servername = "localhost";
$username = "root"; //
$password = "password123.."; //papalitan ulit to dapat accurate sya dun sa myphp admin natin
$dbname = "ne"; // eto din papalitan dapat same sya sa gamit nating database sa myphp admin natin 

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve booking data from the database
$sql = "SELECT * FROM submit"; // Change table name to bookings
$result = $conn->query($sql);

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    .edit-btn,
    .delete-btn {
        padding: 5px 10px;
        border: none;
        cursor: pointer;
    }

    .edit-btn {
        background-color: #4CAF50;
        color: white;
    }

    .delete-btn {
        background-color: #f44336;
        color: white;
    }

    .logout-btn {
        padding: 5px 10px;
        background-color: #f44336;
        color: white;
        border: none;
        cursor: pointer;
        float: right;
    }
    </style>
</head>

<body>
    <!-- Logout button -->
    <form method="post" style="margin-bottom: 20px;">
        <button type="submit" name="logout" class="logout-btn">Logout</button>
    </form>

    <h2>Admin Dashboard</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact Number</th>
            <th>Message</th>
            <th>Actions</th>
        </tr>
        <?php
        // Loop through each row of the result set
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["phone"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["message"] . "</td>";
            echo "<td>";
            echo "<a href='EDIT.php?id=" . $row["id"] . "' class='edit-btn'>Edit</a>";
            echo "<a href='DELETE.php?id=" . $row["id"] . "' class='delete-btn' onclick='return confirm(\"Are you sure you want to delete this booking?\")'>Delete</a>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>