<?php

// TODO: you can add your validations here
$data = $_GET['data'];

// TODO: enter your own database data
$servername = "localhost";
$username = "YOUR USERNAME";
$password = "PASS";
$dbname = "your database name";

// Create connection to mysql server
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO YourTableName (data) VALUES ($data)";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
