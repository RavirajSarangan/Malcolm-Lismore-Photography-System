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
    // Check if all required fields are set in the POST data
    if (!empty($_POST["trainerId"]) && !empty($_POST["updateTrainerName"]) && !empty($_POST["updateTrainerSubtitle"]) && !empty($_POST["updateTrainerCategory"])) {
        // Sanitize the input (to prevent SQL injection)
        $trainerId = $_POST["trainerId"];
        $updateTrainerName = $_POST["updateTrainerName"];
        $updateTrainerSubtitle = $_POST["updateTrainerSubtitle"];
        $updateTrainerCategory = $_POST["updateTrainerCategory"];
        
        // Check if an image file is uploaded
        if (!empty($_FILES["updateTrainerImage"]["name"])) {
            // Handle image upload
            $updateImageFileName = $_FILES["updateTrainerImage"]["name"];
            $updateImageTempName = $_FILES["updateTrainerImage"]["tmp_name"];
            $updateImagePath = "uploads/" . $updateImageFileName;
            if (!move_uploaded_file($updateImageTempName, $updateImagePath)) {
                // If image upload fails, send an error response
                $response = array(
                    "success" => false,
                    "message" => "Failed to upload image"
                );
                header("Content-Type: application/json");
                echo json_encode($response);
                exit;
            }
        } else {
            // If no image is uploaded, keep the existing image path
            // You may want to retrieve the existing image path from the database based on the photographer ID
            // For this example, let's assume you already have $existingImagePath set
            $updateImagePath = $existingImagePath;
        }
        
        // Prepare and execute the SQL statement to update the photographer data
        $sql = "UPDATE photographers SET image_title = ?, trainerSubtitle = ?, category = ?, image_path = ? WHERE image_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssi", $updateTrainerName, $updateTrainerSubtitle, $updateTrainerCategory, $updateImagePath, $trainerId);
        if ($stmt->execute()) {
            // If the update is successful, send a success response
            $response = array(
                "success" => true,
                "message" => "Photographer updated successfully"
            );
        } else {
            // If there's an error, send an error response
            $response = array(
                "success" => false,
                "message" => "Failed to update photographer"
            );
        }
        
        // Close the prepared statement
        $stmt->close();
    } else {
        // If not all required fields are set, send an error response
        $response = array(
            "success" => false,
            "message" => "Not all required fields are provided"
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
