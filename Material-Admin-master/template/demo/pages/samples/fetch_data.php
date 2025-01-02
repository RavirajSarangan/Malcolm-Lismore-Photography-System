<?php
// Database connection parameters
$servername = "localhost"; // Change this to your database server name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "final"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";

// Include database connection code here
// Assuming you have already established a database connection

// Fetch data from the database
$sql = "SELECT image_id, image_title, category, image_path FROM photographers";
$result = $conn->query($sql);

$rows = array(); // Initialize an empty array to store fetched rows

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $rows[] = $row; // Add each fetched row to the array
    }
}

// Close the database connection
$conn->close();

// Convert the array to JSON format and echo it
header('Content-Type: application/json');
echo json_encode($rows);}
?>
