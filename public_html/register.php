<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php
include 'includes/header.php';
require 'includes/db.php';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
    if ($stmt->execute([$email, $password])) {
        $message = "Registration successful!";
    } else {
        $message = "Error: Email may already be registered.";
    }
}
?>

<h2>Register</h2>
<p><?php echo $message; ?></p>
<form method="POST" action="register.php">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="submit" value="Register">
</form>
<a href="login.php">Already have an account? Login</a>

<?php include 'includes/footer.php'; ?>
