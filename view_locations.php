<?php
require_once('config.php');

// Retrieve all locations
$query = "SELECT latitude, longitude FROM locations";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo "<h2>Locations:</h2>";
    echo "<ul>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<li>Latitude: " . $row["latitude"] . ", Longitude: " . $row["longitude"] . "</li>";
    }
    
    echo "</ul>";
} else {
    echo "No locations found in the database.";
}

$result->close();
?>
