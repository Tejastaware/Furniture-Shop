<?php
include 'connection_code.php';

// Fetching form data
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
// SQL query to insert data into the table
$sql= "INSERT INTO registration (username, password, email, address, mobile) VALUES ('$username', '$password', '$email','$address','mobile')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>