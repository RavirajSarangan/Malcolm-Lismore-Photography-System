<?php
include 'config.php';

// Establish database connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("UPDATE about SET title=?, description=? WHERE id=?");
    $stmt->bind_param("ssi", $title, $description, $id);

    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();
        header("Location: chartjs.php");
        exit; // Add exit to prevent further execution
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>