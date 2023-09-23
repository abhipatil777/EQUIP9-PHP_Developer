<?php
$host = 'localhost'; // Replace with your database server hostname or IP
$username = 'root'; // Replace with your database username
$password = ''; // Replace with your database password
$database = 'distance_db';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
require_once('config.php');

if ($conn->ping()) {
    echo "Connected to the database successfully.";
} else {
    echo "Connection to the database failed: " . $conn->error;
}
?>
