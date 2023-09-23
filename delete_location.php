<?php
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    parse_str(file_get_contents("php://input"), $deleteData);
    $locationId = $deleteData['id'];

    $deleteQuery = "UPDATE locations SET is_active = 0 WHERE id = ?";
    $stmt = $conn->prepare($deleteQuery);
    $stmt->bind_param('i', $locationId);
    
    if ($stmt->execute()) {
        echo "Location deleted successfully.";
    } else {
        echo "Error deleting location: " . $stmt->error;
    }
} else {
    echo "Invalid request method.";
}
?>
