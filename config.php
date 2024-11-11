<?php
// Database connection parameters
$conn = mysqli_connect('localhost', 'root', '', 'social_media');

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
