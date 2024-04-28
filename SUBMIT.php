<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to your MySQL database
    $servername = "localhost"; // Change this if your database is hosted elsewhere
    $username = "root"; // Change this if your MySQL username is different
    $password = "password123.."; // Change this if your MySQL password is set
    $dbname = "ne"; // Change this to your database name

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Escape user inputs for security
    $name = $conn->real_escape_string($_POST['name']);
    $phone = $conn->real_escape_string($_POST['phone']); // Adjusted to match your database column name
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    // Insert form data into database
    $sql = "INSERT INTO submit (name, phone, email, message) VALUES ('$name', '$phone', '$email', '$message')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
   
    // Close the connection
    $conn->close();
} else {
    // Display an error message if the form is not submitted
    echo "Error: Form not submitted.";
}
?>