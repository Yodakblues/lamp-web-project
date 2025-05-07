<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include 'includes/header.php';
?>

<h2>Dashboard</h2>
<p>Welcome! You are logged in.</p>
<a href="logout.php">Logout</a>

<?php include 'includes/footer.php'; ?>
