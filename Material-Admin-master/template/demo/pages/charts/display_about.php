
<?php
include 'config.php';

$sql = "SELECT * FROM about";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['title']}</td>
                <td>{$row['description']}</td>
                <td>
                    <a href='update_about.php?id={$row['id']}'>Update</a>
                    <a href='delete_about.php?id={$row['id']}'>Delete</a>
                </td>
            </tr>";
    }
    echo "</tbody></table>";
} else {
    echo "No records found";
}

$conn->close();
?>