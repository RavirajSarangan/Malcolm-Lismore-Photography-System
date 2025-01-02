
<?php
header('Content-Type: application/json');

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "final";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Perform SQL query to retrieve about content
$sql = "SELECT * FROM about";
$result = $conn->query($sql);

$aboutContent = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $aboutContent[] = $row;
    }
}

// Close the connection
$conn->close();

// Return the about content as JSON
echo json_encode($aboutContent);
?>