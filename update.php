<?php
// Database connection parameters
$servername = 'localhost';
$dbname = 'ne';
$username = 'root';
$password = 'password123..';

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Check if the form was submitted with the POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize inputs
    $id = $_POST['id'];
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $message = mysqli_real_escape_string($connection, $_POST['message']);

    // Prepare UPDATE statement with placeholders
    $sql = "UPDATE submit SET name=?, phone=?, email=?, message=? WHERE id=?";

    // Prepare and bind parameters
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("ssssi", $name, $phone, $email, $message, $id);

    // Execute the UPDATE statement
    if ($stmt->execute()) {
        // Redirect to VIEW.php after successful update
        header("Location: VIEW.php");
        exit();
    } else {
        echo "Error updating record: " . $stmt->error;
    }
} else {
    // Redirect to VIEW.php if update.php is accessed directly without POST method
    header("Location: VIEW.php");
    exit();
}
?>