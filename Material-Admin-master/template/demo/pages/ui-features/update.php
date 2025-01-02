<?php
$host = 'localhost'; 
$username = 'root';
$password = '';
$database = 'final';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, 'utf8');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $image_id = mysqli_real_escape_string($conn, $_POST['image_id']);
    $image_title = mysqli_real_escape_string($conn, $_POST['image_title']);
    $category = isset($_POST['category']) ? mysqli_real_escape_string($conn, $_POST['category']) : '';

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $target_directory = 'path/to/uploaded/';
        $image_name = $_FILES['image']['name'];
        $image_path = $target_directory . $image_name;

        if (!is_dir($target_directory)) {
            mkdir($target_directory, 0755, true);
        }

        if (move_uploaded_file($_FILES['image']['tmp_name'], $image_path)) {
            $sql = "UPDATE gallery SET image_title = '$image_title', category = '$category', image_path = '$image_path' WHERE image_id = '$image_id'";
        } else {
            echo "Failed to upload the image.";
            exit;
        }
    } else {
        // If no image is uploaded, update only the title and category
        $sql = "UPDATE gallery SET image_title = '$image_title', category = '$category' WHERE image_id = '$image_id'";
    }

    if (mysqli_query($conn, $sql)) {
        echo "Update successful";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
