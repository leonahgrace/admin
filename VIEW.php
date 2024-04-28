<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <style>
    table,
    tr,
    td,
    th {
        border: solid 1px;
        background-color: #f0f0f0;
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
    }
    </style>
</head>

<body>

    <form action="VIEW.php" method="GET">
        <label for="search">Search:</label>
        <input type="text" name="search">
        <input type="submit" value="Search">
    </form>

    <table>
        <tr>
            <th> Name</th>
            <th> Phone </th>
            <th> Email </th>
            <th> Message </th>
            <th> Edit </th>
            <th> Delete </th>
        </tr>

        <!-- PHP code to display table rows goes here -->
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

// Check if search parameter is set
$search = isset($_GET['search']) ? $_GET['search'] : '';

// SQL query to select data from the table
$sql = "SELECT Name, Phone, Email, Message FROM submit";

// If search parameter is provided, filter the results
if ($search) {
    $sql .= " WHERE Name LIKE ? OR Phone LIKE ? OR Email LIKE ? OR Message LIKE ? ";
}

// Prepare the statement
$stmt = $connection->prepare($sql);

// If the statement is successfully prepared
if ($stmt) {
    // If search parameter is provided, bind parameters
    if ($search) {
        $searchParam = "%$search%";
        $stmt->bind_param("ssss", $searchParam, $searchParam, $searchParam, $searchParam);
    }

    // Execute the query
    if ($stmt->execute()) {
        // Get the result
        $result = $stmt->get_result();

        // Check if the query returned any rows
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr> 
                        <td>{$row['Name']}</td>
                        <td>{$row['Phone']}</td>
                        <td>{$row['Email']}</td>
                        <td>{$row['Message']}</td>
                        <td><a href='EDIT.php?id={$row['id']}&name={$row['Name']}&phone={$row['Phone']}&email={$row['Email']}&message={$row['Message']}'>Edit</a></td>
                        <td><a href='DELETE.php?name=" . urlencode($row['Name']) . "&phone=" . urlencode($row['Phone']) . "&email=" . urlencode($row['Email']) . "&message=" . urlencode($row['Message']) . "'>Delete</a></td>
                      </tr>";
            }
            
        } else {
            // No rows returned
            echo "<tr><td colspan='6'>0 results</td></tr>";
        }

        // Close result
        $result->close();
    } else {
        // Execution failed
        echo "Error executing statement: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
} else {
    // Preparation failed
    echo "Error preparing statement: " . $connection->error;
}

// Close connection
$connection->close();
?>
    </table>

</body>

</html>