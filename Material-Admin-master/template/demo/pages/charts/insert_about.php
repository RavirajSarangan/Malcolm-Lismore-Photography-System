<?php
include 'config.php';

if (isset($_POST['insert'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $sql = "INSERT INTO about (title, description) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $title, $description);

    if ($stmt->execute()) {
        header("Location: chartjs.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>