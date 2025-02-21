<?php
$servername = "localhost";
$username = "root";  // Default username for XAMPP
$password = "";  // Default password for XAMPP
$database = "college_portal";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $date = $_POST['date'];
    $type = $_POST['type'];

    if ($type == "announcement") {
        $sql = "INSERT INTO announcements (title, date) VALUES ('$title', '$date')";
    } else {
        $sql = "INSERT INTO events (title, date) VALUES ('$title', '$date')";
    }

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New $type added successfully!'); window.location.href='add_data.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Announcement/Event</title>
</head>
<body>
    <h2>Add Announcement/Event</h2>
    <form method="POST">
        <label>Title:</label>
        <input type="text" name="title" required><br><br>

        <label>Date:</label>
        <input type="date" name="date" required><br><br>

        <label>Type:</label>
        <select name="type">
            <option value="announcement">Announcement</option>
            <option value="event">Event</option>
        </select><br><br>

        <button type="submit">Add</button>
    </form>
</body>
</html>
