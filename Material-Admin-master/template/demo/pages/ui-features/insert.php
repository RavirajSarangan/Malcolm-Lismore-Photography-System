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
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $image_id = mysqli_real_escape_string($conn, $_POST['image_id']);
    $image_title = mysqli_real_escape_string($conn, $_POST['image_title']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $target_directory = 'path/to/uploaded/';
        $image_name = $_FILES['image']['name'];
        $image_path = $target_directory . $image_name;

        if (!is_dir($target_directory)) {
            mkdir($target_directory, 0755, true);
        }

        if (move_uploaded_file($_FILES['image']['tmp_name'], $image_path)) {
            $sql = "INSERT INTO gallery (image_id, image_title, category, image_path)
                    VALUES ('$image_id', '$image_title', '$category', '$image_path')";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo '<script>alert("Data inserted successfully!"); window.location.href = "buttons.php";</script>';
                exit; 
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        } else {
            echo "Failed to upload the image.";
        }
    } else {
        echo "No file was uploaded or an error occurred during upload.";
    }
}
?>

<?php
mysqli_close($conn);
?>