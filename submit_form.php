<?php
// Database connection settings
$host = 'localhost'; // Change this to your database host
$dbname = 'your_database_name'; // Change this to your database name
$username = 'your_username'; // Change this to your database username
$password = 'your_password'; // Change this to your database password

try {
    // Connect to the database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Prepare SQL statement
    $sql = "INSERT INTO contacts (name, email, phone, message) VALUES (:name, :email, :phone, :message)";
    $stmt = $pdo->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':message', $message);

    // Execute the query
    $stmt->execute();

    // Close the connection
    $pdo = null;

    // Response to client
    echo "Thank you, $name! Your message has been received.";
} catch (PDOException $e) {
    // Error handling
    echo "Error: " . $e->getMessage();
}
?>
