<?php
// Check if the form is submitted via POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $planning = isset($_POST['planning']) ? $_POST['planning'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    // Example: Save booking to a database
    // Establish a database connection (replace these values with your actual database credentials)
    $conn = new mysqli("localhost", "root", "", "final");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement
    $sql = "INSERT INTO bookings (name, email, phone, planning, message) VALUES (?, ?, ?, ?, ?)";

    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $email, $phone, $planning, $message);

    // Execute the statement
    if ($stmt->execute()) {
        // Booking successfully saved
        echo "<script>alert('Booking successfully saved.');</script>"; // JavaScript alert
        echo "<script>window.location.href = 'apply.php';</script>"; // Redirect to apply.php upon successful execution
        exit(); // Ensure that script stops execution after redirection
    } else {
        // Error saving booking
        echo "<script>alert('An error occurred while processing your booking. Please try again later.');</script>"; // JavaScript alert
    }
    
    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    // If the form is not submitted via POST method, redirect or handle accordingly
    echo "<script>alert('Invalid request.');</script>"; // JavaScript alert
    echo "<script>window.location.href = 'index.php';</script>"; // Redirect to index.php or appropriate page
}
?>
