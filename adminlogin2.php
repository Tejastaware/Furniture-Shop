<?php

include 'connection_code.php';

// Get form data
$adminname = $_POST['adminname'];
$password = $_POST['password'];

// SQL query to insert data into the database
$sql = "INSERT INTO admin (adminname, password) VALUES ('adminname', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "login successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>










































