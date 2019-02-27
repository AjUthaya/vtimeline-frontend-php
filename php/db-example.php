<?php
$servername = "localhost:3000";
$username = "DB_USERNAME";
$password = "DB_PASSWORD";
$dbname = "timeline";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else {

}
?>
