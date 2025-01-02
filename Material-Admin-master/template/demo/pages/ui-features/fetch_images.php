
<?php
// fetch_images.php
require_once 'db.php';

$query = "SELECT * FROM gallery";
$searchTerm = isset($_GET['query']) ? $_GET['query'] : '';

try {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "final";
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (!empty($searchTerm)) {
        $query .= " WHERE title LIKE :searchTerm";
        $stmt = $pdo->prepare($query);
        $stmt->execute(['searchTerm' => "%$searchTerm%"]);
    } else {
        $stmt = $pdo->query($query);
    }

    echo '<div class="gallery">'; // Open gallery container

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        if (isset($row['file_path']) && isset($row['title'])) {
            echo '<div class="gallery-item">';
            echo '<img src="' . htmlspecialchars($row['file_path']) . '" alt="' . htmlspecialchars($row['title']) . '" style="width: 100px;">';
            echo '<div class="caption">' . htmlspecialchars($row['title']) . '</div>';
            echo '</div>';
        }
    }

    echo '</div>'; // Close gallery container

} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>