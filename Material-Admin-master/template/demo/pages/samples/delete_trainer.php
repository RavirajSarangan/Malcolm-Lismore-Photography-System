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
}

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the photographer ID is provided in the POST data
    if (!empty($_POST["deleteTrainerId"])) {
        // Sanitize the input (to prevent SQL injection)
        $deleteTrainerId = $_POST["deleteTrainerId"];

        // Prepare and execute the SQL statement to delete the photographer
        $sql = "DELETE FROM photographers WHERE image_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $deleteTrainerId);
        if ($stmt->execute()) {
            // If deletion is successful, send a success response
            $response = array(
                "success" => true,
                "message" => "Photographer deleted successfully"
            );
        } else {
            // If there's an error, send an error response
            $response = array(
                "success" => false,
                "message" => "Failed to delete photographer"
            );
        }
        
        // Close the prepared statement
        $stmt->close();
    } else {
        // If photographer ID is not provided, send an error response
        $response = array(
            "success" => false,
            "message" => "Photographer ID is not provided"
        );
    }
} else {
    // If request method is not POST, send an error response
    $response = array(
        "success" => false,
        "message" => "Invalid request method"
    );
}

// Convert the response array to JSON format and send it as the response
header("Content-Type: application/json");
echo json_encode($response);

// Close the database connection
$conn->close();
?>
