<?php
$servername = "localhost";
$username = "root";  
$password = "";  
$database = "college_portal";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch announcements
$announcements_query = "SELECT * FROM announcements ORDER BY date DESC";
$announcements_result = $conn->query($announcements_query);

// Fetch events
$events_query = "SELECT * FROM events ORDER BY date DESC";
$events_result = $conn->query($events_query);

$conn->close();
?>