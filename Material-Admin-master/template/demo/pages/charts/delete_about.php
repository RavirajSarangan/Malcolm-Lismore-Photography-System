<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM about WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        // PHP script to redirect with alert message
        echo '<script>alert("About section entry is deleted successfully."); window.location.href = "chartjs.php";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
