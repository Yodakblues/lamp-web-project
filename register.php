<form action="register.php" method="post">
  Email: <input type="email" name="email" required><br>
  Password: <input type="password" name="password" required><br>
  <input type="submit" value="Register">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $conn = new mysqli("localhost", "root", "Yodak45k!", "lamp_project");

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $email = $conn->real_escape_string($_POST["email"]);
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

  $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
  
  if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
  } else {
    echo "Error: " . $conn->error;
  }

  $conn->close();
}
?>
