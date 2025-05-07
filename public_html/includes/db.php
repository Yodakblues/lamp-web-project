<?php
$host = 'localhost';
$dbname = 'lamp_project';
$username = 'lamp_user';  // Change to 'lamp_user'
$password = 'lamp_password';  // Change to 'lamp_password'

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
