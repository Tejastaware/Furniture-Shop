<?php
include 'connection_code.php';

// Clean the data to prevent SQL injection
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Extract and clean form data
$name = test_input($_POST['name']);
$email = test_input($_POST['email']);
$message = test_input($_POST['message']);

// Prepare SQL query
$sql = "INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)";

// Prepare statement
$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("sss", $name, $email, $message);

// Execute query
if ($stmt->execute()) {
    echo "Message sent successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
