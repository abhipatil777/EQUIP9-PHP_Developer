<?php
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $selectQuery = "SELECT * FROM locations WHERE is_active = 1";
    $result = $conn->query($selectQuery);

    if ($result->num_rows > 0) {
        $locations = array();
        while ($row = $result->fetch_assoc()) {
            $locations[] = $row;
        }
        echo json_encode($locations);
    } else {
        echo "No locations found.";
    }
} else {
    echo "Invalid request method.";
}
?>
