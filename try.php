<?php

include 'connection_code.php';

// Get form data
$username = $_POST['username'];
$password = $_POST['password'];


// SQL query to insert data into the database
$sql = "INSERT INTO registration2 (username, password) VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "login successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>










































