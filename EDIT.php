<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Record</title>
</head>

<body>

    <h2>Edit Record</h2>

    <?php
    // Database connection parameters
    $servername = 'localhost';
    $dbname = 'your_database_name';
    $username = 'your_username';
    $password = 'your_password';

    // Create connection
    $connection = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Check if ID parameter is provided
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Retrieve record from the database
        $sql = "SELECT name, phone, email, message FROM your_table_name WHERE id = $id";
        $result = $connection->query($sql);

        // Check if the record exists
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $name = $row['name'];
            $phone = $row['phone'];
            $email = $row['email'];
            $message = $row['message'];
        } else {
            echo "Record not found";
            exit();
        }
    } else {
        echo "ID parameter is missing";
        exit();
    }

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve updated form data
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Update record in the database
        $sql = "UPDATE your_table_name SET name='$name', phone='$phone', email='$email', message='$message' WHERE id=$id";

        if ($connection->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $connection->error;
        }
    }
    ?>

    <form action="edit.php?id=<?php echo $id; ?>" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>"><br>
        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>"><br>
        <label for="message">Message:</label><br>
        <textarea id="message" name="message"><?php echo $message; ?></textarea><br><br>
        <input type="submit" value="Update">
    </form>

</body>

</html>