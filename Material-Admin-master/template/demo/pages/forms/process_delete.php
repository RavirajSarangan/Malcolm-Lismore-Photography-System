
<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$database = "final";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if id is set in the URL
if (isset($_GET['id'])) {
    $id = $conn->real_escape_string($_GET['id']);

    // Prepare and execute the delete query
    $sql = "DELETE FROM bookings WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    // Redirect back to the bookings page
    header("Location: basic-forms.php");
} else {
    echo "No id parameter provided!";
}

$conn->close();
?>