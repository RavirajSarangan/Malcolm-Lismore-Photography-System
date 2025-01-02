<?php
if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    // Get index of contact to delete
    parse_str(file_get_contents("php://input"), $_DELETE);
    $index = $_DELETE['index'];

    // Fetch contacts
    $contacts = file('contacts.txt');

    // Check if index is valid
    if (isset($contacts[$index])) {
        // Remove contact from array
        unset($contacts[$index]);

        // Rewrite contacts file
        file_put_contents('contacts.txt', implode('', $contacts));

        // Return success response
        header('Content-Type: application/json');
        echo json_encode(['success' => true]);
    } else {
        // Return error response
        header('Content-Type: application/json');
        echo json_encode(['success' => false]);
    }
}
?>
