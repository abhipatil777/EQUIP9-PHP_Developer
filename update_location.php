<?php
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    $newLatitude = $_POST['updateLatitude'];
    $newLongitude = $_POST['updateLongitude'];

    // Check if the entry exists
    $checkQuery = "SELECT id FROM locations WHERE latitude = ? AND longitude = ?";
    $stmt = $conn->prepare($checkQuery);
    $stmt->bind_param('dd', $latitude, $longitude);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Entry exists, proceed with update
        $updateQuery = "UPDATE locations SET latitude = ?, longitude = ? WHERE latitude = ? AND longitude = ?";
        $stmt = $conn->prepare($updateQuery);
        $stmt->bind_param('dddd', $newLatitude, $newLongitude, $latitude, $longitude);

        if ($stmt->execute()) {
            echo "Location updated successfully.";
        } else {
            echo "Error updating location: " . $stmt->error;
        }
    } else {
        echo "Location not found in the database.";
    }
} else {
    echo "Invalid request method.";
}
?>
