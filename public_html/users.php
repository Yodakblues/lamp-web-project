<?php
include 'includes/header.php';
include 'includes/db.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<h1>Users List</h1>

<?php if ($result->num_rows > 0): ?>
    <ul>
        <?php while($row = $result->fetch_assoc()): ?>
            <li>
                <strong>Name:</strong> <?= htmlspecialchars($row['name']) ?> <br>
                <strong>Email:</strong> <?= htmlspecialchars($row['email']) ?> <br>
                <hr>
            </li>
        <?php endwhile; ?>
    </ul>
<?php else: ?>
    <p>No users found.</p>
<?php endif; ?>

<?php
include 'includes/footer.php';
$conn->close();
?>
