<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "tourism_website";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$destination = $_POST['destination'];
$number_of_people = $_POST['number_of_people'];
$arrival_date = $_POST['arrival_date'];
$leaving_date = $_POST['leaving_date'];
$details = $_POST['details'];

// Prepare the SQL statement
$sql = "INSERT INTO bookings (destination, number_of_people, arrival_date, leaving_date, details) 
        VALUES (?, ?, ?, ?, ?)";

// Prepare statement to avoid SQL injection
$stmt = $conn->prepare($sql);
$stmt->bind_param("sisss", $destination, $number_of_people, $arrival_date, $leaving_date, $details);

// Execute the query
if ($stmt->execute()) {
    echo "Booking successfully saved!";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
