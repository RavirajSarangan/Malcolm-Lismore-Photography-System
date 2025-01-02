<?php
include 'db.php'; // Assuming this file contains the database connection

if (isset($_GET['image_id'])) {
    $imageId = mysqli_real_escape_string($conn, $_GET['image_id']);

    // Use prepared statement to prevent SQL injection
    $deleteSql = "DELETE FROM gallery WHERE image_id = ?";
    $deleteStmt = mysqli_prepare($conn, $deleteSql);

    if ($deleteStmt) {
        mysqli_stmt_bind_param($deleteStmt, "i", $imageId);
        $deleteResult = mysqli_stmt_execute($deleteStmt);

        if ($deleteResult) {
            // Success: Redirect or show a success message
            header('Location: typography.php');
            exit;
        } else {
            // Handle execute error
            $error = mysqli_error($conn);
            echo "Error deleting record: $error";
        }
    } else {
        // Handle prepare error
        echo "Error preparing statement";
    }
} else {
    // Handle case where image_id is not set
    echo "Invalid request";
}
?>
