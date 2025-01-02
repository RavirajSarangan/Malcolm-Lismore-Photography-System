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

// Initialize response array
$response = array();

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are set in the POST data
    if (!empty($_POST["image_id"]) && !empty($_POST["image_title"]) && !empty($_POST["trainerSubtitle"]) && !empty($_POST["category"]) && !empty($_FILES["trainerImage"]["name"])) {
        // Sanitize the input (to prevent SQL injection)
        $image_id = $_POST["image_id"];
        $image_title = $_POST["image_title"];
        $trainerSubtitle = $_POST["trainerSubtitle"];
        $category = $_POST["category"];
        
        // Handle image upload
        $imageFileName = $_FILES["trainerImage"]["name"];
        $imageTempName = $_FILES["trainerImage"]["tmp_name"];
        $imagePath = "uploads/" . $imageFileName;
        if (!move_uploaded_file($imageTempName, $imagePath)) {
            // If image upload fails, send an error response
            $response["success"] = false;
            $response["message"] = "Failed to upload image";
        } else {
            // Prepare and execute the SQL statement to insert the new photographer data
            $sql = "INSERT INTO photographers (image_id, image_title, trainerSubtitle, category, image_path) VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("issss", $image_id, $image_title, $trainerSubtitle, $category, $imagePath);
            if ($stmt->execute()) {
                // If the insertion is successful, set success message in response
                $response["success"] = true;
                $response["message"] = "New photographer added successfully";
            } else {
                // If there's an error, set error message in response
                $response["success"] = false;
                $response["message"] = "Failed to add photographer: " . $conn->error;
            }
            
            // Close the prepared statement
            $stmt->close();
        }
    } else {
        // If not all required fields are set, set error message in response
        $response["success"] = false;
        $response["message"] = "Not all required fields are provided";
    }
} else {
    // If request method is not POST, set error message in response
    $response["success"] = false;
    $response["message"] = "Invalid request method";
}

// Close the database connection
$conn->close();

// Convert the response array to JSON format
header("Content-Type: application/json");
echo json_encode($response);
?>



