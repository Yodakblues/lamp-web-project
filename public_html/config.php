<?php
$servername = "localhost";
$username = "root"; // your MySQL username
$password = "your_new_password"; // the password you set for root
$dbname = "lamp_project"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
