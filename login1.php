<?php
$servername = "localhost";
$username_db = "root";
$password_db = "";
$dbname = "final";
$conn = new mysqli($servername, $username_db, $password_db, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$username = $_POST['username'];
$password = $_POST['password'];
if (!preg_match('/^[a-zA-Z0-9_]+$/', $username)) {

    die("Invalid username format");
}
$username = $conn->real_escape_string($username);
$password = $conn->real_escape_string($password);

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    header("Location: Material-Admin-master/template/index.php");
} else {

    echo "Invalid username or password";
}

$conn->close();
?>
