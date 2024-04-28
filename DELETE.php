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

// Retrieve values from the URL
$name = $_GET['name'] ?? '';
$phone = $_GET['phone'] ?? '';
$email = $_GET['email'] ?? '';
$message = $_GET['message'] ?? '';

// Construct the SQL DELETE query using prepared statement
$sql = "DELETE FROM submit WHERE 
        Name = ? AND 
        Phone = ? AND
        Email = ? AND  
        Message = ? ";

// Prepare SQL statement
$stmt = $connection->prepare($sql);
if (!$stmt) {
    die('MySQL prepare error: ' . $connection->error);
}

// Bind parameters to the prepared statement as strings
$stmt->bind_param('ssss', $name, $phone, $email, $message);

// Execute the query
if ($stmt->execute()) {
    header("Location: VIEW.php");
} else {
    echo "Error deleting record: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$connection->close();
?>