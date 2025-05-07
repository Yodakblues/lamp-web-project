<form action="login.php" method="post">
  Email: <input type="email" name="email" required><br>
  Password: <input type="password" name="password" required><br>
  <input type="submit" value="Login">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $conn = new mysqli("localhost", "root", "Yodak45k!", "lamp_project");

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $email = $_POST["email"];
  $password = $_POST["password"];

  $sql = "SELECT password FROM users WHERE email='$email'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row["password"])) {
      echo "Login successful!";
    } else {
      echo "Invalid password.";
    }
  } else {
    echo "User not found.";
  }

  $conn->close();
}
?>
